@extends('shopper')
@section('content')
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			Información de Factura
		</div>
	</div>
	<hr>
	<br>
	<div class="row">
	  	<div class="col-xs-6 col-md-3">
	  		<span class="pull-right"><a href="{{ url('') }}"><i class="fa fa-times"></i></a></span>
	    	<a href="#" class="thumbnail">
	      		<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=250&h=250">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	  		<span class="pull-right"><a href="{{ url('') }}"><i class="fa fa-times"></i></a></span>
	    	<a href="#" class="thumbnail">
	      		<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=250&h=250">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	  		<span class="pull-right"><a href="{{ url('') }}"><i class="fa fa-times"></i></a></span>
	    	<a href="#" class="thumbnail">
	      		<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=250&h=250">
	    	</a>
	  	</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form>
			  <div class="form-group">
			    <label># de Factura</label>
			    <input type="text" class="form-control" placeholder="Numero de Factura">
			  </div>
			  <div class="form-group">
			    <label>Costo de Factura</label>
			    <input type="text" class="form-control" placeholder="Costo de Factura">
			  </div>
			  <div class="form-group">

			    <a href="{{ url('') }}" class="btn btn-default">Foto de Factura <i class="fa fa-camera"></i></a>
			  </div>
			</form>
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-12 block-heading ">
			<a href="{{ url('shopper/retailer-2-revision-end') }}" class="btn btn-block btn-success">Continuar</a>
		</div>
	</div>
</div>
@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <p>Esta pantalla no se puede continuar sin completarla. Todos los campos son mandatorios</p>
    <p>Boton de continuar solo aparece al final</p>
    <ol>
    	<li>Numero de factura</li>
    	<li>Costo de la factura</li>
    	<li>Imagen/imagenes de la factura</li>
    	<li>Imagenes se pueden borrar y agrandar una vez subidas</li>
    	<li>Cuando se de a guardar se guardan las imagenes y el costo y numero</li>
    </ol>
@stop
