
@extends('admin.admin_master')

@section('dashboard-title', 'All Subscriber Information')

@section('breadcrumb-title', 'All Subscriber Information')

@section('content')

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All Subscriber Information</h3>
        
        @include('message')

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="all-user-role" class="table table-bordered table-striped">
        <thead>
          <tr class="bg-success">
            <th>SL</th>
            <th>Subscriber Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;?>
          @foreach($subscribers as $row)
          <tr>
            <td>{{$i++}}</td>
            <td> {{$row->subscribers_email}} </td>
            <td>
              <a href="{{route('delete-subscriber',$row->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt "></i></a>
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

