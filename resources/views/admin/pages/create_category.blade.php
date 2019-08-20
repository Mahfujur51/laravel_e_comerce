@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Add Product</h4>
			@include('admin.partials._message')
			<form class="forms-sample" method="POST" action="{{route('admin.category.store')}}"  enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" class="form-control"  name="name" placeholder="Enter the Category Name ">
				</div>
				<div class="form-group">
					<label >Description</label>
					<textarea class="form-control"rows="4" name="description" placeholder="Enter  Category The description"></textarea>
				</div>
				
				<div class="form-group">
					<label>Sub Category</label>
					<select name="parent_id" class="form-control">
						@foreach ( $main_category as $main_cat)
							<option value="{{$main_cat->id}}">{{$main_cat->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label id="image">Upload Image</label>
					<div class="row">
						<div class="col-md-4">
							<input type="file" class="form-control" id="image" name="image[]">
						</div>
							
						
					</div>
				</div>
				<br>
				<br>

				
				<button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
				<button class="btn btn-light">Cancel</button>
			</form>
		</div>
	</div>
</div>
@endsection