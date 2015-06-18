@extends('ios')
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
				<a class="navbar-brand" href="{{ url('/shopper') }}"> &nbsp;&nbsp;Order History</a>
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
			<i class="fa fa-shopping-cart"></i> <span style="line-height: 30px">Ver los 15 Productos</span>
		</div>
	</div>

@endsection
