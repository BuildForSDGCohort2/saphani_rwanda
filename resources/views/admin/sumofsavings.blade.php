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
            <h1>Total  Balance </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Balance</li>
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
                <h3 class="card-title">Total of Savings /Igiteranyo cyibyabitse</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>Izina Ryitsinda</th>
                    <th>Status</th>
                    <th>Village</th>
                    <th>Created</th>
                    <th>Total</th>

                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <td>{{$Group->name}}</td>
                    <td >@if ($Group->Groups == "1")
                       <p class="alert alert-success">Iremewe</p>
                        @else
                      <p class="alert alert-danger">Ntiyemewe</p>
                        @endif
                    </td>

                    <td>{{$Village->name}}</td>
                    <td>{{$Group->created_at->format('d/m/Y')}}</td>
                    <td style="color: rgb(218, 77, 77)">{{$purchases}} RWF</td>

                  </tr>


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

