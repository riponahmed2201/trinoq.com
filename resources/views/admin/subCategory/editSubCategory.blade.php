
@extends('admin.admin_master')

@section('dashboard-title', 'Edit Sub Category Information')
@section('breadcrumb-title', 'Edit Sub Category Information')

@section('content')

  <div class="row">
    <div class="col"></div>
    <div class="col-md-10">
        <div class="col-md-10">
    <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Sub Category Information</h3>
        </div>

        @include('message')

        <div class="card-body">
          <!-- /.card -->
            <!-- Horizontal Form -->
           <form class="form-horizontal form-label-left" action="{{route('update-sub-category',$subCategory->id)}}" method="post" enctype="multipart/form-data">
             @csrf

               <div class="row">
                  <div class="col-md-10 offset-1">

                    <div class="form-group row">
                      <label  class="col-form-label col-md-3 col-sm-3 label-align">Name</label>
                      <div class="col-md-8 col-sm-3 ">
                      <input type="text" name="name" class="form-control" value="{{$subCategory->name}}">
                          @if($errors->has('name'))
                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                          @endif
                    </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">Category Name</label>
                        <div class="col-md-8 col-sm-3 ">
                            <select name="category_name" id="" class="form-control">
                              @foreach ($categories as $category)
                                <option <?= $subCategory->category_id == $category->id ? 'selected' : '' ?> value="{{$category->id}}"> {{$category->category_name}} </option>
                              @endforeach
                            </select>
                            @if($errors->has('category_name'))
                              <strong class="text-danger">{{ $errors->first('category_name') }}</strong>
                            @endif
                      </div>
                      </div>

                    <div class="form-group row">
                      <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                        <div class="col-md-8 col-sm-8 ">
                          <textarea name="description" id="" cols="3" class="form-control"  rows="2">{{$subCategory->description}}</textarea>
                          @if($errors->has('description'))
                            <strong class="text-danger">{{ $errors->first('description') }}</strong>
                          @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
                          <div class="col-md-8 col-sm-8 ">
                            <input type="file" class="form-control" name="image">
                            <img style="width:100px; height:100px" class="mt-3 mb-3" src="/uploads/categories/{{$subCategory->image}}" alt="">
                            @if($errors->has('image'))
                              <strong class="text-danger">{{ $errors->first('image') }}</strong>
                            @endif
                          </div>
                      </div>

                    <div class="form-group row">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                        <div class="col-md-8 col-sm-3 ">
                          <select name="status" id="" class="form-control">
                              <option  <?= $subCategory->status == '0' ? 'selected' : '' ?> value="0">Unpublished</option>
                              <option  <?= $subCategory->status == '1' ? 'selected' : '' ?> value="1">Published</option>
                          </select>
                            @if($errors->has('status'))
                            <strong class="text-danger">{{ $errors->first('status') }}</strong>
                          @endif
                      </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align"></label>
                          <div class="col-md-8 col-sm-8 ">
                            <input  class="btn btn-success" type="submit" value="Submit">
                          <a href="{{route('all-sub-category')}}"  class="btn btn-info">Back</a>
                        </div>
                      </div>
                    </div>
                </div>
          </form>
        <!-- /.card -->
        </div>
      </div>
  </div>
    </div>
    <div class="col"></div>
  </div>
@endsection
