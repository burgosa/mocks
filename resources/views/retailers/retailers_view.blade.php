@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <h5>Carulla</h5>
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
    <li role="presentation"><a href="#locations" aria-controls="profile" role="tab" data-toggle="tab">Locations</a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="info">
      <hr>
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
              <label>Category Type</label>
              <select class="form-control"><option></option>
                <option value="1" selected>Super</option>
                <option value="2">Farma</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file">
              <p class="help-block">Size: w:1000 px  h: 280px File format: .png</p>
            </div>
            <div class="form-group">
              <label>Background Color</label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">hex</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Text Color</label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">hex</span>
                <input type="text" class="form-control">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 text-center" style="background-color:#39b449; color:#fff">
          <img src="http://mercadoni.mybluemix.net/img/carulla.png">
          <br>
          <a style="color:#fff" href=""> Link </a>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="locations">
      <hr>
      <div class="row">
        <div class="col-md-3">
          <h5>Carulla's Locations</h5>
          <hr>
          <table class="table table-striped table-condensed table-bordered">
            <thead>
              <tr>
                <th>Active</th>
                <th>Name</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="label label-success">Active</span></td>
                <td>Carulla Plaza Bolivar</td>
              </tr>
              <tr>
                <td><span class="label label-default">Inactive</span></td>
                <td>Carulla Parque 93</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-3">
          <h5>Carulla Plaza bolivar</h5>
          <hr>
          <form>
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Active
              </label>
            </div>
            <div class="form-group">
              <label>Nombre</label>
              <input class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección</label>
              <input class="form-control">
            </div>
            <div class="form-group">
              <label>Pais</label>
              <input class="form-control">
            </div>
            <div class="form-group">
              <label>Ciudad</label>
              <input class="form-control">
            </div>
            <div class="form-group">
              <label>Comentarios</label>
              <textarea class="form-control"></textarea>
            </div>
          </form>
        </div>
         <div class="col-md-6">
          <h5>Daily Scheadule</h5>
          <hr>
          <div class="col-md-12 ng-scope" ng-repeat="delivery in location.delivery_hours">
            <div class="form-group">
              <label style="width: 80px;" class="control-label">
                  <div>Monday</div>
              </label>
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8" selected>8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
              
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14" selected>14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
    
              <div style="width:auto; display:inline"class="checkbox">
                <label>
                  <input type="checkbox" checked> Active
                </label>
              </div>
            </div>
            <div class="form-group">
              <label style="width: 80px;" class="control-label">
                  <div>Tuesday</div>
              </label>
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6" selected>6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
              
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17" selected>17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
    
              <div style="width:auto; display:inline"class="checkbox">
                <label>
                  <input type="checkbox"> Active
                </label>
              </div>
            </div>
            <div class="form-group">
              <label style="width: 80px;" class="control-label">
                  <div>Wednesday</div>
              </label>
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
              
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16" selected>16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
    
              <div style="width:auto; display:inline"class="checkbox">
                <label>
                  <input type="checkbox"> Active
                </label>
              </div>
            </div>
            <div class="form-group">
              <label style="width: 80px;" class="control-label">
                  <div>Thursday</div>
              </label>
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6" selected>6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
              
              <select class="form-control" style="width:auto; display:inline"><option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15" selected>15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
    
              <div style="width:auto; display:inline"class="checkbox">
                <label>
                  <input type="checkbox"> Active
                </label>
              </div>
            </div>
            <div class="form-group">
              <label style="width: 80px;" class="control-label">
                  <div>Friday</div>
              </label>
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7" selected>7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
                
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18" selected>18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
      
                <div style="width:auto; display:inline"class="checkbox">
                  <label>
                    <input type="checkbox"> Active
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label style="width: 80px;" class="control-label">
                    <div>Saturday</div>
                </label>
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8" selected>8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
                
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13" selected>13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
      
                <div style="width:auto; display:inline"class="checkbox">
                  <label>
                    <input type="checkbox"> Active
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label style="width: 80px;" class="control-label">
                    <div>Sunday</div>
                </label>
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7" selected>7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18" selected>18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
                
                <select class="form-control" style="width:auto; display:inline"><option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21" selected>21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
      
                <div style="width:auto; display:inline"class="checkbox">
                  <label>
                    <input type="checkbox"> Active
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-9">
          <img class="img-responsive" src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=2000x2000&maptype=roadmap
            &markers=color:red%7Clabel:Carulla%7C40.702147,-74.015794"> 
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection


