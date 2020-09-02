@extends ('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('items.update',$item->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	{{-- //methos put က  update  လုပ်တာ --}}
	@method('PUT')
	{{-- // --}}
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-6">
			<input type="number" name="codeno" class="form-control" id="inputcodeno" value="{{ $item->codeno}}" readonly="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="name" class="form-control" id="inputname" value="{{ $item->name}}" >
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
			<input type="file" name="photo" class="form-control" id="inputphoto" >
			{{-- //oldphoto ပေါ်ဖို့--}}
			<img src="{{ asset($item->photo) }}" class="img-fluid w-25">

			<input type="hidden" name="oldphoto" value="{{ $item->photo }}">
			{{-- // --}}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
			<input type="text" name="price" class="form-control" id="inputprice" value="{{ $item->price}}">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-6">
			<input type="text" name="discount"  value="0" class="form-control" id="inputdiscount" value="{{ $item->discount}}">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
			<input type="textarea" name="description" class="form-control" id="inputdescription" value="{{ $item->description}}" >
		</div>
	</div>
	
	
	<div class="form-group row">
		<select class="form-control form-control-md" id="inputBrand" name="brand" value="{{ $item->brand}}">
			<optgroup label="Choose Brand">
				@foreach($brands as $brand)
				<option value="{{ $brand->id }}">{{ $brand->name }}</option>
				@endforeach

			</optgroup>
		</select>
		
	</div>

	<div class="form-group row">
		<select class="form-control form-control-md" id="inputSubcategory" name="subcategory" value="{{ $item->subcategory}}">
			<optgroup label="Choose Subcategory">
				@foreach($subcategories as $subcategory)
				<option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
				@endforeach

			</optgroup>
		</select>
		
	</div>
	<input type="submit" value="Update" class="btn btn-danger">
</form>
@endsection