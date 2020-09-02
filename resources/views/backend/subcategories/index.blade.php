@extends('backendtemplate')
@section('content')



<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Item List</h1>
        <a href="{{ route('subcategories.create') }}" class="btn btn-info mr-3">Add new</a>
  	
    </div>

</div>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
   			 <table class="table table-bordered ">
    			<thead class="thead-dark bg-dark text-white" >
		    		<tr>
			    		<td>No</td>
			    		<td>Name</td>
			    		<td>Actions</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($subcategories as $subcategory)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $subcategory->name }}</td>
			    		<td>
			    			<a href="#" class="btn btn-primary">Detail</a>
			    			<a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-secondary">Edit</a>
			    			<a href="#" class="btn btn-danger">Delete</a>
			    		</td>
		    		</tr>
		    		@endforeach
    			</tbody>
    			
    		</table>
    </div>
</div>
</div>

@endsection