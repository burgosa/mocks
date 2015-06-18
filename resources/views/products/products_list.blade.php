@extends('app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h5>Products</h5>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-5">
    	<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	All <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Active</a></li>
			    <li><a href="#">Not Active</a></li>
			</ul>
		</div>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	All Retailers <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Carulla</a></li>
			    <li><a href="#">Gastronomy</a></li>
			</ul>
		</div>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	All Categories <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Cat 1</a></li>
			    <li><a href="#">cat 2</a></li>
			</ul>
		</div>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	I <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Images Yes</a></li>
			    <li><a href="#">Images No</a></li>
			</ul>
		</div>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	C <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Category Yes</a></li>
			    <li><a href="#">Category No</a></li>
			</ul>
		</div>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	V <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Visible Yes</a></li>
			    <li><a href="#">Visble No</a></li>
			</ul>
		</div>
		
	</div>
	<div class="col-md-3">
		<form>
		    <input class="form-control">
		</form>
	</div>
	<div class="col-md-2">
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	SKU Retailer <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Name</a></li>
				<li><a href="#">EAN</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<hr>
		<a class="btn btn-danger" href="{{ url('/products/show-new') }}" role="button">
			<i class="fa fa-plus"></i> Add Product
		</a>
		<div class="btn-group">
		  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    	Edit <span class="caret"></span>
		  	</button>
			<ul class="dropdown-menu" role="menu">
				<li><a data-toggle="modal" data-target="#assigncats" href="#">Assign Categories</a></li>
				<li><a href="#">Activate</a></li>
				<li><a href="#">Deactivate</a></li>
				<li class="divider"></li>
			    <li><a href="#"><i class="fa fa-download"></i> Export Current View</a></li>
			    <li><a data-toggle="modal" data-target="#productCreation" href="#"><i class="fa fa-upload"></i> Product Creation</a></li>
			    <li><a data-toggle="modal" data-target="#productUpdate" href="#"><i class="fa fa-upload"></i> Product Update</a></li>
			    <li class="divider"></li>
			    <li><a data-toggle="modal" data-target="#imageUpload" href="#"><i class="fa fa-upload"></i> Image Upload</a></li>
			</ul>
		</div>
		<hr>
		<table class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th style="width:15px"><input type="checkbox"></input></th>
					<th>Active</th>
					<th>Categorias</th>
					<th>Name</th>
					<th>Unit</th>
					<th>I</th>
					<th>C</th>
					<th>V</th>
				<tr>
			</thead>
			<tbody>
				<tr>
					<th style="width:15px"><input type="checkbox"></input></th>
					<td><span class="label label-success">Active</span></td>
					<td>Cat 1 > Cat 2</td>
					<td>Nombre del producto</td>
					<td>1 Kg</td>
					<td><span class="label label-success">OK</span></td>
					<td><span class="label label-success">OK</span></td>
					<td><span class="label label-danger">NO</span></td>
				</tr>
				<tr>
					<th style="width:15px"><input type="checkbox"></input></th>
					<td><span class="label label-success">Active</span></td>
					<td>Cat 1 > Cat 2</td>
					<td>Nombre del producto</td>
					<td>1 Kg</td>
					<td><span class="label label-success">OK</span></td>
					<td><span class="label label-success">OK</span></td>
					<td><span class="label label-danger">NO</span></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="assigncats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" style="z-index:4000">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Assign Categories</h4>
      		</div>
      		<div class="modal-body">
        		<form>
	        		<div class="form-group">
				      	<label>Categorias</label>
				      	<select class="form-control"><option></option>
		                	<option value="1" selected>Cat 1</option>
		                	<option value="2">Cat 2</option>
		              	</select>
				    </div>
				</form>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="productCreation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" style="z-index:4000">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Product Creation</h4>
      		</div>
      		<div class="modal-body">
        		<div class="form-group">
	              	<label for="exampleInputFile">File upload</label>
	              	<input type="file">
	            </div>
	            <button data-toggle="modal" data-target="#productCreation" class="btn btn-primary btn-sm">Upload</button>
	            <hr>
	            <p> (300) Created (2) Erros of (302) Total <button type="button" class="btn btn-default btn-sm"><i class="fa fa-download"></i> Download Report</button></p>
	            <table class="table table-striped table-condensed table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>SKU</th>
							<th>name</th>
							<th>unit.value</th>
							<th>unit.unit.abbreviation</th>
						<tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="label label-success"><i class="fa fa-check"></i></span></td>
							<td>12343</td>
							<td>Product Name</td>
							<td>1</td>
							<td>Kg</td>
						</tr>
						<tr>
							<td><span class="label label-danger"><i class="fa fa-times"></i></span></td>
							<td>12343</td>
							<td>Product Name</td>
							<td>1</td>
							<td><span class="text-danger">Kgs</span></td>
						</tr>
					</tbody>
				</table>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div>
  	</div>
</div>

<div class="modal fade" id="productUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" style="z-index:4000">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Product Update</h4>
      		</div>
      		<div class="modal-body">
        		<div class="form-group">
	              	<label for="exampleInputFile">File Upload</label>
	              	<input type="file">
	            </div>
	            <button data-toggle="modal" data-target="#productCreation" class="btn btn-primary btn-sm">Upload</button>
	            <hr>
	            <p> (300) Updated (2) Not Found of (302) Total <button type="button" class="btn btn-default btn-sm"><i class="fa fa-download"></i> Download Report</button></p></p>
	            <table class="table table-striped table-condensed table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>SKU</th>
							<th>name</th>
							<td>unit.value</td>
							<td>unit.unit.abbreviation</td>
						<tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="label label-success"><i class="fa fa-check"></i></span></td>
							<td>12343</td>
							<td>Product Name</td>
							<td class="text-success"><i>1</i></td>
							<td class="text-success"><i>Kg</i></td>
						</tr>
						<tr>
							<td><span class="label label-danger"><i class="fa fa-times"></i></span></td>
							<td>12343</td>
							<td>Product Name</td>
							<td>1</td>
							<td>Kg</td>
						</tr>
					</tbody>
				</table>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="imageUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" style="z-index:4000">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Image Upload</h4>
      		</div>
      		<div class="modal-body">
        		<h3>Drap and Drop here from your computer</h3>
	            <hr>
	            <p> (300) Matched (2) Not Found of (302) Total <button type="button" class="btn btn-default btn-sm"><i class="fa fa-download"></i> Download Report</button></p></p>
	            <table class="table table-striped table-condensed table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>SKU</th>
							<th>Image</th>
						<tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="label label-success"><i class="fa fa-check"></i></span></td>
							<td>12343</td>
							<td><img height="20px" src="https://s3-us-west-2.amazonaws.com/mercadoni/live/5579414b8f6bc75f0ab4b128/small_5579414b8f6bc75f0ab4b128_9938.jpg"></td>
						</tr>
						<tr>
							<td><span class="label label-danger"><i class="fa fa-times"></i></span></td>
							<td>12344</td>
							<td><img height="20px" src="https://s3-us-west-2.amazonaws.com/mercadoni/live/5579414b8f6bc75f0ab4b128/small_5579414b8f6bc75f0ab4b128_9938.jpg"></td>
						</tr>
					</tbody>
				</table>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h4> Tasks </h4>
		<ol>
			<li> <b>Filters: Create top filters: 18/06/2015</b></li>
			<ul>
				<li> Filter Active / Not Active. Single Selection </li>
				<li> Filter Retailers. Single selection </li>
				<li> Filter Categories. Multiple Selection. Single Selection 18/06/2015. Multiple Selection 25/06/2015 </li>
				<li> Filter Image. Single selection </li>
				<li> Filter Category. Single selection </li>
				<li> Filter Category. Single selection </li>
				<li> Search Name/SKU/EAN. Single selection </li>
			</ul>
			<ol>
				<li> All filters must act as AND. </li>
				<li> All filters with search must act as AND. 25/06/2015</li>
			</ol>
			<li> <b> Multiple Assignation of Categories: 22/06/2015 </b></li>
			<li> <b> Multiple Deactivation/Activation of Products: 22/06/2015 </b></li>
			<li> <b> Export Current View: 19/06/2015 </b></li>
			<ul>
				<li> Export should export products according to the current filter in a csv file </li>
				<li> Export should have columns named as they will be used for import </li>
			</ul>
			<li> <b> Product Creation: 26/06/2015 </b></li>
			<ul>
				<li> Import should have the same columns as the product export. </li>
				<li> Dashboard should give feedback in terms of product succesfully created, an errors. both globally and product level</li>
				<li> You should be able to download errors  </li>
				<li> You should be able to save or cancel changes </li>
			</ul>
			<li> <b> Product Update: 26/06/2015 </b></li>
			<ul>
				<li> Import should have the same columns as the product export. </li>
				<li> Dashboard should give feedback in terms of product succesfully updated, an errors. both globally and product level</li>
				<li> Product level information should give you feedback of what was updated</li>
				<li> You should be able to download errors  </li>
				<li> You should be able to save or cancel changes </li>
			</ul>
			<li> <b> Image Upload: 1/07/2015 </b></li>
			<ul>
				<li> You should be able to drag and drop images </li>
				<li> Dashboard should give feedback in terms of product succesfully matched, an not matched. both globally and product level</li>
				<li> You should be able to download errors  </li>
				<li> You should be able to save or cancel changes </li>
			</ul>
		</ol>
	</div>
</div>


@endsection
