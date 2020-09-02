@extends ('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-6">
			<input type="number" name="codeno" class="form-control" id="inputcodeno">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="name" class="form-control" id="inputname" >
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
			<input type="file" name="photo" class="form-control" id="inputphoto">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
			<input type="text" name="price" class="form-control" id="inputprice">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-6">
			<input type="text" name="discount"  value="0" class="form-control" id="inputdiscount">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
			<input type="text" name="description" class="form-control" id="inputdescription" >
		</div>
	</div>
	
	
	<div class="form-group row">
		<select class="form-control form-control-md" id="inputBrand" name="brand">
			<optgroup label="Choose Brand">
				@foreach($brands as $brand)
				<option value="{{ $brand->id }}">{{ $brand->name }}</option>
				@endforeach

			</optgroup>
		</select>
		
	</div>

	<div class="form-group row">
		<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
			<optgroup label="Choose Subcategory">
				@foreach($subcategories as $subcategory)
				<option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
				@endforeach

			</optgroup>
		</select>
		
	</div>
	<input type="submit" value="Create" class="btn btn-danger">
</form>
@endsection