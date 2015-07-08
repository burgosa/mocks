@extends('app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">1</button>
  <button type="button" class="btn btn-default">2</button>

  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Dropdown link</a></li>
      <li><a href="#">Dropdown link</a></li>
    </ul>
  </div>
</div>

		<h5>Categories</h5>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-2">
    	<!-- Single button -->
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	All <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Super</a></li>
			    <li><a href="#">Farma</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<form>
		    <input class="form-control" placeholder="Name">
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<hr>
		<a class="btn btn-danger" href="{{ url('/categories/show-new') }}" role="button">
			<i class="fa fa-plus"></i> Add Category
		</a>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	Edit <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
			    <li><a href="#"><i class="fa fa-download"></i> Export spreadsheet</a></li>
			    <li><a href="#"><i class="fa fa-upload"></i> Import spreadsheet</a></li>
			</ul>
		</div>
		<hr>
		<table class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th>Type</th>
					<th>Slug</th>
					<th>Name</th>
				<tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="label label-success">Super</span></td>
					<td>Slug</td>
					<td>Cat 1</td>
				</tr>
				<tr>
					<td><span class="label label-danger">Farma</span></td>
					<td>Slug</td>
					<td>Cat 1 > Cat 2</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
