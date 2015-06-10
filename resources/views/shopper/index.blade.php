@extends('shopper')

@section('navbar')
	@parent
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/shopper') }}"> &nbsp;&nbsp;Shopper</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
@stop


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="block-heading border-bottom">
			&nbsp; <input data-on="Disponible" data-off="Ocupado" type="checkbox" checked data-toggle="toggle" data-onstyle="success">
		</div>
	</div>
	<div class="row">
		<div class="text-center block-heading green-bg border-bottom">
			<h4 class=""> Trabajos Aceptados </h4>
		</div>
	</div>
	<div class="row">
     	@for ($i = 0; $i < 2; $i++)
     		<a href="{{ url('/shopper/order') }}">
	     		<div class="col-md-12 block-heading border-bottom">
					<b>Carulla Pepe Sierra</b>
	                <span class="pull-right text-muted small"><em><i class="fa fa-clock-o"></i> D/M/YYYY 15:30 </i></em>
	                </span>
		            
				</div>
			</a>
		@endfor
	</div>
	<div class="row">
		<div class="text-center block-heading grey-bg border-bottom">
			<h4 class=""> Trabajos Disponibles </h4>
		</div>
	</div>
	<div class="row">
     	@for ($i = 0; $i < 15; $i++)
     		<a href="{{ url('/shopper/order') }}">
	     		<div class="col-md-12 block-heading border-bottom">
					<b>Carulla Pepe Sierra</b>
	                <span class="pull-right text-muted small"><em><i class="fa fa-clock-o"></i> D/M/YYYY 15:30 </i></em>
	                </span>
		            
				</div>
			</a>
		@endfor
	</div>
</div>
@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <ol>
    	<li>Navbar, Status navbar, and trabajos disponibles nabvar fixed on top</li>
    	<li>When status is switched to "ocupado", trabajos disponibles and job's list also disappear </li>
    	<li>Trabajos disponbibles becomes scrollable if there are more that fits on the screen</li>
    	<li>Cuando se pull down, se refrescan y desaparecen ordenes ya asignadas a otros shoppers</li>
    	<li>Con sebas mirar a ver cual es la forma mas eficiente de refrescar los trabajos disponibles</li>
    	<li>Ordenar por hora de entrega descendientemente</li>
    </ol>
@stop
