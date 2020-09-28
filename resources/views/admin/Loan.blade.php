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
            <h5>Giving Member Loan <small> And </small> Checking loan he/she has</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Loan</li>
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
              <h3 class="card-title">Giving Member Loan <small> And </small> Checking loan he/she has</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->



            <form role="form" id="quickForm" method="POST" action="/createloan">
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
                            <input type="hidden"  class="form-control" name="debt_of" value="{{$user->id}}" id="exampleInputEmail1" readonly placeholder="{{$user->phone}}">
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

                <label for="exampleInputEmail1 " class="alert alert-secondary btn-block" >umubare wa amafaranga</label>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount/amafaranga ushaka</label>
                        <input type="text"  class="form-control" id="exampleInputEmail1" name="bitsa" maxlength="5" placeholder="1000">

                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total savings(RWF) </label>

                        <input type="text"   class="form-control" id="exampleInputEmail1"   readonly placeholder="{{$savings->Total}}">

                       {{-- <input type="text"  name="tatabal" class="form-control" id="exampleInputEmail1" readonly value=""> --}}


                      </div>
                  </div>

              </div>

              <div class="col-lg-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Loan (RWF)</label>
                    @if ($loan==null)
                    <input type="text"  class="form-control" id="exampleInputEmail1" readonly value="0">
                    <input type="hidden"   class="form-control" name="remaining" id="exampleInputEmail1" readonly value="0">
                   @else
                   <div class="row">
                        <div class="col-lg-6">
                            <input type="text"   class="form-control" name="remaining" id="exampleInputEmail1" readonly value="{{$loan->Remaining}}">
                        </div>
                        <div class="col-lg-6">
                            <a href="/payingloan/{{$user->id}}" class="form-control btn btn-primary" style="color: #fff !important ">Payloan</a>
                        </div>
                   </div>


              @endif
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

