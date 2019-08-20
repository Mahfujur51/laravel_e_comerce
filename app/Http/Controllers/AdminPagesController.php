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
		$request->validate([
			'title'=>'required |max:150',
			'description'=>'required',
			'price'=>'required |numeric',
			'quantity'=>'required |numeric',
			
		]);
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
/*   if ($request->hasFile('product_images')) {
//insert that image
$image = $request->file('product_images');
$img = time() . '.'. $image->getClientOriginalExtension();
$location = public_path('images/products/' .$img);
Image::make($image)->save($location);
$product_images = new ProductImage;
$product_images->product_id = $product->id;
$product_images->image = $img;
$product_images->save();
}*/
if (count($request->product_image) > 0) {
	foreach ($request->product_image as $image) {
//insert that image
//$image = $request->file('product_image');
		$img = time() . '.'. $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$product_image = new ProductImage;
		$product_image->product_id = $product->id;
		$product_image->image = $img;
		$product_image->save();
	}
}
return redirect()->route('admin.product.create');
}
public function mange_product(){
	$products = Product::orderBy('id','desc')->get();
	return view('admin.pages.manage_product')->with('products',$products);
}
public function product_edit($id){
	$products = Product::find($id);
	return view('admin.pages.edit_product')->with('products',$products);
}
public function product_update(Request $request,$id){
	$request->validate([
		'title'=>'required |max:150',
		'description'=>'required',
		'price'=>'required |numeric',
		'quantity'=>'required |numeric',
	]);
	$product=Product::find($id);
	$product->title=$request->title;
	$product->description=$request->description;
	$product->price=$request->price;
	$product->quantity=$request->quantity;
	$product->save();
	return redirect()->route('admin.products');
}
public function product_delete($id){
	$products=Product::find($id);
	if (!is_null($products)) {
		$products->delete();
	}
	session()->flash('success','Product Deleted Successfully !!');
	return redirect()->route('admin.products');
}
}