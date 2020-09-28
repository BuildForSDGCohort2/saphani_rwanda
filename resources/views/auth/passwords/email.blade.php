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
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                             @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
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
