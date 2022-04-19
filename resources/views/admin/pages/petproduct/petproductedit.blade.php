@extends('welcome')
@section('content')
<form action="{{route('PetProduct.update',$petproducts->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
@csrf

<div class="form-group">
    <label for="petproduct">pet categories name</label>
    <select class="form-control"name="pet_product_categories_id" id="">
       
    @foreach($petproductcategories as $singlepetproductcategory)
      
        <option value="{{$singlepetproductcategory->id}}">{{$singlepetproductcategory->pet_product_categories_name}}</option>
        @endforeach
</select>
</div>
  
<div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Name</label>
    <input required value="{{$petproducts->pet_product_name}}"name ='pet_product_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Picture</label>
    <input  value="{{$petproducts->pet_product_picture}}" name ='pet_product_picture' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_picture">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Details</label>
    <input required value="{{$petproducts->pet_product_details}}" name ='pet_product_details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_details">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Price</label>
    <input required value="{{$petproducts->pet_product_price}}"name ='pet_product_price' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_price">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Available Quantity</label>
    <input required value="{{$petproducts->available_quantity}}" name ="available_quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter available quantity">
   
  </div>
 
    <div class="form-group">
    <label for="exampleInputEmail1">Pet Product Status</label>
    <input required value="{{$petproducts->pet_product_status}}"name ='pet_product_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection