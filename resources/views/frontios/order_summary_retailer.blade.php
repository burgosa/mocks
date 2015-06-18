@extends('ios')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 special-block block-heading border-bottom">
			<span class="light-grey big">Estado:</span> <span class="text-success big">Nueva</span>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12 block-heading border-bottom">
			TUS PEDIDOS
		</div>
	</div>

	<div class="row">
		<div class="col-md-1 text-center block-heading border-bottom">
			<i class="fa fa-clock-o"></i>
		</div>
		<div class="col-md-5 block-heading border-bottom">
			Carulla
		</div>
		<div class="col-md-5 block-heading border-bottom">
			<a href="#">9/6/2015 14 - 15</a>
		</div>
		<div class="col-md-1 block-heading border-bottom">
			<i class="fa fa-caret-right"></i>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1 text-center block-heading border-bottom">
			<i class="fa fa-clock-o"></i>
		</div>
		<div class="col-md-5 block-heading border-bottom">
			Exito
		</div>
		<div class="col-md-5 block-heading border-bottom">
			9/6/2015 14 - 15
		</div>
		<div class="col-md-1 block-heading border-bottom">
			<a href="#"><i class="fa fa-caret-right"></i></a>
		</div>
	</div>
	<div class="row">
		<br>
		<div class="col-md-12 block-heading border-bottom">
			INFORMACIÓN DE ENTREGA
		</div>
	</div>

	<div class="row">
		<img width="100%" src="/img/map2.png">
	</div>
	<div class="row text-center">
		<div class="col-md-12 block-heading border-bottom">
			Calle 114 #11A 30 Apartamento 201
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Celular
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			675135998
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Instructones
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			Dejenlo en la puerta
		</div>
	</div>

	<div class="row">
		<br>
		<div class="col-md-12 block-heading border-bottom">
			TOTALES
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Carulla
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			$18.000
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Entrega
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			$2000
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Exito
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			$18.000
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			Entrega
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			$2000
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-left block-heading border-bottom">
			<b>Total</b>
		</div>
		<div class="col-md-6 text-right  block-heading border-bottom">
			<b>$40.000</b>
		</div>
	</div>
	<br>
	<button class="btn btn-danger btn-block">CANCEL ORDER</button>
	<br>
</div>
@endsection
