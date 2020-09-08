@extends('master')

@section('content')
	
				

	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Categories</h1>
  		</div>
	</div>

	<div class="list-group">
		@foreach($categories as $category)

		<a href="fpage? blade={{ $category->id }}" class="danger list-group-item shadow p-3 mb-2 rounded" style="text-decoration: none;">{{ $category->name }}</a>
		@endforeach
	</div>
	<div class="col-lg-9">
		<h5 class="text-center">Foundation</h5>
	</div>

	<div class="row">
		@foreach($subcategory as $row)
		<div class="">
			<div class="box shadow">
				<img src="{{ $row->image }}" class="card-img-top">
			</div>
		</div>
		@endforeach
	</div>

@endsection