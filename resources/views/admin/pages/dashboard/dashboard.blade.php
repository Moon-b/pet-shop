@extends('welcome')
@section('content')
<h1>hello</h1>
<div class="text-center">
  <img src="{{url('image/mun.jpg')}}" class="rounded" alt="Hello Munmun">
  <!-- url({{url('/image/mun.jpg')}})" -->
</div>
@endsection