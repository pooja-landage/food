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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Product Table</h4>
                  <p class="card-category"> Here is a product for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>  ID </th> 
                        <th> Image</th>
                        <th> Title</th>
                        <th> Price</th>
                        <th> Total Sales</th>
                        <th> Status</th>
                        <th> Last Modified</th>
                        <th> Action </th>
                      </thead>
                      <tbody>
                      @foreach($data as $d)
                        <tr>
                        <td>{{$d->id}}</td>
                        <td><img src="/images/{{$d->image}}" onerror="this.src='http://127.0.0.1:8000/images/download.jpg'" width="50px" height="50px"></td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{$d->total_sales}}</td>
                        <td>{{$d->status}}</td>
                        <td>{{$d->last_modified}}</td>         
                        <td></td>
                        </tr>
                      @endforeach
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
      