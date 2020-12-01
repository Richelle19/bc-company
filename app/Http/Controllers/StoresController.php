<?php

namespace App\Http\Controllers;
use App\Store;
use App\Product;
use App\Transaction;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    //
    public function index()
    {
    	$stores = Store::all();
    	return view('stores.index',compact('stores'));
    }
     public function show(Store $store)
    {
    	$store ->product;
    	return view('stores.show',compact('store'));
    }
}
