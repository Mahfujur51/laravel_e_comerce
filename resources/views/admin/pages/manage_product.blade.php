@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Manage All Product</h4>
			@include('admin.partials._message')
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
					
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Sl No</th>
									<th>Title</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $key=>$product)
									{{-- expr --}}
								
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$product->title}}</td>
									<td>{{$product->price}}</td>
									<td>{{$product->quantity}}</td>
									<td>
										<a href="#exampleModal{{$product->id}}" class="btn btn-danger" type="button" class="btn btn-primary" data-toggle="modal" >Delete</a>


										<!-- Modal -->
										<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Are You want to Delete?? </h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														
														<form action="{{ route('admin.product.delete',$product->id) }}" method="POST" accept-charset="utf-8">
															@csrf
															
															<button type="submit" class="btn btn-danger">Delete</button>
														</form>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														
													</div>
												</div>
											</div>
										</div>



										<a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-success">Edit</a>
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection