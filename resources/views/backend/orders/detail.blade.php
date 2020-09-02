@extends('backendtemplate')

@section('content')

<h1> Order Detail List</h1><br>
  		<div class="row">
        <div class="col-md-12">
          Order_date = {{ $orderd->orderdate}}
        </div>
        <div class="col-md-12">
          Voucher_No = {{ $orderd->voucherno}}
        </div>
      </div>

  	<div class="row">
       <div class="col-lg-12">
         <table class="table table-bordered " >
           <thead class="bg-dark text-white">
             <tr>
               <th>No</th>
               <th>Item Name</th>
               <th>Price</th>
               <th>Qty</th>
               <th>Subtotal</th>
            </tr> 

            </thead>
             <tbody >
            @php
              $i = 1;
              $total = 0;
            @endphp
          
            @foreach($orderdetail as $row)
              <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->price }}</td>
              <td>{{ $row->qty }}</td>
              <td>{{ $row->price * $row->qty }}MMK</td></tr>
              @php
               $total += $row->price * $row->qty  
              @endphp
            @endforeach
            <tr class="bg-dark text-white">
              <td colspan="4"> Total:</td>
              <td >{{ $total }}MMK</td>
            </tr>
           </tbody>
         </table>




@endsection