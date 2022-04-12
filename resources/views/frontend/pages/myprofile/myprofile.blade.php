@extends('frontend.master')
@section('product')
   @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
 
<div class="row">
    <a href="{{route('mypost')}}" class="btn btn-info">My Post</a>
</div>
<div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">user image</th>
      <th scope="col">user address</th>
      <th scope="col">user country</th>
      <th scope="col">user city</th>
      <th scope="col">user phone</th>
      
 
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$users->id}}</td>
         <td>{{$users->name}}</td>
        <td><img width="150px" src="{{url('/uploads',$users->user_image)}}" alt=""></td>
        <td>{{$users->user_address}}</td>
        <td>{{$users->user_country}}</td>
        <td>{{$users->user_city}}</td>
        <td>{{$users->user_phone}}</td>
          
        
      </tr>
  </tbody>
</table>
  </div>
</div>
                




@endsection 