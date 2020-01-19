@extends('product.layout')

@section('content')

<div class="container">
  <div class="row">
  	<div class="col-sm-6 col-sm-offset-3">
  		<h2>Inline form</h2>
  		<p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>

  		@if($errors->any())
			<div class="alert alert-danger">
				<p><strong>Woops!</strong>Not Responding</p>
				<br>
				<ul>
					@foreach($errors->all() as $error)

						<li>{{$error}}</li>

					@endforeach
				</ul>
			</div>

  		@endif

  		@if($message = Session::get('success'))

			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>

  		@endif


  		<form class="form" action="{{ route('products.store') }}" method="POST">
  			@csrf
  		  <div class="form-group">
  		    <label for="email">Product Name:</label>
  		    <input type="text" class="form-control" id="email" placeholder="Enter Product Name" name="product_name">
  		  </div>
  		  <div class="form-group">
  		    <label for="pwd">Product Details:</label>
  		    <textarea class="form-control" id="pwd" placeholder="Enter Product Description" name="product_description"></textarea>
  		  </div>
  		  <button type="submit" class="btn btn-success">Submit</button>
  		</form>
  	</div>
  </div>
</div>

@endsection