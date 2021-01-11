<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function maincourses() // Displays all the products in the DB with the allocated food type
    {
        //main course food products
        $products = Products::where('type',"=",'main course')->get();
        return view('products')->withProducts($products)->withTitle('Maincourses');
    }

    public function specials()
    {
        //house specials food products
        $products = Products::where('type',"=",'house special')->get();
        return view('products')->withProducts($products)->withTitle('House specials');
    }

    public function breakfasts()
    {
        //breakfast food products
        $products = Products::where('type',"=",'breakfast')->get();
        return view('products')->withProducts($products)->withTitle('Breakfasts');
    }

    public function deserts()
    {
        //breakfast food products
        $products = Products::where('type',"=",'deserts')->get();
        return view('products')->withProducts($products)->withTitle('Deserts');
    }

}
