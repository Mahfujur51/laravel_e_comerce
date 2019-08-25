<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function products()
    {
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('pages.product.index')->with('products', $products);
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!is_null($product)) {
            return view('pages.product.show')->with('product', $product);
        } else {
            session()->flash('errors', 'Sorry  !! your search product is not found');
            return redirect()->route('products');
        }
    }
}
