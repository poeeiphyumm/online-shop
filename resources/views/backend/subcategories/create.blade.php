@extends ('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('subcategories.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="name" class="form-control" id="inputname" >
		</div>
	</div>
	
		
	<div class="form-group row">
		<select class="form-control form-control-md" id="inputcategory" name="category">
			<optgroup label="Choose Category">
				@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach

			</optgroup>
		</select>
		
	</div>
	<input type="submit" value="Create" class="btn btn-danger">
</form>
@endsection