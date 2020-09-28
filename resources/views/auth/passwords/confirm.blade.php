@extends('layouts.app')

@section('title')

<title>WELCOME ! NNA</title>
@endsection

@section('content')


        <!-- slider area start -->
        <section class="slider-area" id="home">
            <div class="team-area ptb--120">
                <div class="container">
                    <div class="section-title text-black">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
     </div>

 </div>
</div>
</section>

<!-- about area end -->
<!-- feature area start -->
<section class="feature-area ptb--110 bg-theme" id="features">

</section>
<!-- feature area end -->

<!-- contact area end -->
@endsection
