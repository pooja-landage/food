@extends('layouts.app1')
@section('content')
    <div class="main-panel">
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                 <h4>Add new product</h4>
                  <hr>
                  <br>
                  <form method="post"  action={{route('product.form.submit')}} enctype="multipart/form-data">
                    @csrf
                  <input type="hidden" name="_token" value="Rx0Iv0MONOSvpe334MYxixHywHW2vZErjhiFdQYU"> <div class="custom-form pt-20">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" placeholder="Product Title" name="title" class="form-control" id="name" required value="" autocomplete="off">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" placeholder="Product Price" name="price" class="form-control" id="price" required="" value="" autocomplete="off">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt" class="form-control " cols="30" rows="3" placeholder="short description" id="excerpt" maxlength="" required=""></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single-area">
              <div class="card">
                <div class="card-body">
                  <h5>Publish</h5>
                  <hr>
                <div class="btn-publish">
                <button type="submit" class="btn btn-primary col-12"><i class="fa fa-save"></i> Save</button>
                </div>
                </div>
              </div>
            </div>
            <div class="single-area">
              <div class="card sub">
                <div class="card-body">
                  <h5>Status</h5>
                  <hr>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
                    <option value="1">Published</option>
                    <option value="2">Draft</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="single-area">
              <div class="card sub">
                <div class="card-body">
                  <h5>Categories</h5>
                  <hr>
                  <div class="scroll-bar-wrap">
                    <div class="category-list">
                      <div class="custom-control custom-checkbox"><input type="checkbox" name="category[]" class="custom-control-input" value="1" id="category1">
                      <label class="custom-control-label" for="category1">Dessert
                      </label>
                      </div>
                      <div class="custom-control custom-checkbox"><input type="checkbox" name="category[]" class="custom-control-input" value="2" id="category2">
                      <label class="custom-control-label" for="category2">Drinks
                      </label>
                      </div>
                      <div class="cover-bar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-area">
              <div class="card sub">
                <div class="card-body">
                <h5><a href="#" data-toggle="modal" data-target=".media-single" class="text-dark">Image</a></h5>
                <hr>
                <a href="#" data-toggle="modal" data-target=".media-single" class="single-modal">
                <img class="img-fluid" id="preview" src="https://food.amwork.xyz/admin/img/img/placeholder.png"></a>
                </div>
              </div>
            </div>
            <input type="hidden" id="preview_input" class="input_image" name="preview" value="">
            <div class="single-area">
              <div class="card sub">
                <div class="card-body">
                <h5>Addon Product</h5>
                <hr>
                  <div class="scroll-bar-wrap">
                    <div class="category-list">
                      <div class="custom-control custom-checkbox"><input type="checkbox" name="addon[]" class="custom-control-input" value="1" id="addon1">
                      <label class="custom-control-label" for="addon1">Soft Drinks
                      </label>
                      </div>
                      <div class="custom-control custom-checkbox"><input type="checkbox" name="addon[]" class="custom-control-input" value="2" id="addon2">
                      <label class="custom-control-label" for="addon2">Cold Drinks
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>  
    @endsection
      