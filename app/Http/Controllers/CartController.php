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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addItem(Products $product)
    {

        $product = Cart::add($product->id, $product->name, 1, $product->price);
        session()->flash('success', 'Added to Cart');
        return redirect()->back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function remItem()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart = Cart::destroy();
        session()->flash('success', 'Cart Removed');
        return redirect()->back();
    }

    public function stripe(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        $order= $user->orders()->create([
            'name' => $request->get('card-holder-name'),
            'address' => $request->get('address'),
            'postcode' => $request->get('postcode'),
            'phone-number' => $request->get('phone-number'),
            'totalprice' => Cart::pricetotal(),
            'content'=>serialize(Cart::content())
        ]);
        $stripeCustomer = $user->createOrGetStripeCustomer();
        $stripeCharge = $request->user()->charge(
            Cart::pricetotal() * 100, $request->get('card-id')
        );
        return view('success');
    }
}
