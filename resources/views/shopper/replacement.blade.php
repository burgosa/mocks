@extends('shopper')


@section('content')

<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<span class="pull-left"><a href="{{ url('/shopper/product') }}"><i class="fa fa-times"></i></a></span>
			<!-- <b class="text-center"> Carulla Pepe Sierra </b><span class="pull-right">
			<span class="pull-right"><a href="{{ url('/shopper/order-info') }}"><i class="fa fa-info-circle"></i></a></span> -->
		</div>
	</div>
	<br>
	<div class="row text-center" style="padding-bottom: 15px">
		<h5> Reemplazar / Reembolsar  - Producto Nombre </h5>
	</div>
	<hr>
	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Buscar producto">
	<hr>
	<div class="row">
		<div class="col-md-12 block-heading ">
			@for ($i = 1; $i < 15; $i++)
			<div class="media border-bottom">
			  	<div class="media-left">
			      	<img class="media-object" style="width:80px" src="https://s3-us-west-2.amazonaws.com/mercadoni/live/5561617789e9c82e00184550/medium_5561617789e9c82e00184550_0.jpg">
			  	</div>
			  	<div class="media-body text-center">
		  			<a href="{{ url('/shopper/product') }}">
			    		<h5 class="media-heading">Compota de Guayaba Heinz</h5>
			    		<p><b>Marca</b> Unidad<p>
			    			<button class="btn btn-sm btn-success"> Reemplazar</button>
		    		</a>
			  	</div>
			  	<br>
			</div>
			@endfor
		</div>
	</div>
	<br>
	<button class="btn btn-sm btn-danger btn-block"> Reembolsar Producto</button>
	<br>
</div>
<!-- Button trigger modal -->
@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <ul>
    	<li>Cargar Los productos de la categoria del producto. Ejemplo si es un desodorante cargar todos los desodorantes de es location</li>
    </ul>
@stop