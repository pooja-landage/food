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
      </nav>>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Restaurtant Table</h4>
                  <p class="card-category"> Restaurtant info</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th class="am-title">Review Id</th>
                        <th>Restaurant Name</th>
                        <th>Reviewer Name</th>
                        <th class="am-tags">Rattings</th>
                        <th class="am-tags">Review</th>
                        <th class="am-tags">Action</th>
                      </thead>
                      <tbody>
                      @foreach($data as $d)
                        <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->restaurant_name}}</td>
                        <td>{{$d->reviewer_name}}</td>
                        <td>{{$d->rattings}}</td>
                        <td>{{$d->review}}</td>         
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
     