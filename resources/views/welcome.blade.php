@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   {{-- left image --}}
        <div class="col-md-7">
            <h1 class="text-left mt-5 pt-5">Time To Met New Friends</h1>
            <h2 class="text-left m-2 text-success">It's Free ?!!</h2>
<h3 class="mt-3 text-capitalize w-75 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quo reprehenderit quod a veritatis vitae accusamus laborum, ex soluta impedit voluptas, asperiores possimus consequatur placeat inventore at obcaecati quasi nemo rem modi repudiandae! Eius distinctio exercitationem alias aperiam quidem molestiae sequi dolorum harum delectus saepe culpa deleniti, molestias, commodi doloribus quos perferendis ad sint consequatur repudiandae perspiciatis vel? Quaerat deleniti maxime magni porro. Rem totam eum blanditiis maxime vel veniam necessitatibus? Omnis qui earum tenetur quod nostrum beatae accusantium delectus dignissimos vitae consectetur, eum odit atque sint quaerat possimus magnam in unde dicta ad quasi doloribus. Quisquam cupiditate nobis placeat.</h3>
<div class="noCredits">
<h2 class="text-left m-2 text-success  rounded w-75 text-center ml-2">No Credit Card Requirments</h2>
</div>


        </div>
       {{-- left content End --}}

       {{-- right content --}}
        <div class="feature col-md-5 welcome-image w-100 h-100 text-center justify-content-center m-auto">
           
            <img class="rounded left" src="{{ asset('images/backgrounds/20.png') }}" alt="image">

<a class=" btn btn-outline-primary welcome-register-link m-1"
href="{{ route('register') }}">{{ __('New User ?') }}</a>

<a class=" btn btn-outline-success welcome-login-link m-1"
href="{{ route('login') }}">{{ __('Have Account') }}</a>

        </div>
    {{-- right content End--}}


    </div>
</div>



 @endsection
