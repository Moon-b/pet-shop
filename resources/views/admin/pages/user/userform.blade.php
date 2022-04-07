@extends('welcome')
@section('content')

<form action="{{route('user.post')}}" method="POST"enctype="multipart/form-data">
@csrf

  
<div class="form-group">
    <label for="exampleInputEmail1">user_image</label>
    <input value=""name ='user_image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user image">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input value=""name ='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">user_last_name</label>
    <input value=""name ='user_last_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user last name">
   
  </div> -->
  <div class="form-group">
    <label for="exampleInputEmail1">user_address</label>
    <input value=""name ='customer_address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer address">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">user_country</label>
    <input value=""name ='user_country' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user country">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">user_city</label>
    <input name ="user_city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user city">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">user_phone</label>
    <input value=""name ='user_phone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user phone">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">user_email</label>
    <input value=""name ='user_email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">roll</label>
    <input value="{{$users->roll}}"name ='user_email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter roll">
   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection