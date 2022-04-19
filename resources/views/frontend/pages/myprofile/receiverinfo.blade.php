@extends('frontend.master')
@section('product')
   @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
 
<div class="row">
    <!-- <a href="{{route('mypost')}}" class="btn btn-info">My Post</a> -->
</div>
<div class="col-12" style="overflow-x: scroll;">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">user image</th>
      <th scope="col">user address</th>
      <th scope="col">user country</th>
      <th scope="col">user_city</th>
      <th scope="col">user_phone</th>
      
      
      

      
 
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$post->id}}</td>
         <td>{{$post->post->name}}</td>
         <td>{{$post->post->email}}</td>
        <td><img width="150px" src="{{url('/uploads',$user->user_image)}}" alt="not found"></td>
        <td>{{$post->post->user_address}}</td>
        <td>{{$post->post->user_country}}</td>
        <td>{{$post->post->user_city}}</td>
        <td>{{$post->post->user_phone}}</td>
        <
        
       
        
      </tr>
  </tbody>
</table>
  </div>
</div>
                




@endsection 
