@extends('layouts.adminapp')

@section('title')

<title>WELCOME ! NNA</title>
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member list in the group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Members Belongs to the Group</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Group Belongs to</th>
                    <th>Date user created</th>
                    <th>Action of Deposting</th>
                    {{-- <th>Action of Load</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($member as $key=>$item)
                  @if (Auth::user()->Group_id == $item->Group_id)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$Solution[$key]}}</td>
                    <td>{{$item->created_at->format('d/m/Y')}}</td>
                    <td class="btn btn btn-info"> <a style="color: #fff" href="/members/{{$item->id}}">Deposting</a> </td>
                    <td class="btn btn btn-success" style="margin-left: 10px"> <a style="color: #fff" href="/loan/{{$item->id}}">loan</a> </td>
                  </tr>
                      @endif
                  @endforeach


                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>

  <!-- /.content-wrapper -->

@endsection

