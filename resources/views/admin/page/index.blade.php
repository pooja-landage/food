<div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4>Add new Page</h4>
                            <hr>
                            <form method="post" action={{route('page.form.submit')}}>
                                <input type="hidden" name="_token" value="PJgBABLn0kavzBV7OMLLsqbEbR0Kg8RT1e4KOdGQ"> <div class="custom-form pt-20">
                                <div class="form-group">
                                    <label for="name">Page Title</label>
                                    <input type="text" placeholder="Page Title" name="title" class="form-control" id="name" required value="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Meta Description</label>
                                    <textarea name="excerpt" class="form-control " cols="30" rows="3" placeholder="short description" id="excerpt" maxlength="" required=""></textarea>
                                </div> 
                                <div class="form-group">
                                    <label>Page Content</label>
                                    <textarea name="page_content" class="form-control " cols="30" rows="3" placeholder="page info" id="page" maxlength="" required=""></textarea>
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
                                <option selected value="1">Published</option>
                                <option value="2">Draft</option>
                            </select>
                        </div>
                     </div>
                </div>
            </div>
            <input type="hidden" name="type" value="1">
            <input type="hidden" name="post_type" value="page">
            </form>
       </section>
    </div>