@extends('layouts.app1')
@section('content')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="/profileupdate">Profile</a>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Category Table</h4>
                  <p class="card-category">Category</p>
                </div>
                <div class="card-body">
                <form action={{route('admin.shop.category.submit') }} method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" id="Name" name="name"  class="form-control" aria-describedby="NameHelp"  value="{{ old('name') }}"required/>
                          <small id="Name" class="form-text text-muted"></small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slug</label>
                          <input type="text" id="Name" name="name"  class="form-control" aria-describedby="NameHelp"  value="{{ old('name') }}"required/>
                          <small id="Name" class="form-text text-muted"></small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Parent Category</label>
                          <input type="text" id="Parent Category" name="parent_category"  class="form-control" aria-describedby="NameHelp"  value="{{ old('name') }}"required/>
                          <!-- <select  id="Parent Category" name="parent_category"> -->
                          
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add New Category</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Food Item</h4>
                  <p class="card-category"> Here is food for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                    <form>
                   
<div class="float-right col-lg-6">
						<div class="d-flex">
							<div class="single-filter">
								<div class="form-group">
									<select class="form-control" name="status">
										<option>{{ __('Select Action') }}</option>
										
										<option value="delete">{{ __('Delete Permanently') }}</option>

									</select>
								</div>
							</div>
							<div class="single-filter">
								<button type="submit" class="btn btn-primary ml-2 mt-1">{{ __('Apply') }}</button>
							</div>
						</div>
					</div>
          </div>
        </form>
        <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Created By</th>
                      </thead>
                      <tbody>
                      @foreach($data as $d)
                      <tr>
                      <th scope="row">{{$d->id}}</th>
                      <td>{{$d->parent_category}}</td>
                      <td>{{$d->created_by}}</td>
                      </tr>
                      @endforeach  
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection 

