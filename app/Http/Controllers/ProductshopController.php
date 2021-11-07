<?php

namespace App\Http\Controllers;

use App\Product;

class ProductshopController extends Controller
{
    public function productShop()
    {
        return view('productshop', ['product' => Product::paginate(10)]);
    }
}
