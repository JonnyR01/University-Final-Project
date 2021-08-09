<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $contents = Cart::content();
        return view('cart')->with('contents', $contents);
    }

    public function checkout()
    {
        $user = Auth::user();
        $stripeCustomer = $user->createOrGetStripeCustomer();
        return view('checkout', [
            'intent' => $user->createSetupIntent()
        ]);
    }


    public function addItem(Products $product)
    {

        $product = Cart::add($product->id, $product->name, 1, $product->price);
        session()->flash('success', 'Added to Cart');
        return redirect()->back();
    }

    public function destroy(Cart $cart)
    {
        $cart = Cart::destroy();
        session()->flash('success', 'Cart Removed');
        return redirect()->back();
    }

    public function stripe(Request $request)
    {
        // Validation on the phone number and post code
        $request->validate([
            "phone-number" =>"required|numeric|max:999999999999",
            "postcode" =>"required|regex:/^[A-Z]{1,2}\d[A-Z\d]? ?\d[A-Z]{2}$/"
        ]);
        $user = Auth::user();
        //taking user input to display in orders
        $order= $user->orders()->create([
            'name' => $request->get('card-holder-name'),
            'address' => $request->get('address'),
            'postcode' => $request->get('postcode'),
            'phone-number' => $request->get('phone-number'),
            'totalprice' => Cart::pricetotal(),
            'content'=>serialize(Cart::content())
        ]);
        // creating stripe user and then charging the pricetotal
        $stripeCustomer = $user->createOrGetStripeCustomer();
        $stripeCharge = $request->user()->charge(
            Cart::pricetotal() * 100, $request->get('card-id')
        );
        return view('success');
    }
}
