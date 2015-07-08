@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6">

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

    <h5>Cat 1 > Cat 2</h5>
  </div>
  <div class="col-md-6 text-right">
    <a href="" class="btn btn-default">Cancel</a>
    <a href="" class="btn btn-primary">Save</a>
  </div>
</div>
<hr>
<div role="tabpanel">
  	<ul class="nav nav-tabs" role="tablist">
    	<li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Info</a></li>
    	<li role="presentation"><a href="#masks" aria-controls="profile" role="tab" data-toggle="tab">Masks</a></li>
  	</ul>
  	<hr>
  	<div class="tab-content">
    	<div role="tabpanel" class="tab-pane active" id="info">
    		<div class="row">
				<div class="col-md-6">
				  	<form>
					    <div class="form-group">
					      	<label>Type</label>
					      	<select class="form-control"><option></option>
			                	<option value="1" selected>Super</option>
			                	<option value="2">Farma</option>
			              	</select>
					    </div>
					    <div class="form-group">
					      	<label>Father</label>
					      	<select class="form-control"><option></option>
			                	<option value="1" selected>Cat1</option>
			                	<option value="2">Cat2</option>
			              	</select>
					    </div>
					    <div class="form-group">
					      <label>Nombre</label>
					      <input class="form-control">
					    </div>
					    <div class="form-group">
					      	<label>Description</label>
					      	<textarea class="form-control"></textarea>
					    </div>
					</form>
				</div>
			</div>
    	</div>
    	<div role="tabpanel" class="tab-pane" id="masks">
    		<div class="row">
				<div class="col-md-6">
				  	<table class="table table-striped table-condensed table-bordered">
						<thead>
							<tr>
								<th style="width:15px"><input type="checkbox"></input></th>
								<th>Type</th>
								<th>Name</th>
							<tr>
						</thead>
						<tbody>
							<tr>
								<th style="width:15px"><input type="checkbox"></input></th>
								<td><span class="label label-success">Super</span></td>
								<td>Cat 1</td>
							</tr>
							<tr>
								<td><input type="checkbox"></input></td>
								<td><span class="label label-success">Super</span></td>
								<td>Cat 1 > Cat 2</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
    	</div>
	</div>

@endsection


