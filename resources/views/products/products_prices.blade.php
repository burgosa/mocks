@extends('app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h5>Prices & Stock</h5>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		Retailer SKU/PLU/EAN, Retailer ID, Retailer Location ID, Tax, Fee, Stock, Price, Special Price, Retailer Price, Retailer Special Price
	</div>	
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
          	<label for="exampleInputFile">File upload</label>
          	<input type="file">
        </div>
        <button data-toggle="modal" data-target="#productCreation" class="btn btn-primary btn-sm">Upload</button>
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
	            <p> (30000) Created (5000) Updated (400 Errors) of (35400) Total <button type="button" class="btn btn-default btn-sm"><i class="fa fa-download"></i> Download Report</button></p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div>
  	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<h4> Tasks </h4>
		<ol>
			<li><b>Give feedback to user in terms of which were created which updated and how many errors 23/06/2015</b> </li>
			<li><b>You should be able to download Errors 23/06/2015</b> </li>
			<li><b>You should be able to discard or save changes 23/06/2015</b> </li>
		</ol>
	</div>
</div>
@endsection
