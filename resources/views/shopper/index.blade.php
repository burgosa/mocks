@extends('shopper')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<input data-on="Disponible" data-off="Ocupado" type="checkbox" checked data-toggle="toggle" data-onstyle="success">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
			<b class="text-center"> Trabajos Disponibles </b>
			<hr>
			<div class="list-group">
             	@for ($i = 0; $i < 10; $i++)

             	<a href="{{ url('/shopper/order') }}" class="list-group-item">
                    <b>Carulla Pepe Sierra</b>
                    <span class="pull-right text-muted small"><em>4 unicos (15 totales)</em>
                    </span>
                </a>
   
				@endfor
             
            </div>
		</div>
	</div>
</div>
@endsection

@section('explanation')
    @parent
    <h2> Comments </h2>
    <ul>
    	<li>Navbar, Status navbar, and trabajos disponibles nabvar fixed on top</li>
    	<li>When status is switched to "ocupado", trabajos disponibles and job's list also disappear </li>
    	<li>Trabajos disponbibles becomes scrollable if there are more that fits on the screen</li>
    	<li>Cuando se pull down, se refrescan y desaparecen ordenes ya asignadas a otros shoppers</li>
    	<li>Con sebas mirar a ver cual es la forma mas eficiente de refrescar los trabajos disponibles</li>
    </ul>
@stop
