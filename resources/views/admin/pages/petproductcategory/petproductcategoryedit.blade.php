@extends('welcome')
@section('content')
<form action="{{route('PetProductCategory.update',$petproductcategories->id)}}" method="POST"enctype="multipart/form-data">
    @method('PUT')
@csrf
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">Pet Product Categories Name</label>
    <input value="{{$petproductcategories->pet_product_categories_name}}" name ='pet_product_categories_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_categories_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input value="{{$petproductcategories->details}}" name ='details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter details">
    <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input value="{{$petproductcategories->status}}"name ='status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection