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
            <h1>Deposting/Kubitsa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
            <div class="card-header">
              <h3 class="card-title">Fill the form <small> Uzuza ibisabwa</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->



            <form role="form" id="quickForm" method="POST" action="/Savingprocess">
                @csrf

              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$userinformation->name}}">
                            <input type="hidden" value="{{$userinformation->id}} " name="User_id">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$userinformation->phone}}">
                          </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Group</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$Itsindaname->name}}">
                          </div>
                      </div>
                  </div>


                <label for="exampleInputEmail1 " class="btn btn-primary btn-block" >ACTION BY /UGIYE KUMUBIKIRA</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{ Auth::user()->name }}">
                          <input type="hidden" value="{{ Auth::user()->id }} " name="Action_by">
                          <input type="hidden" value="{{ Auth::user()->id }} " name="Group_id">
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$userinformation->phone}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Group</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$Itsindaname->name}}">
                        </div>
                    </div>
                </div>

                <label for="exampleInputEmail1 " class="alert alert-secondary btn-block" >Save /Bikira umukiriya</label>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Saving/Bitsa /rwf</label>
                        <input type="text"  class="form-control" id="exampleInputEmail1" name="bitsa" maxlength="5" placeholder="1000">

                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total(RWF)</label>
                        @if ($statement==null)
                        <input type="text"   class="form-control" id="exampleInputEmail1"   readonly placeholder="0">
                       @else
                       <input type="text"  name="tatabal" class="form-control" id="exampleInputEmail1" readonly value="{{$statement->Total}}">
                        @endif

                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loan</label>
                        @if ($statement==null)
                        <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="0(RWF)">
                       @else
                        <input type="text"  class="form-control" id="exampleInputEmail1" readonly placeholder="{{$statement->Loan}}(RWF)">
                        @endif

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

