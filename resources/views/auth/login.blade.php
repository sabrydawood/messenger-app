@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-danger ">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('images/backgrounds/login_pic.jpg')}}" class="my-auto rounded mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-primary-transparent">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex">
                                            <a href="{{ url('/') }}">
                                            <img src="{{ URL::asset('images/backgrounds/user.jpg')}}" class="sign-favicon ht-40 rounded-circle ml-1 mr-1" alt="logo"></a>
                                            <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">{{ config('app.name', 'Laravel') }}</h1>
                                        </div>

										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>Welcome back!</h2>
												<h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                                                <form autocomplete="off" method="POST" action="{{ route('login.custom') }}">
                                                    @csrf
													<div class="form-group">
														<label>{{ __('E-Mail Address') }}</label>
                                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
                                                        <!-- email -->

													<div class="form-group">
														<label>{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                        <div class="custom-control custom-switch">
                                                            <input class="custom-control-input text-danger bg-dark" id="customSwitchLogin" type="checkbox" onclick="ShowAndHidePassword()">
                                                              <label class="custom-control-label" for="customSwitchLogin">Show Password</label>
                                                            </div>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                        <!-- password -->
                                                    <button class="btn btn-main-primary btn-block">Sign In</button>
													<div class="row row-xs">
														<div class="col-sm-6">
															<a href="{{ route('github') }}" class="btn btn-block" ><i class="fab fa-facebook-f"></i> Signup with Facebook</a>
														</div>
														<div class="col-sm-6 mg-t-10 mg-sm-t-0">
															<a class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</a>
														</div>
													</div>
												</form>
												<div class="main-signin-footer mt-5">
													<p><a href="">Forgot password?</a></p>
													<p>Don't have an account? <a href="{{ route('register') }}">Create an Account</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection
