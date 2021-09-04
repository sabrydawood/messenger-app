@extends('layouts.master')
@section('page-header')

@endsection
@section('css')
<!---Internal Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm py-5">

					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">

									<div class="main-profile-overview">
										<div
                                        style="cursor: pointer; "
                                         class="main-img-user profile-user">
											<img alt="" src="{{ Auth::user()->avatar }}">
                                            <a class="fas fa-camera profile-edit  modal-effect" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8"></a>

                   

                                        <div class="modal" id="modaldemo8">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if ($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                                <strong>{{ $message }}</strong>
                                                        </div>
                                                        @endif
                                                  
                                                        @if (count($errors) > 0)
                                                            <div class="alert alert-danger">
                                                                <strong>Whoops!</strong> There were some problems with your input.
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        <form  action="{{ route('user.updateAvatar') }}" method="post" 
                                                        enctype="multipart/form-data" >
                                                         @csrf
                                                         <input type="file"
                                                          class="dropify"
                                                          data-height="400"
                                                         name="avatar" id="avatar" />
{{-- <input  type="file" name="avatar" id="avatar"> --}}
                                                         @error('file')
                                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                         @enderror
                                                         <button class="btn btn-pink my-1" type="submit">Save changes</button>  
                                                 </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- model for update avatar linked with camera icon -->


										</div>

										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{  Auth::user()->first_name }} {{  Auth::user()->middle_name }}</h5>

												<p class="main-profile-name-text">
                                                    <strong class="bg-pink text-light p-1 rounded">Username :</strong> {{  Auth::user()->username }}</p>
											</div>
										</div>

									<h6 class="tx-13 mg-b-20 text-center bg-pink text-light p-1 rounded">Bio</h6>
										<div class="main-profile-bio">
                                            @if (Auth::user()->preference)
                                              {{ Auth::user()->preference }}
                                            @else
                                                No Bio Add It 
                                            @endif
										</div><!-- main-profile-bio -->

										<div class="row">
											<div class="col-md-4 col mb20">
												<h5>
                                                    {{-- @if (Auth::user()->friend)
                                                    {{ count(Auth::user()->friend) }}
                                                  @else
                                                    0
                                                  @endif --}}
                                                </h5>
												<h6 class="text-small text-muted mb-0">Friends</h6>
											</div> <!-- Friends -->

											<div class="col-md-4 col mb20">
												<h5>                                                    {{-- @if (Auth::user()->posts)
                                                    {{ count(Auth::user()->posts) }}
                                                  @else
                                                    0
                                                  @endif --}}</h5>
												<h6 class="text-small text-muted mb-0">Posts</h6>
											</div><!-- Posts -->

										</div>

										<hr class="mg-y-30">

										<h6 class="main-content-label text-center tx-13 mg-b-20 bg-pink text-light p-1 rounded">Groups</h6>

										<div class="main-profile-social-list">
                                         {{-- @foreach ($groups as $group)
    										<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
												<span>{{ $group->name }}</span> <a href="{{ route('group.show' ,$group->id ) }}oute() }}">Go To Group</a>
												</div>
											</div>
                                        @endforeach --}}
										</div> <!-- groups  -->

									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div> <!-- col-lg-4 closed -->


					<div class="col-lg-8">

						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">

										<li class="">
											<a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span> </a>
										</li>

										<li class="">
											<a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">GALLERY</span> </a>
										</li>

										<li class="">
											<a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a>
										</li>

									</ul>
								</div>

								<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
									<div class="tab-pane active" id="home">

										<h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>

										<p class="m-b-5">
                                            @if (Auth::user()->preference)
                                            {{ Auth::user()->preference }}
                                          @else
                                              No Bio Add It 
                                          @endif
                                        </p>
										<hr class="mg-y-30">

                                        <div class="m-t-30">
                                                <h4 class="tx-15 text-uppercase mb-3">Update Your Bio </h4>
                                                <form  action="{{ route('user.updateBio') }}" method="post">
                                                        @csrf
                                                        <textarea
                                                        class="form-control bg-danger-gradient text-dark text-left my-1 mg-t-20"
                                                        placeholder="Input Your Bio"
                                                        rows="5"
                                                        name="preference" id="preference">
                                                        {{ Auth::user()->preference }}
                                                        </textarea>
                                                        <button class="btn btn-pink my-1" type="submit">Save changes</button>                                 
                                                </form>
                                        </div> <!-- update bio  -->

									</div>

									<div class="tab-pane" id="profile">
										<div class="row">


                                            {{-- @foreach ($images as $image) --}}
                                                <div class="col-sm-4">
                                                    <div class="border p-1 card thumb">
                                                        <a href="#" class="image-popup" title="Screenshot-2">
                                                             <img src="{{ Auth::user()->avatar }}" class="thumb-img" alt="work-thumbnail">
                                                             </a>
                                                        <h4 class="text-center tx-14 mt-3 mb-0">Post Title</h4>
                                                        <hr class="mg-y-30">
                                                        <p class="text-muted text-center">
                                                            <small>Post Category</small>

                                                            <!-- post will get from posts controller belongs to this user -->
                                                        <a href="#" class="image-popup" title="Screenshot-2">View Post</a>

                                                        </p>
                                                    </div>
                                                </div>    
                                            {{-- @endforeach --}}

										</div>
									</div>
									<div class="tab-pane" id="settings">
                                        <div class="m-t-30">
                                         <h4 class="tx-15 text-uppercase mb-3">Update Your Username </h4>
                                            <form  action="{{ route('user.updateUsername') }}" method="post">
                                                    @csrf
                                                    <input
                                                    type="text"
                                                    class="form-control bg-danger-gradient text-dark text-left my-1 mg-t-20"
                                                    value=" {{ Auth::user()->username }}"
                                                    placeholder="Input Your Username"
                                                    name="username" id="username">
                                                    <button class="btn btn-pink my-1" type="submit">Save changes</button>                                 
                                            </form>
                                        </div> <!-- update UserName  -->
										<hr class="mg-y-30">

                                        <div class="m-t-30">
                                         <h4 class="tx-15 text-uppercase mb-3">Update Your E-Mail Address </h4>
                                            <form  action="{{ route('user.updateEmail') }}" method="post">
                                                    @csrf
                                                    <input
                                                    type="email"
                                                    class="form-control bg-danger-gradient text-dark text-left my-1 mg-t-20"
                                                    value=" {{ Auth::user()->email }}"
                                                    placeholder="Input Your Email"
                                                    name="email" id="email">
                                                    <button class="btn btn-pink my-1" type="submit">Save changes</button>                                 
                                            </form>
                                        </div> <!-- update email  -->
										<hr class="mg-y-30">

                                        <div class="m-t-30">
                                         <h4 class="tx-15 text-uppercase mb-3">Update Your Password </h4>
                                            <form  action="{{ route('user.updatePassword') }}" method="post">
                                                    @csrf
                                                    <input
                                                    type="password"
                                                    class="form-control bg-danger-gradient text-dark text-left my-1 mg-t-20"
                                                    placeholder="Input Your New Password"
                                                    name="password" id="password"> <!-- password input -->

                                                    <input
                                                    id="password-confirm"
                                                    type="password"
                                                    class="form-control bg-gradient-blue text-light text-left my-1 mg-t-20"
                                                    placeholder="ReType Your New Password"
                                                    name="password_confirmation"><!-- password confirm -->

                                                    <div class="custom-control custom-switch">
                                                    <input class="custom-control-input text-danger bg-dark" id="customSwitchRegister" type="checkbox" onclick="ShowAndHideRegisterPassword()">
                                                      <label class="custom-control-label" for="customSwitchRegister">Show Password</label>
                                                    </div>
                                                    <button class="btn btn-pink my-1" type="submit">Save changes</button>                                 
                                            </form>
                                        </div> <!-- update Password  -->
										<hr class="mg-y-30">

                                    </div>
								</div>
							</div>
						</div>
					</div> <!-- col-lg-8 closed -->

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')


<!-- Internal Modal js-->
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection
