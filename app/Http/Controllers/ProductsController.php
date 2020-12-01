<?php

namespace App\Http\Controllers;

use App\Store;
use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
     public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }
     public function show(Product $product)
    {
    	$product ->transaction;
    	return view('products.show',compact('product'));
    }
}
