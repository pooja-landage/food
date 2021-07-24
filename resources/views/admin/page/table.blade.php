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
                <a class="dropdown-item" href="/profileupdate">My id #1</a>
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
      <br>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-lg-6">
                            <h4>Page List</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="add-new-btn">
                                <a href={{route('admin.page.form')}}  class="btn btn-primary f-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-action-filter">
                        <form method="post" id="basicform" action="https://food.amwork.xyz/admin/pages/destroy">
                        <input type="hidden" name="_token" value="qqsaR5gtBNtLRkpKrEAUJior40V9idbd4BOe89AM"> 
                        <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <div class="single-filter">
                                <div class="form-group">
                                    <select class="form-control" name="status">
                                        <option value="publish">Publish</option>
                                        <option value="trash">Move to Trash</option>
                                        <option value="delete">Delete Permanently</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-filter">
                                <button type="submit" class="btn btn-primary mt-1 ml-1">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-filter f-right">
                            <div class="form-group">
                                <input type="text" id="data_search" class="form-control" placeholder="Enter Value">
                            </div>
                        </div>
                    </div>
                    <div class="cart-filter mb-20">
                        <a href="https://food.amwork.xyz/admin/page">All <span>(3)</span></a>
                        <a href="?st=1">Published <span>(3)</span></a>
                        <a href="?st=2">Drafts <span>(0)</span></a>
                        <a href="?st=trash" class="trash">Trash <span>(0)</span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>  ID </th> 
                            <th> Title</th>
                            <th> Status</th>
                            <th> Last Modified</th>   
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->title}}
                            <div class="hover">
                            <a href={{route('admin.page.edit',$d->id)}}>Edit</a>
                            <a href={{route('admin.page.form.delete',$d->id)}} >Delete</a>
                            </div>
                            </td>
                            <td>{{$d->status}}</td>
                            <td>{{$d->last_modified}}</td>         
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
      