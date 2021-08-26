@extends('layouts.app')

@section('content')
<div class="my-5">

    <div class="row justify-content-center my-5">
  
  {{-- sidebar --}}
   <div class="col-md-1 m-1 rounded sidebar bg-danger">

<h1>hello from sidebar</h1>
@foreach ($friends as $friend )
    
<div class="col-md-12">
    {{ $friend->Auth::user()->first_name }}
</div>

@endforeach


</div>
{{-- end of sidebar --}}


 {{-- left content  --}}
   <div class="col-md-2 my-5 bg-success">

<h1>hello from left content</h1>



</div>

{{-- left content End --}}







{{-- right content --}}
<div class="col-md-8 my-5 text-center justify-content-center">
 hello from col-8
</div>
{{-- right content End--}}   





    </div> <!-- row -->
</div>
@endsection
