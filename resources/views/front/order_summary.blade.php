@extends('front')
@section('content')
<div class="account-container">
	<div class="account-header">
		<a href="#/mi-cuenta/informacion" class="header-title">Cuenta</a>
		<a href="#/mi-cuenta/direcciones" class="header-title">Direcciones</a>
		<a href="#/mi-cuenta/metodos-de-pago" class="header-title">Metodos de Pago</a>
		<a href="#/mi-cuenta/historial-de-pedidos" class="header-title active">Historial de Pedidos</a>
	</div>
	<div class="account-content row">
		<div class="col-md-12">
			<h3>Pedido A00650000 <small class="pull-right">Estado: <span class="text-success">NUEVA ORDEN</span></small></h3> 
		</div>
	</div>
	<hr>
	<div class="order-summary row">
		<div class="col-xs-8">
			<h4> Información de Pedido </h4>
			<hr>
			<div class="retailer-order">
				<div class="retailer-info">
					<div class="row">
						<div class="col-xs-7">
							<span class="retailer-name">Carulla (4) Productos</span>
							<span class="retailer-delivery-time"><b>Envio: </b> 06/09/2015 14:00-15:00</span>
						</div>
						<div class="col-xs-5 text-right">
							<span class="retailer-status">Estado: <span class="label label-success">CONFIRMADO</span></span>
							<span class="retailer-shopper"><b>Personal Shopper: </b> Alvaro</span>
						</div>
					</div>
				</div>
				<table class="table table-condensed">
					<tbody>
						<tr>
							<td> Cantidad </td>
							<td></td>
							<td> Producto / Unidad </td>
							<td> Total </td>
						</tr>
						@for($i = 1; $i < 8; $i++)
						<tr>
							<td><span class="qty">{{ $i }}</span></td>
							<td><img class="product-img" src="{{ URL::to('img/blue.jpg') }}"></td>
							<td><div class="product-name">
									Mayonesa industrial de la marca suputa
								</div>
								<div class="product-info">
									<span> $12,000</span> <span> 1 Unidad</span>
								</div>
							</td>
							<td>${{ $i*1000 }}</td>
						</tr>
						@endfor
						<tr class="totals">
							<td colspan="3">Total</td>
							<td>$100,000</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="retailer-order">
				<div class="retailer-info">
					<div class="row">
						<div class="col-xs-7">
							<span class="retailer-name">Carulla (4) Productos</span>
							<span class="retailer-delivery-time"><b>Envio: </b> 06/09/2015 14:00-15:00</span>
						</div>
						<div class="col-xs-5 text-right">
							<span class="retailer-status">Estado: <span class="label label-success">CONFIRMADO</span></span>
							<span class="retailer-shopper"><b>Personal Shopper: </b> Alvaro</span>
						</div>
					</div>
				</div>
				<table class="table table-condensed">
					<tbody>
						<tr>
							<td> Cantidad </td>
							<td></td>
							<td> Producto / Unidad </td>
							<td> Total </td>
						</tr>
						@for($i = 1; $i < 8; $i++)
						<tr>
							<td><span class="qty">{{ $i }}</span></td>
							<td><img class="product-img" src="{{ URL::to('img/blue.jpg') }}"></td>
							<td><div class="product-name">
									Mayonesa industrial de la marca suputa
								</div>
								<div class="product-info">
									<span> $12,000</span> <span> 1 Unidad</span>
								</div>
							</td>
							<td>${{ $i*1000 }}</td>
						</tr>
						@endfor
						<tr class="totals">
							<td colspan="3">Total</td>
							<td>$100,000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-xs-4">
			<h4> Información de Envio </h4>
			<hr>
			<p><b>Celular</b> 675135998<p>
			<p><b>Instrucciones</b> Llameme cuando llegue</p>
			<div class="panel panel-default">
			  	<div class="panel-body address-info">
			    	<img class="img-responsive" src="{{ URL::to('img/map.png') }}">
			  	</div>
			  	<div class="panel-heading"><i class="fa fa-map-marker"></i> <b>Casa</b> Padre Janariz 29 Apartamento 201</div>
			</div>
			
			<div class="order-totals-container">
				<h4> Totales </h4>
				<table class="table order-totals">
					<tbody>
						<tr>
							<td>
								<div class="retailer-name">Carulla</div>
								<div class="retailer-shipping">Envio</div>
							</td>
							<td class="text-right">
								<div class="retailer-name">$14,900</div>
								<div class="retailer-shipping">$14,900</div>
							</td>

						</tr>
						<tr>
							<td>
								<div class="retailer-name">Carulla</div>
								<div class="retailer-shipping">Envio</div>
							</td>
							<td class="text-right">
								<div class="retailer-name">$14,900</div>
								<div class="retailer-shipping">$14,900</div>
							</td>

						</tr>
						<tr class="master-total">
							<td>Total</td>
							<td class="text-right">$100,900</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>
@endsection
