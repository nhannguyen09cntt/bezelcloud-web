@extends('layouts.app')

@section('content')
<!--breadcumb start here-->
<div class="xs-banner inner-banner contet-to-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="xs-banner-content">
                    <h1 class="banner-sub-title wow fadeInLeft">Welcome To</h1>
					<h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">ACCOUNT SIGNUP</h2>
                </div><!-- .xs-banner-content END -->
			</div>
			<div class="col-lg-6 align-self-end">
                <div class="inner-welcome-image-group signin-icon">
                    <img src="/images/innerWelcome/signin.png" alt="hosting image">
                    <img src="/images/innerWelcome/man.png" class="banner-ico banner-ico-1" alt="phone icon">
                    <img src="/images/innerWelcome/folder.png" class="banner-ico banner-ico-2" alt="phone icon">
                </div>
            </div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End banner section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Sign up</h2>
                    <h3 class="heading-title">CREATE <span>ACCOUNT</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->  
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
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
    </div><!-- .container END -->
</section><!-- END sign up form section -->
@endsection
