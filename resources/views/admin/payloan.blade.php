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
            <h5>Paying loan <small> and </small> upload proof if u used the bank slipe  </h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">paying loan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">

            <!-- /.card-header -->
            <!-- form start -->



            <form role="form" id="quickForm" method="POST" action="/crearloan" enctype="multipart/form-data">
                @csrf

              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$user->name}}">

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$user->phone}}">
                            <input type="hidden"  class="form-control" name="owner_id" value="{{$user->id}}" id="exampleInputEmail1" readonly >
                          </div>
                      </div>

                  </div>


                <label for="exampleInputEmail1 " class="btn btn-primary btn-block" >ACTION BY /UGIYE gutanga umwenda</label>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{Auth::user()->name}}">

                        </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{Auth::user()->phone}}">

                        </div>
                    </div>

                </div>

                <label for="exampleInputEmail1 " class="alert alert-secondary btn-block" >umubare wa amafaranga ufitemo :{{$loan->Remaining}} Rwf</label>
                <div class="row">
                    <input type="hidden" name="remaining" value="{{$loan->Remaining}}">
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount/amafaranga ushaka</label>
                        <input type="text"  class="form-control" id="exampleInputEmail1" name="inshyura" maxlength="7" placeholder="1000">
                      </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload image of receipts </label>
                        <input type="file"  required class="form-control" id="exampleInputEmail1" name="image">

                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">comment to payment </label>
                        <input type="text" required class="form-control" id="exampleInputEmail1" name="method" maxlength="20" placeholder="payed by cash  ">

                      </div>
                  </div>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
              </div>
            </form>

          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>

  <!-- /.content-wrapper -->

@endsection

