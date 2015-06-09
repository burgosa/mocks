@extends('shopper')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<span class="pull-left"><a href="{{ url('/shopper/order') }}"><i class="fa fa-times"></i></a></span>
			Información de Orden 
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12 text-left">
			<small>ORDEN ACTUAL</small><br>
			<b>Carulla Pepe Sierra</b><br>
			Estado: Nueva Orden
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12 block-heading grey-bg">
			<h5>Cliente -  Alvaro Burgos</h5>
		</div>
		<div class="col-md-12 block-heading border-bottom">
			<i class="fa fa-location-arrow"></i> <span style="line-height: 30px">Carrera 14 #111 30</span> <a class=" pull-right btn btn-sm btn-default">Mapa ></a>
		</div>
		<div class="col-md-12 block-heading border-bottom">
			<b><i class="fa fa-clock-o"></i> <span style="line-height: 30px">Entrega 9/6/2015 7:30PM</span></b>
		</div>
		<div class="col-md-12 block-heading border-bottom">
			<i class="fa fa-phone"></i> <span style="line-height: 30px">Llamar al Cliente</span> <a class=" pull-right btn btn-sm btn-default">Llamar</a>
		</div>
		<div class="col-md-12 block-heading border-bottom">
			<i class="fa fa-shopping-cart"></i> <span style="line-height: 30px">Ver los 15 Productos</span> <a class=" pull-right btn btn-sm btn-default">Ver </a>
		</div>
		<div class="col-md-12 block-heading grey-bg">
			<small>¿Problemas? ¿Ayuda?</small><br>
			Llamar a Mercadoni
		</div>

	</div>
	<br><br><br><br><br><br><br><br><br>
	<div class="row">
		<div class="col-md-12">
			<btn class="btn btn-block btn-primary">Aceptar Orden</btn>
		</div>
	</div>
</div>
@endsection
