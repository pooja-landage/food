@extends('layouts.app1')
@section('content')
 <div class="main-panel">
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Blog</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                
                  <form action={{route('page.form.submit')}} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                   

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" id="Title" name="title"  class="form-control" aria-describedby="TitleHelp"  value="{{ old('title') }}"required/>
                          <small id="Title" class="form-text text-muted"></small>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Meta Description</label>
                          <input type="text" id="excerpt" name="excerpt"  class="form-control" aria-describedby="AuthorHelp"  value="{{ old('author') }}"required/>
                          <small id="Author" class="form-text text-muted"></small>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Page Content</label>
                          <textarea type="text" id="page_content" name="page_content" class="form-control" ></textarea>
                        </div>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>  
@endsection
      