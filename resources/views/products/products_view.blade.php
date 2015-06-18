@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <h5>Product Name / New Product</h5>
  </div>
  <div class="col-md-6 text-right">
    <a href="" class="btn btn-default">Cancel</a>
    <a href="" class="btn btn-primary">Save</a>
  </div>
</div>
<hr>
<div role="tabpanel">
  	<ul class="nav nav-tabs" role="tablist">
    	<li role="presentation" class="active"><a href="#info" role="tab" data-toggle="tab">Info</a></li>
    	<li role="presentation"><a href="#images" role="tab" data-toggle="tab">Images</a></li>
    	<li role="presentation"><a href="#prices" role="tab" data-toggle="tab">Prices</a></li>
  	</ul>
  	<hr>
  	<div class="tab-content">
    	<div role="tabpanel" class="tab-pane active" id="info">
    		<div class="row">
				<div class="col-md-6">
				  	<form>
				  		 <div class="checkbox">
			              	<label>
			                	<input type="checkbox"> Active
			              	</label>
			            </div>
			            <div class="form-group">
					      	<label>Nombre</label>
					      	<input class="form-control">
					    </div>
					    <div class="form-group">
					      	<label>EAN</label>
					      	<input class="form-control">
					    </div>
					    <div class="form-group">
					      	<label>Categorias</label>
					      	<select class="form-control"><option></option>
			                	<option value="1" selected>Cat 1</option>
			                	<option value="2">Cat 2</option>
			              	</select>
					    </div>
					    <div class="form-group">
					      	<label>Unit</label><br>
					      	<input class="form-control" style="display:inline; width:auto">
					      	<select class="form-control" style="display:inline; width:auto">
					      		<option></option>
			                	<option value="1" selected>Kg</option>
			                	<option value="2">g</option>
			              	</select>
					    </div>
					    <div class="form-group">
					      	<label>Description</label>
					      	<textarea class="form-control"></textarea>
					    </div>
					</form>
				</div>
				<div class="col-md-6">
					<form>
						<div class="form-group" style="width:auto; display:inline-block">
	                        <label>Attributes</label>
	                    </div>
	                    <p> Marca: Coca-Cola <a class="btn btn-link">edit</a><a class="btn btn-link">delete</a></p>
	                    <div class="form-group" style="width:auto; display:inline-block">
	                         <select class="form-control">
	                            <option selected>Tipo de Comida</option>
	                            <option>Marca</option>
	                            <option>Grasas</option>
	                        </select>
	                    </div>
	                    <div class="form-group" style="width:auto; display:inline-block">
	                        <select class="form-control">
	                            <option>Vegetariana</option>
	                            <option selected>Organica</option>
	                        </select>
	                    </div>
	                    <a class="btn btn-link">add</a>
	                </form>
				</div>
			</div>
    	</div>
    
		<div role="tabpanel" class="tab-pane" id="images">
            <div class="form-group">
              	<label for="exampleInputFile">File input</label>
              	<input type="file">
              	<p class="help-block">at least 650x650 File format: .jpg</p>
            </div>
            <hr>
            <div class="row">
              	<div class="col-xs-2">
	                <a  class="thumbnail">
	                  	<img src="http://www.exito.com/images/products/942/0001848048433942/0001848049196455_md_a.jpg">
	                  	<a> Delete </a>
	                </a>
              	</div>
              	<div class="col-xs-2">
                	<a class="thumbnail">
                  		<img src="http://www.exito.com/images/products/942/0001848048433942/0001848049196455_md_a.jpg">
                  		<a> Delete </a>
                	</a>
              	</div>
              	<div class="col-xs-2">
                	<a class="thumbnail">
                  		<img src="http://www.exito.com/images/products/942/0001848048433942/0001848049196455_md_a.jpg">
                  		<a> Delete </a>
                	</a>
              	</div>
            </div>
        </div>
    	<div role="tabpanel" class="tab-pane" id="prices">
    		<div class="table-responsive">
                <table style="font-size:0.85em" class="table table-condensed">
                    <tbody>
                        <tr>
                            <th class="text-center"><i class="fa fa-pencil"></i></th>
                            <th colspan="2">Location</th>
                            <th>Fee</th>
                            <th>Tax</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Special Price</th>
                            <th>R Price</th>
                            <th>R Special Price</th>
                            <th>Visible</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" checked></td>
                            <td>&nbsp;</td>
                            <td class="text-left">
                                <div>Master Value</div>
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text"value="12"  class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text"value="12"  class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text"value="12"  class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text"value="12"  class="form-control">
                            </td>
                            <td><span class="label label-success">OK</span></td>
                        </tr>
                          <tr>
                            <td><input type="checkbox" checked></td>
                            <td>&nbsp;</td>
                            <td class="text-left">
                                <div>Sucursal 1</div>
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td class="text-right">
                                <input type="text" value="12" class="form-control">
                            </td>
                            <td><span class="label label-success">OK</span></td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
    	</div>
	</div>

@endsection


