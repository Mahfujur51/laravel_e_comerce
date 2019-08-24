<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Image;
use File;

class CategoryController extends Controller
{
	public function manage_category()
	{
		$categories = Category::OrderBy('id', 'desc')->get();
		return view('admin.pages.manage_category', compact('categories'));
	}
	public function create_category()
	{
		$main_categories = Category::OrderBy('id', 'desc')->where('parent_id', NULL)->get();
		return view('admin.pages.create_category', compact('main_categories'));
	}
	public function store_category(Request $request)
	{
		$request->validate([
			'name' => 'required |max:150',
			'description' => 'required',
			'image' => 'nullable|image',
		]);

		$category = new Category();
		$category->name = $request->name;
		$category->description = $request->description;
		$category->parent_id = $request->parent_id;
		if (($request->image) > 0) {

			//insert image
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/category/' . $img);
			Image::make($image)->save($location);
			$category->image = $img;
		}
		$category->save();
		session()->flash('success', 'Category Created  Successfully !!');
		return redirect()->route('admin.categories');
	}
	public function edit_category($id)
	{
		$main_categories = Category::OrderBy('id', 'desc')->where('parent_id', NULL)->get();
		$categories = Category::find($id);
		return view('admin.pages.update_category', compact('categories', 'main_categories'));
	}
	public function update_category(Request $request, $id)
	{
		$request->validate([
			'name' => 'required |max:150',
			'description' => 'required',
			'image' => 'nullable|image',
		]);
		$category = Category::find($id);

		$category->name = $request->name;
		$category->description = $request->description;
		$category->parent_id = $request->parent_id;
		if (($request->image) > 0) {

			//insert image
			if (File::exists('images/category/' . $category->image)) {
				File::delete('images/category/' . $category->image);
				# code...
			}
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/category/' . $img);
			Image::make($image)->save($location);
			$category->image = $img;
		}
		$category->save();
		session()->flash('success', 'Category updated  Successfully !!');
		return redirect()->route('admin.categories');
	}
	public function delete_category($id)
	{

		$del_category = Category::find($id);
		if (!is_null($del_category)) {
			if ($del_category->parent_id == NULL) {
				$sub_categories = Category::OrderBy('id', 'desc')->where('parent_id', NULL)->get();
				foreach ($sub_categories as $sub) {
					if (File::exists('images/category/' . $sub->image)) {
						File::delete('images/category/' . $sub->image);
						# code...
					}
				}
			}
		}
		if (File::exists('images/category/' . $del_category->image)) {
			File::delete('images/category/' . $del_category->image);
			# code...
		}

		$del_category->delete();
		session()->flash('success', 'Category Deleted  Successfully !!');
		return redirect()->route('admin.categories');
	}
}
