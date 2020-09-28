@extends('layouts.adminapp')

@section('title')

<title>WELCOME ! NNA</title>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           @if (Session::has('message'))
      <div class="btn btn-success btn-lg btn-block">{{ Session::get('message') }}</div>
      @endif
            <h1>Insert New Group </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Seting Group</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Insert Group In System</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
           <form method="POST" action="/registerGroups">
            @csrf

          <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province" class="col-md-12 col-form-label text-md-center">{{ __('Province') }}</label>
                        <select id="province" class="form-control province"  required autocomplete="province">
                            @foreach ($ProvinceRegion as $provice )
                            <option value="{{$provice->id}}">{{$provice->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="district" class="col-md-12 col-form-label text-md-center">{{ __('District') }}</label>
                            <select id="District" class="form-control District"  required autocomplete="District">
                           </select>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="Sectore" class="col-md-12 col-form-label text-md-center">{{ __('Sectore') }}</label>
                            <select id="Sectore" class="form-control Sectore"  required autocomplete="Sectore">
                           </select>

                        </div>
                    </div>
                  </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="Cell" class="col-md-12 col-form-label text-md-center">{{ __('Cell') }}</label>
                            <select id="Cell" class="form-control Cell"  required autocomplete="Cell">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="Village" class="col-md-12 col-form-label text-md-center">{{ __('Village') }}</label>
                            <select id="Village" name="Village" class="form-control Village"  required autocomplete="Village">
                            </select>
                            @error('Village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="Ikibina" class="col-md-12 col-form-label text-md-center">{{ __('Group') }}</label>
                            <input id="Ikibina" type="text" class="form-control @error('Ikibina') is-invalid @enderror" name="Ikibina" value="{{ old('Ikibina') }}" required autocomplete="Ikibina" placeholder="Izigamire">
                            @error('Ikibina')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  </div>

            </div>
          </div>
           <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
          </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
