<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;



class AdminPagesController extends Controller
{
	public function index(){
		return view('admin.index');
	}
	public function product_create(){
		return view('admin.pages.create');
	} 
	public function product_store(Request $request){
		$product=new Product;

		$product->title=$request->title;
		$product->description=$request->description;
		$product->price=$request->price;
		$product->quantity=$request->quantity;
		$product->slug=str_slug($request->title);
		$product->brand_id=1;
		$product->category_id=1;
		$product->admin_id=1;
		$product->save();

//  ProductImage Model insert image
        if ($request->hasFile('product_images')) {
          //insert that image
          $image = $request->file('product_images');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/products/' .$img);
          Image::make($image)->save($location);
        
          $product_images = new ProductImage;
          $product_images->product_id = $product->id;
          $product_images->image = $img;
          $product_images->save();
        }
        
		return redirect()->route('admin.product.create');

	}
}
