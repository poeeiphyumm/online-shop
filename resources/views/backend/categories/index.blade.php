@extends('backendtemplate')
@section('content')



<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block">Category List</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-info mr-3">Add new</a>
  	
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
			    		<td>Photo</td>
			    		<td>Actions</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		{{-- //categories က compact က၇တာ--}}
		    		@foreach ($categories as $category)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $category->name }}</td>
			    		<td>{{ $category->photo }}</td>

			    		<td>
			    			<a href="#" class="btn btn-primary">Detail</a>
			    			<a href="{{ route('categories.edit',$category->id) }}" class="btn btn-secondary">Edit</a>
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