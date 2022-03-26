@extends('welcome')
@section('content')
<form action="{{route('PetCategory.post')}}" method="POST"enctype="multipart/form-data">
@csrf
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">Pet Categories Name</label>
    <input name ='pet_categories_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_categories_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input name ='details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter details">
    <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input name ='status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection