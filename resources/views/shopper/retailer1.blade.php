@extends('shopper')


@section('content')

<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<!-- <span class="pull-left"><a href="{{ url('/shopper') }}"><i class="fa fa-chevron-left"></i></a></span> -->
			<b class="text-center"> Orden Aceptada </b><span class="pull-right">
			<span class="pull-right"><a href="{{ url('/shopper/order-info') }}"><i class="fa fa-info-circle"></i></a></span>
		</div>
	</div>
	<hr>
	<div class="row" style="padding-bottom: 15px">
		<div class="col-md-12">
			<h3 class="text-center"> Carulla Pepe Sierra</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 block-heading grey-bg">
			<h5>Dirección del Mercado</h5>
		</div>
		<div class="col-md-12 block-heading">
			<i class="fa fa-location-arrow"></i> Carrera 14 #111 30 <a class=" pull-right btn btn-sm btn-default">Mapa ></a> <br> 4 ùnicos (23 totales) 
		</div>

		<div class="col-md-12 block-heading grey-bg">
			<h5>Dirección del Cliente</h5>
		</div>
		<div class="col-md-12 block-heading">
			<i class="fa fa-location-arrow"></i> Calle 114 #11A 30 <a class=" pull-right btn btn-sm btn-default">Mapa ></a> <br> Alvaro Burgos
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="row">
		<div class="col-md-12">
			<a href="{{ url('/shopper/retailer-2') }}" class="btn btn-block btn-success">Empezar a Comprar</a>
		</div>
	</div>
</div>
@endsection


@section('explanation')
    @parent
    <h2> Comments </h2>
    <p>Esta pantalla le dice al shopper que tiene esta orden acepta y tiene que ser fullfilled por el.</p>
    <ul>
    	<li>Cuando se enseñe el mapara abilitar la opcion de ser guiado por gmaps/waze</li>
    </ul>
@stop