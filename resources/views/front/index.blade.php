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
			<table class="table orders-summary-table table-hover">
				<thead>
					<tr>
						<th>Fecha</th>
						<th># de Pedido</th>
						<th>Total</th>
						<th>Envio</th>
						<th>Pago</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
					<tr href="orders/summary" class="pointer line-order">
						<td class="normal">06/09/2015</td>
						<td class="normal">A00560000</td>
						<td class="double">$60,000 <span class="extra-details text-primary">Pendiente</span></td>
						<td class="double">Casa <span class="extra-details">Padre Janariz 29 Apartamento 201<span></td>
						<td class="normal">*4111</td>
						<td class="normal"><span class="label label-success">NUEVO PEDIDO</span></td>
					</tr>
					<tr>
						<td class="normal">06/09/2015</td>
						<td class="normal">A00560000</td>
						<td class="double">$60,000 <span class="extra-details text-primary">Pendiente</span></td>
						<td class="double">Casa <span class="extra-details">Padre Janariz 29 Apartamento 201<span></td>
						<td class="normal">*4111</td>
						<td class="normal"><span class="label label-warning">EN PROCESO</span></td>
					</tr>
					<tr>
						<td class="normal">06/09/2015</td>
						<td class="normal">A00560000</td>
						<td class="double">$60,000 <span class="extra-details text-success">Pagado</span></td>
						<td class="double">Casa <span class="extra-details">Padre Janariz 29 Apartamento 201<span></td>
						<td class="normal">*4111</td>
						<td class="normal"><span class="label label-primary">COMPLETADO</span></td>
					</tr>
					<tr>
						<td class="normal">06/09/2015</td>
						<td class="normal">A00560000</td>
						<td class="double">$0<span class="extra-details text-danger">cancelado</span></td>
						<td class="double">Casa <span class="extra-details">Padre Janariz 29 Apartamento 201<span></td>
						<td class="normal">*4111</td>
						<td class="normal"><span class="label label-default">CANCELADO</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
