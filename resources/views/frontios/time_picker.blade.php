@extends('ios')

@section('content')
<div class="container-fluid">
	
	<br>
	<div class="row">
		<div class="col-md-12 block-heading text-center border-bottom">
			Delivery time for <h4>Gastrononmy</h4>
			a shopper will arrive with your order
		</div>
	</div>
	<br><br><br><br>
	<div class="row primary-bg">
		
		<div class="col-md-3 selected-time block-heading text-center">
			<span class="selected">Today<br><span style="font-size:13px">18 Jun</span></span>
		</div>
		<div class="col-md-3 not-selected-time block-heading text-center">
			Jueves<br><span style="font-size:13px">18 Jun</span>

		</div>
		<div class="col-md-3 not-selected-time block-heading text-center">
			Lunes<br><span style="font-size:13px">18 Jun</span>
		</div>
		<div class="col-md-3 not-selected-time block-heading text-center">
			Martes<br><span style="font-size:13px">18 Jun</span>
		</div>
		
	</div>
	<br><br><br><br>
	<div class="row primary-bg-2">
		<div class="col-md-12 block-heading text-center"> 
			Please select a time for Tomorrow 18 Jun >
		</div>
	</div>
</div>
@endsection
