@extends('layouts.master')
@section('content')

    <div class="container mt-top-20">
                <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/products/1.jpg')}}" alt="First slide" height="450px">
        </div>
    
    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
            </div>
				<div class="col-md-8">
					<div class="weight">
						<h3>Search  Products</h3>
						<div class="row">


									
									<div class="card-body">
                                 	<h4 class="card-title">{{$product->title}}</h4>
										<p class="card-text">Taka- {{$product->price}}</p>
										<a href="#" class="btn btn-outline-warning">Add To Cart</a>
									</div>
								</div>
							</div>
					
							
						
					</div>
				</div>
				<br>
				
			</div>
			
			<div>
			
		</div>
		</div>
	


@endsection

