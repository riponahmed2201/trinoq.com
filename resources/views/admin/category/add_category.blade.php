
@extends('admin.admin_master')

@section('dashboard-title', 'Add Category Information')
@section('breadcrumb-title', 'Add Category Information')

@section('content')

  <div class="col-md-10 offset-1">
    <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Add Category Information</h3>
        </div>

        @include('message')

        <div class="card-body">
          <!-- /.card -->
            <!-- Horizontal Form -->
           <form class="form-horizontal form-label-left" action="{{route('save-category')}}" method="post">
             @csrf

               <div class="row">
                  <div class="col-md-10 offset-1">
                    <div class="form-group row">
                      <label  class="col-form-label col-md-3 col-sm-3 label-align">Category Name</label>
                      <div class="col-md-8 col-sm-3 ">
                        <input type="text" name="category_name" class="form-control" >
                    </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Category Description</label>
                        <div class="col-md-8 col-sm-8 ">
                          <textarea name="category_description" id="" cols="3" class="form-control"  rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">Category Status</label>
                        <div class="col-md-8 col-sm-3 ">
                          <select name="category_status" id="" class="form-control">
                              <option value="">--select--</option>
                              <option value="0">Unpublished</option>
                              <option value="1">Published</option>
                          </select>
                      </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-8 col-sm-8 ">
                            <input  class="btn btn-success btn-lg" type="submit" value="Submit">
                          <a href="{{route('all-category')}}"  class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
                    </div>
                </div>
			    </form>
			  <!-- /.card -->
        </div>
      </div>
  </div>
@endsection
