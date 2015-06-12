@extends('shopper')


@section('content')

<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<span class="pull-left"><a href="{{ url('/shopper/retailer-2') }}"><i class="fa fa-times"></i></a></span>
			<!-- <b class="text-center"> Carulla Pepe Sierra </b><span class="pull-right">
			<span class="pull-right"><a href="{{ url('/shopper/order-info') }}"><i class="fa fa-info-circle"></i></a></span> -->
		</div>
	</div>
	<br>
	<div class="row text-center" style="padding-bottom: 15px">
		<img class="img-responsive" style="margin:auto"src="https://s3-us-west-2.amazonaws.com/mercadoni/live/5561617789e9c82e00184550/medium_5561617789e9c82e00184550_0.jpg">
			<h4>Compota de Guayaba Heinz</h4>
			<p><b>Marca</b> Unidad<p>
	</div>
	<div class="row">
		<div class="col-md-12 block-heading ">
			<a class="btn btn-block btn-success">Reportar Encontrado</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 block-heading ">
			<table class="table table-hover">
		  		
		  		<tr><td>Cantidad</td><td>1</td></tr>
		  		<tr><td>Marca</td><td>Hola</td></tr>
		  		<tr><td>Unidad</td><td>1 Litro</td></tr>
		  		<tr><td>Precio</td><td>~8,000</td></tr>
		  		<tr><td>Categoria</td><td>Bebidas</td></tr>
			</table>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12 block-heading ">
			<a href="{{ url('/shopper/replacement') }}" class="btn btn-block btn-warning">Reemplazar / Reembolsar</a>
		</div>
	</div>
</div>

@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <p>Esta pantalla le dice al shopper que tiene esta orden acepta y tiene que ser fullfilled por el.</p>
    <ul>
    	<li>si hay una unidad, marcar como encontrado. Si hay mas de una unidad un pop up con la cantidad encontrada</li>
    	<li>Imagen tambien se agranda si se clicka</li>
    </ul>
@stop