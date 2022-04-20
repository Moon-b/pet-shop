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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">User Image</th>
      <th scope="col">User Address</th>
      <th scope="col">User Country</th>
      <th scope="col">User City</th>
      <th scope="col">User Phone</th>
      
      
      

      
 
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
