<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductshopController extends Controller
{
    public function productShop()
    {
    	//$product = Product::all();
    	$product = Product::paginate(10);
    	return view('productshop', ['product' => $product]);
    }
}
