@extends('layouts.app')

@section('title')

<title>WELCOME ! NNA</title>
@endsection

@section('content')
        <!-- slider area start -->
        <section >
            <div class="team-area ptb--120">
                <div class="container ">
                    <div class="section-title text-black">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="amazina/names">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                        <div class="col-md-6">
                                            <input id="Phone" type="Phone" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone" placeholder="+25....">

                                            @error('Phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                   {{-- location your from  --}}
                                                    {{-- province --}}
                                                   <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label for="province" class="col-md-12 col-form-label text-md-center">{{ __('Province') }}</label>
                                                        <select id="province" class="form-control province"  required autocomplete="province">
                                                            @foreach ($ProvinceRegion as $provice )
                                                            <option value="{{$provice->id}}">{{$provice->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                </div>
                                                {{-- district --}}
                                                <div class="col-lg-4">
                                                    <div class="form-group row">
                                                     <div class="col-md-12">
                                                         <label for="district" class="col-md-12 col-form-label text-md-center">{{ __('District') }}</label>
                                                         <select id="District" class="form-control District"  required autocomplete="District">
                                                        </select>
                                                     </div>
                                                 </div>
                                                 </div>
                                                 {{-- Sectore --}}
                                                <div class="col-lg-4">
                                                    <div class="form-group row">
                                                     <div class="col-md-12">
                                                         <label for="Sectore" class="col-md-12 col-form-label text-md-center">{{ __('Sectore') }}</label>
                                                         <select id="Sectore" class="form-control Sectore"  required autocomplete="Sectore">
                                                        </select>

                                                     </div>
                                                 </div>
                                                 </div>
                                                <div class="col-lg-12">
                                                    {{-- cell --}}
                                                    <div class="col-lg-4">
                                                        <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <label for="Cell" class="col-md-12 col-form-label text-md-center">{{ __('Cell') }}</label>
                                                            <select id="Cell" class="form-control Cell"  required autocomplete="Cell">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        {{-- cell --}}
                                                        <div class="col-lg-4">
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
                                                    {{-- Ikibina --}}
                                                    <div class="col-lg-4">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                               <label for="Ikibina" class="col-md-12 col-form-label text-md-center">{{ __('Ikibina') }}</label>
                                                                <select id="Ikibina" name="Ikibina" class="form-control Ikibina"  required autocomplete="Ikibina">
                                                                </select>
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

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="0788377874@gmail.com or example@gmail.com">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

