@extends('app')
@section('content')
<div class="row">
	<div class="col-md-6">
		<h5>Retailers</h5>
	</div>
	<div class="col-md-6 text-right">
		<a class="btn btn-default" href="{{ url('/retailers/show-new') }}" role="button">Add Retailer</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<form>
		  	<div class="form-group">
		    	<input class="form-control" placeholder="Name">
			</div>
		</form>
		<hr>
		<table class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th>Active</th>
					<th>Name</th>
					<th>Cat Tree</th>
					<th>Locations</th>
					<th>Min Order Value</th>
				<tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="label label-success">Active</span></td>
					<td>Carulla</td>
					<td>Super</td>
					<td>3</td>
					<td>30,0000</td>
				</tr>
				<tr>
					<td><span class="label label-default">Inactive</span></td>
					<td>Pidefarma</td>
					<td>Pharma</td>
					<td>3</td>
					<td>30,0000</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
