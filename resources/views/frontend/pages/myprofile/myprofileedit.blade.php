@extends('frontend.master')
@section('product')
<form action="{{route('myprofile.update',$users->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
@csrf

{{-- <div class="form-group">
    <label for="petproduct">pet categories name</label>
    <select class="form-control"name="pet_product_categories_id" id="">
       
    @foreach($petproductcategories as $singlepetproductcategory)
      
        <option value="{{$singlepetproductcategory->id}}">{{$singlepetproductcategory->pet_product_categories_name}}</option>
        @endforeach
</select>
</div> --}}
  
<div class="form-group">
    <label for="exampleInputEmail1">Users Name</label>
    <input required value="{{$users->name}}"name ='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User   Image</label>
    <input  value="{{$users->user_image}}" name ='user_image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user image">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User Address</label>
    <input required value="{{$users->user_address}}" name ='user_address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user_address">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User Country</label>
    <input required value="{{$users->user_country}}"name ='user_country' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user country">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User City</label>
    <input required value="{{$users->user_city}}"name ='user_city' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user city">
   
  </div>
 
    <div class="form-group">
    <label for="exampleInputEmail1">User Phone</label>
    <input required value="{{$users->user_phone}}"name ='user_phone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user phone">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection