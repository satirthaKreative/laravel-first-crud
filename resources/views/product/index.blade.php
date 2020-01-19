@extends ('product.layout')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-sm-10 col-sm-offset-1">
			<div class="">
				<h2>Display Product Data Table</h2>
				<a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
			</div>
			<table class="table table-responsive table-striped">
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
						<td>1.</td>
						<td>{{ $product->product_name }}</td>
						<td>{{ $product->product_description }}</td>
						<td>2.</td>
						<td>3.</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $products->links() }}
		</div>
	</div>
</div>

@endsection