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
                <form action={{route('restaurant.form.submit')}} method="POST" enctype="multipart/form-data">
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
</div>  
@endsection
      