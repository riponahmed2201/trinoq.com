
@extends('admin.admin_master')

@section('dashboard-title', 'All Category Information')

@section('breadcrumb-title', 'All Category Information')

@section('content')

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All Category Information</h3>
        <a href="{{route('add-category')}}" class="btn btn-success float-sm-right"><i class="fas fa-plus"></i> Add Category</a>

        @include('message')

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="all-user-role" class="table table-bordered table-striped">
        <thead>
          <tr class="bg-success">
            <th>SL</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Category Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;?>
          @foreach($categories as $category)
          <tr>
            <td>{{$i++}}</td>
            <td> {{$category->category_name}} </td>
            <td> {{$category->category_description}} </td>
            <td> {{$category->category_status == 1 ? 'Published' :'Unpublished'}} </td>
            <td>
              <a href="{{route('edit-category',$category->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a href="{{route('delete-category',$category->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt "></i></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection

