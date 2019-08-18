@extends('layouts.master')
@section('content')

	<div class="container mt-top-20">
			<div class="row">
				<div class="col-md-4">
					<ul class="list-group">
						<li class="list-group-item">First item</li>
						<li class="list-group-item">Second item</li>
						<li class="list-group-item">Third item</li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="weight">
						<h3>Feature Products</h3>
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top product_img" src="{{ asset('images/1.jpg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung Guru</h4>
										<p class="card-text">5000-Tk</p>
										<a href="#" class="btn btn-outline-warning">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card" >
									<img class="card-img-top product_img" src="{{ asset('images/1.jpg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung Guru</h4>
										<p class="card-text">5000-Tk</p>
										<a href="#" class="btn btn-primary">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card" >
									<img class="card-img-top product_img" src="{{ asset('images/1.jpg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung Guru</h4>
										<p class="card-text">5000-Tk</p>
										<a href="#" class="btn btn-outline-warning">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card" >
									<img class="card-img-top product_img" src="{{ asset('images/1.jpg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung Guru</h4>
										<p class="card-text">5000-Tk</p>
										<a href="#" class="btn btn-outline-warning">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection