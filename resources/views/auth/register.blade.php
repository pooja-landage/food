@extends('layouts.app')

@section('content')
<!-- <body class="img js-fullheight" style="background-image: url(images/slide_.jpg);"> -->
<div id="pjax-container">
<div class="main-content mt-50">
<div class="container">
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="register-card">
<div class="register-progress text-center">

</div>
<form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="row mt-30">
<div class="col-lg-6">
    <div class="form-group">
        <label>Restaurant Name</label>
        <input  type="text" required="" name="name" class="form-control">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <label>Email</label>
        <input type="email" required="" name="email" class="form-control" >
    </div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Password</label>
<input  type="password" class="form-control" required="" name="password">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Confirm Password</label>
<input  type="password" class="form-control" required="" name="password_confirmation">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Delivery Avg Time(Min)</label>
<input  type="number" class="form-control" required="" name="delivery">
</div> 
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Pick Up Avg Time(Min)</label>
<input  type="number" class="form-control" required="" name="pickup">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Support Phone Number 1</label>
<input  type="number" class="form-control" required="" name="phone_number_1">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Support Phone Number 2</label>
<input  type="number" class="form-control" required="" name="phone_number_2">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Support Email Address 1</label>
<input  type="email" class="form-control" required="" name="email_address_1">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Support Email Address 2</label>
<input  type="email" class="form-control" required="" name="email_address_2">
</div>
</div>
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
<!-- <div class="col-lg-12" id="map-area">
<label>Drag Your Location</label>
<div id="map-canvas" class="map-canvas h-300"></div>
</div> -->
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea  rows="4" class="form-control" required="" name="description"></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="f-right">
<button>Next &amp; Save</button>
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
</body>
@endsection
