@extends('backendtemplate')

@section('content')


	<h1> Order List</h1>
  		
  	<div class="row">
       <div class="col-lg-12">
         <table class="table table-bordered" >
           <thead>
             <tr>
               <th>Voucher No.</th>
               <th>User</th>
               <th>Total</th>
               <th>Note</th>
               <th>Actions</th>
            </tr> 

            </thead>
           <tbody >

           	@php $i=1; @endphp
            {{-- //categories က compact က၇တာ--}}
            @foreach ($orders as $order)
            <tr>
              <td>{{ $order->voucherno }}</td>
              <td>{{ $order->user->name }}</td>
              <td>{{ $order->total }}</td>
              <td>{{ $order->note }}</td>
              <td>
                <a href="{{route('orders.show',$order->id) }}" class="btn btn-primary">Detail</a>
                
              </td>
            </tr>
            @endforeach
             
           </tbody>
         </table>
       </div>
     </div>
	







@endsection