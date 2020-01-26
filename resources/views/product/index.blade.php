@extends ('product.layout')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-sm-12">
			<div class="">
				<h2>Display Product Data Table</h2>
				<a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
			</div>
			@if($message = Session::get('success'))

				<div class="alert alert-success">
					{{ $message }}
				</div>

			@endif
			<table class="table table-responsive table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Product Name</th>
						<th>Product Details</th>
						<th>Product View</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $product->product_name }}</td>
						<td>{{ $product->product_description }}</td>
						<td></td>
						<td >
							<form action="{{ route('products.destroy',$product->id) }}" method="POST">
								<a href="{{ route('products.edit',$product->id) }}" class="btn btn-info">Edit</a>

								@csrf
								@method('DELETE')

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $products->links() }}
		</div>
	</div>
</div>

@endsection