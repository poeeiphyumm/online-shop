@extends ('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Category Edit Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	{{-- //methos put က  update  လုပ်တာ --}}
	@method('PUT')
	{{-- // --}}
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="name" class="form-control" id="inputname" value="{{ $category->name}}" >
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
			<input type="file" name="photo" class="form-control" id="inputphoto" >
			{{-- //oldphoto ပေါ်ဖို့--}}
			<img src="{{ asset($category->photo) }}" class="img-fluid w-25">

			<input type="hidden" name="oldphoto" value="{{ $category->photo }}">
			{{-- // --}}
		</div>
	</div>
	
	
	
	
	
	{{-- <div class="form-group row">
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
		
	</div> --}}
	<input type="submit" value="Update" class="btn btn-danger">
</form>
@endsection