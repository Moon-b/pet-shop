@extends('welcome')
@section('content')
<form action="{{route('Customer.update',$customers->id)}}" method="POST"enctype="multipart/form-data">
    @method('PUT')
@csrf

<!-- <input type="hidden" value="{{$customers->id}}" name="id"> -->
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">customer_image</label>
    <input value="{{$customers->customer_image}}"name ='customer_image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer image">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_first_name</label>
    <input value="{{$customers->customer_first_name}}"name ='customer_first_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer first name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_last_name</label>
    <input value="{{$customers->customer_last_name}}"name ='customer_last_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer last name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_address</label>
    <input value="{{$customers->customer_address}}"name ='customer_address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer address">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_country</label>
    <input value="{{$customers->customer_country}}"name ='customer_country' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer country">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_city</label>
    <input value="{{$customers->customer_city}}"name ='customer_country' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer city">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_phone</label>
    <input value="{{$customers->customer_phone}}"name ='customer_phone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer phone">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">customer_email</label>
    <input value="{{$customers->customer_email}}"name ='customer_email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer email">
   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection