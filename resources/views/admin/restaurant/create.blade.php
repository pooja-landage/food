@extends('layouts.app')
@section('content')
 <div class="main-panel">
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Resto</h4>
                  <p class="card-category">Complete your Restaurant Details</p>
                </div>
                <div class="card-body">
                <form action="https://food.amwork.xyz/restaurant/register/step/2" method="POST">
                <input type="hidden" name="_token" value="OROX4GUd3FfMrjxKVqabgVAqGwSovhZ8ESVwuVjL"> <div class="register-card-body">
                <div class="row mt-30">
                <div class="col-lg-12">
                <div class="form-group">
                <label>Select City</label>
                <select name="city" id="cty" class="form-control selectric">
                <option value="1">Dhaka</option>
                <option value="2">Chittagong</option>
                <option value="3">Rajshahi</option>
                <option value="4">Khulna</option>
                <option value="5">Rangpur</option>
                <option value="6">Feni</option>
                <option value="7">Bogra</option>
                <option value="8">Barisal</option>
                </select>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                <label>Address Line</label>
                <input  type="text" class="form-control" required="" name="address_line">
                </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                <label>Select Your Location</label>
                <input  type="text" class="form-control" required="" name="full_address" id="location_input" required>
                </div>
                </div>
                <input type="hidden" name="latitude" id="latitude" value="00.00">
                <input type="hidden" name="longitude" id="longitude" value="00.00">
                <div class="col-lg-12" id="map-area">
                <label>Drag Your Location</label>
                <div id="map-canvas" class="map-canvas h-300"></div>
                </div>
                <div class="col-lg-12">
                <div class="f-right">
                <button class="btn btn-danger">Next &amp; Save</button>
                </div>
                </div>
                </div>
                </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>  
@endsection
      