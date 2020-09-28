
@extends('layouts.home')


@section('title')

<title>Profile </title>
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    @if (Auth::user()->image == null)
                    <img class="profile-user-img img-fluid img-circle" src="{{ url('assets/dist/img/AdminLTELogo.png')}}" alt="User profile picture">
                    @else
                    <img class="profile-user-img img-fluid img-circle" src=" {{ asset('images')}}/{{ Auth::user()->image }}" alt="User profile picture">
                    @endif

                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->phone }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <p class="text-muted text-center">{{ Auth::user()->email }}</p>
                  </li>
                  <li class="list-group-item">
                    <p class="text-muted text-center">{{ Auth::user()->user_type }}</p>
                  </li>

                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>

                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                          @if (Auth::user()->image == null)
                          <img class="profile-user-img img-fluid img-circle" src="{{ url('assets/dist/img/AdminLTELogo.png')}}" alt="user image">
                          @else
                          <img class="profile-user-img img-fluid img-circle" src=" {{ asset('images')}}/{{ Auth::user()->image }}" alt="user image">
                          @endif

                        <span class="username">
                          <a href="#">{{ Auth::user()->name }}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        {{-- <span class="description">Shared publicly - 7:30 PM today</span> --}}
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal"method="POST" action="/Updateprofile" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" id="inputName" placeholder="Name">
                                </div>
                              </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Your phone number</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" id="inputName" placeholder="Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" readonly class="form-control" value="{{Auth::user()->email}}" id="inputEmail" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">Current image</label>
                                <div class="col-sm-10">
                                    @if (Auth::user()->image == null)
                                    <img class="profile-user-img img-fluid img-circle"  src="{{ url('assets/dist/img/AdminLTELogo.png')}}" alt="user image">
                                    @else
                                    <img class="profile-user-img img-fluid img-circle" src=" {{ asset('images')}}/{{ Auth::user()->image }}" alt="user image">
                                    @endif
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">Profile picture</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="oldimage" value="{{Auth::user()->image}}">
                                  <input type="file" class="form-control" name="image" id="inputSkills" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>

                    </form>
                </div>s
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
