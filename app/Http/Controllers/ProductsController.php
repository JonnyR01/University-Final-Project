<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function maincourses()
    {
        $products = Products::where('type',"=",'main course')->get();
        return view('products')->withProducts($products)->withTitle('Maincourses');
    }

    public function specials()
    {
        $products = Products::where('type',"=",'house special')->get();
        return view('products')->withProducts($products)->withTitle('House specials');
    }

}
