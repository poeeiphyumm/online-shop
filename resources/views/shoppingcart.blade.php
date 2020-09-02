@extends('master')

@section('content')


<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="categories" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th> </th>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Subtotal </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						

					</tbody>
					<tfoot id="shoppingcart_tfoot">
						<tr>
							<td colspan="8">
								<h3 class="text-right"> Total : 46,000 Ks </h3>
							</td>
						</tr>
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control " id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								@role('Customer')
								<button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
									Check Out 
								</button>
								@else
								<button href="{{ route('loginpage') }}" class="btn btn-secondary btn-block mainfullbtncolor">Login To Check Out</button>
								@endrole
							</td>
						</tr>
					</tfoot>
				</table>

				{{-- <a href="{{ route('mainpage') }}" class="btn btn-success">Continue Shopping</a> --}}

				{{-- <textarea class="notes" placeholder="Your Note Here !"></textarea>

				<a href="#" class="btn btn-info float-right buy_now">Checkout</a> --}}
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="categories" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>

		</div>
		

	</div>
	@endsection