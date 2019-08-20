<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function products(){
    	$products= Product::orderBy('id','desc')->get();
    	return view('pages.product.index')->with('products',$products);
    } 
    public function show($slug){
    	
    }

}
