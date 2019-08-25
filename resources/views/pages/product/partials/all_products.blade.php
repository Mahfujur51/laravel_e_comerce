<div class="container mt-top-20">
			<div class="row">
				@include('pages.product.product_sidebar')
				<div class="col-md-8">
					<div class="weight">
						<h3>All  Products</h3>
						<div class="row">


						@foreach ($products as $product)
								
							
							<div class="col-md-3">
								<div class="card">
									@php
										$i=1;
									@endphp
									@foreach ($product->images as $image)
										@if ($i>0)
										<a href="{{route('product.show',$product->slug)}}">	<img class="card-img-top product_img" src="{{ asset('images/products/'.$image->image) }}" alt="Card image"></a>
										@endif
										@php
											$i--;
										@endphp
									
									@endforeach
									
									<div class="card-body">
									<a href="{{route('product.show',$product->slug)}}"><h4 class="card-title">{{$product->title}}</h4></a>
										<p class="card-text">Taka- {{$product->price}}</p>
										<a href="#" class="btn btn-outline-warning">Add To Cart</a>
									</div>
								</div>
							</div>
						@endforeach
							
						
					</div>
				</div>
				<br>
				<div class="text-centre">{{$products->links()}}</div>
			</div>
			
			<div>
			
		</div>
		</div>
		
		