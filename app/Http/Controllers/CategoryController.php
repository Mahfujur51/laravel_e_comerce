<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Image;
class CategoryController extends Controller
{
	public function manage_category(){
		$category=Category::orderBy('id','desc')->get();
		return view('admin.pages.manage_category')->with('category',$category);
	}
	public function create_category(){
		$main_category=Category::orderBy('name','desc')->where('parent_id',NULL)->get();
		return view('admin.pages.create_category',compact('main_category'));
	}
	public function store_category(Request $request){
		$request->validate([
			'name'=>'required |max:150',
			'description'=>'required',
			'image'=>'nullable|image',
			
		]);
		$category =new Category;
		$category->name = $request->name;
		$category->description = $request->description;
		$category->parent_id=$request->parent_id;
		//image insert
		if(($request->image)>0)
		{		
			//insert image
			$image=$request->file('image');
			$img=time(). '.'.$image->getClientOriginalExtension();
			$location=public_path('images/category/' .$img);
			Image::make($image)->save($location);
			$category->image = $img;



		}
		$category->save();
		
		session()->flash('success','Category Inserted Successfully!!');
		return redirect()->route('admin.categories');
	}
	public function edit_category($id){
		$main_category=Category::orderBy('name','desc')->where('parent_id',NULL)->get();
		$category=Category::find($id);
		if (!is_null($category)) {
			return view('admin.pages.edit_category',compact('category','main_category'));
			
		}
		else
			return redirect()->route('admin.categories');



	}
	public function update_category(Request $request,$id){

		$request->validate([
			'name'=>'required |max:150',
			'description'=>'required',
			'image'=>'nullable|image',
			
		]);

		$category=Category::find($id);
		$category->name=$request->name;
		$category->description = $request->description;
		$category->parent_id=$request->parent_id;
		//image insert
		if(($request->image)>0)
		{		
			//insert image
			$image=$request->file('image');
			$img=time(). '.'.$image->getClientOriginalExtension();
			$location=public_path('images/category/' .$img);
			Image::make($image)->save($location);
			$category->image = $img;



		}
		$category->save();
		
		session()->flash('success','Category updated Successfully!!');
		return redirect()->route('admin.categories');

	}
}