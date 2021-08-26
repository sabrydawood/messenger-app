@extends('layouts.app')


@section('content')

<h1>welcome to profile page</h1>

<h1>{{$user->first_name}} </h1>
<h1>{{$user->middle_name}} </h1>
<h1>{{$user->email}} </h1>
<h1>{{$user->phone}} </h1>
@if (Auth::('friends'))
    <a href=""> add friend</a>  
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card text-center" style="width: 18rem;">
  <img src="{{$user->avatar}}" width="100" class="card-img-top">
    <h5 class="card-title">{{$user->first_name}} {{$user->middle_name}} </h5>
    <p class="card-text"><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/egypt-18-286896.png" width="20"> {{$user->country}} </p>
    <p class="card-text">{{$user->phone}} </p>
    <a href="#" class="btn btn-primary ">Send Message</a>
</div>

        </div>
    </div>
</div>



@endsection
