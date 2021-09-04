@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-danger">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('images/backgrounds/login_pic.jpg')}}" class="my-auto rounded mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 py-5 col-lg-6 col-xl-5 bg-primary-transparent">
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



										<div class="main-signup-header">

											<h2 class="text-primary">Get Started</h2>

											<h5 class="font-weight-normal mb-4">It's free to signup and only takes a minute.</h5>

                                            <form autocomplete="off" method="POST" action="{{ route('register.custom') }}">
                                                @csrf

												<div class="form-group">
													<label>{{ __('First Name') }}</label>
                                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="Enter Your First Name" autofocus>
                                                        @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
                                                <!-- first name -->

												<div class="form-group">
													<label>{{ __('Last Name') }}</label>
                                                    <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" placeholder="Enter Your Last Name" autofocus>
                                                        @error('middle_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
                                                <!-- Last Name -->

												<div class="form-group">
													<label>{{ __('E-Mail Address') }}</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
                                                <!-- email -->

												<div class="form-group">
													<label>{{ __('Phone Number') }}</label>
                                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Enter Your Phone Number" autofocus>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>

											<div class="form-group ">
													<label class="col-5 px-auto">{{ __('Country') }}</label>
                                                    <div class=" col-6 autocomplete border-danger ">
                                                        <input id="country" type="text" class=" @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}"  placeholder="Enter Your Country" autofocus >

                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                     </div>
											</div>
                                                <!-- Contry -->
                                                    	<div class="form-group">
													<label>{{ __('Password') }}</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div><!-- Password -->

	                                        <div class="form-group">
													<label>{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <div class="custom-control custom-switch">
                                                    <input class="custom-control-input text-danger bg-dark" id="customSwitchRegister" type="checkbox" onclick="ShowAndHideRegisterPassword()">
                                                      <label class="custom-control-label" for="customSwitchRegister">Show Password</label>
                                                    </div>
                                            </div> <!-- retype password -->


                                                <button type="submit" class="btn btn-outline-danger btn-block">
                                                    {{ __('Create Account') }}
                                                </button> <!-- Sign UP Button -->


												<div class="row row-xs">
													<div class="col-sm-6">
														<button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
													</div>

													<div class="col-sm-6 mg-t-10 mg-sm-t-0">
														<button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
													</div>

												</div>

											</form>
											<div class="main-signup-footer mt-5">
												<p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
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
