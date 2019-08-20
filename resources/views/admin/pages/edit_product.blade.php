@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Edit Product</h4>
			@include('admin.partials._message')
			<form class="forms-sample" method="POST" action="{{route('admin.product.update',$products->id)}}"  enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Title</label>
					<input type="text" class="form-control"  name="title" value="{{$products->title}}">
				</div>
				<div class="form-group">
					<label >Textarea</label>
					<textarea class="form-control"rows="4" name="description">
						{{$products->description}}
					</textarea>
				</div>
				<div class="form-group">
					<label >Price</label>
					<input type="text" class="form-control"  name="price" value="{{$products->price}}">
				</div>
				<div class="form-group">
					<label>Quentity</label>
					<input type="text" class="form-control" name="quantity" value="{{$products->quantity}}">
				</div>
				<div class="form-group">
					<label id="product_image">Upload Image</label>
					<div class="row">
						<div class="col-md-4">
							<input type="file" class="form-control" id="product_image" name="product_image[]">
						</div>
						<div class="col-md-4">
							<input type="file" class="form-control" id="product_image" name="product_image[]">
						</div>
						<div class="col-md-4">
							<input type="file" class="form-control" id="product_image" name="product_image[]">
						</div>
						<div class="col-md-4">
							<input type="file" class="form-control" id="product_image" name="product_image[]">
						</div>
						<div class="col-md-4">
							<input type="file" class="form-control" id="product_image" name="product_image[]">
						</div>
						
					</div>
				</div>
				<br>
				<br>
				
				<button type="submit" class="btn btn-gradient-primary mr-2">Update Product</button>
				<button class="btn btn-light">Cancel</button>
			</form>
		</div>
	</div>
</div>
@endsection