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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 text-center special-block block-heading border-bottom">
			6/9/2015
		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			<a href="{{ URL::to('front-ios/orders/summary') }}">A00560000</a>

		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			$60,000<span class="extra-details text-primary">Pendiente</span>
		</div>
		<div class="col-md-4 text-center special-block block-heading border-bottom">
			<span class="label label-success">NUEVO</span><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 text-center special-block block-heading border-bottom">
			6/9/2015
		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			<a href="{{ URL::to('front-ios/orders/summary') }}">A00560000</a>

		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			$60,000<span class="extra-details text-primary">Pagado</span>
		</div>
		<div class="col-md-4 text-center text-center special-block block-heading border-bottom">
			<span class="label label-primary">COMPLETADO</span><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 text-center special-block block-heading border-bottom">
			6/9/2015
		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			A00560000<br>

		</div>
		<div class="col-md-3 text-center special-block block-heading border-bottom">
			$0<span class="extra-details text-danger">Cancelado</span>
		</div>
		<div class="col-md-4 text-center special-block block-heading border-bottom">
			<span class="label label-danger">CANCELADO</span><br>
		</div>
	</div>
</div>
@endsection
