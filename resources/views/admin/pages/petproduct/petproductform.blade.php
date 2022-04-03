@extends('welcome')
@section('content')
<form action="{{route('PetProduct.post')}}" method="POST"enctype="multipart/form-data">
@csrf
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Name</label>
    <input name ='pet_product_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Picture</label>
    <input name ='pet_product_picture' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_picture">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Details</label>
    <input name ='pet_product_details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_details">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Price</label>
    <input name ='pet_product_price' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_price">
   
  </div>
 
    <div class="form-group">
    <label for="exampleInputEmail1">Pet Product Status</label>
    <input name ='pet_product_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection