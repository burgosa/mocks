@extends('shopper')


@section('content')

<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<span class="pull-left"><a href="{{ url('/shopper') }}"><i class="fa fa-chevron-left"></i></a></span>
			<b class="text-center"> Carulla Pepe Sierra </b><span class="pull-right">
			<span class="pull-right"><a href="{{ url('/shopper/order-info') }}"><i class="fa fa-info-circle"></i></a></span>
		</div>
	</div>
	<br>
	<div class="row" style="padding-bottom: 15px">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified">
			  	<li role="presentation" class="active"><a href="{{ url('/shopper/retailer-2') }}"> (10) Lista</a></li>
  				<li role="presentation"><a href="{{ url('/shopper/retailer-2-carrito') }}">(1) Carrito</a></li>
  				<li role="presentation"><a href="{{ url('/shopper/retailer-2-revision') }}">(4) Revisión</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 block-heading ">
			@for ($i = 1; $i < 15; $i++)
			<br>
			<div class="media border-bottom">
				<span style="float:left" class="label label-warning">{{ $i }}</span>
			  	<div class="media-left">
			      	<img class="media-object" style="width:80px" src="https://s3-us-west-2.amazonaws.com/mercadoni/live/5561617789e9c82e00184550/medium_5561617789e9c82e00184550_0.jpg">
			  	</div>
			  	<div class="media-body text-center">
			  			<a href="{{ url('/shopper/product') }}">
				    		<h5 class="media-heading">Compota de Guayaba Heinz</h5>
				    		<p><b>Marca</b> Unidad<p>
			    		</a>
			  	</div>
			  	<br>
			</div>
			@endfor
		</div>
	</div>
</div>
<!-- Button trigger modal -->
@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <p>Esta pantalla le dice al shopper que tiene esta orden acepta y tiene que ser fullfilled por el.</p>
    <ul>
    	<li>Usar la unidad para que el shopper sepa que formato de producto comprar</li>
    	<li>Cuando se tap en la imagen se agranda para facil reconocimiento del shopper</li>
    </ul>
@stop