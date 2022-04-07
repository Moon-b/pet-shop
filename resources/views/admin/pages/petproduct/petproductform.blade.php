@extends('welcome')
@section('content')
<div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>
                <span class="btn btn-danger">{{$error}}</span></p>
        @endforeach
    @endif
</div>

<form action="{{route('PetProduct.post')}}" method="POST"enctype="multipart/form-data">
@csrf
<form>
<div class="form-group">
    <label for="petproduct">pet product categories name</label>
    <select class="form-control"name="pet_product_categories_id" id="">
       
    @foreach($petproductcategories as $singlepetproductcategory)
      
        <option value="{{$singlepetproductcategory->id}}">{{$singlepetproductcategory->pet_product_categories_name}}</option>
        @endforeach
</select>
</div>
  
<div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Name</label>
    <input  required name ='pet_product_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Picture</label>
    <input required name ='pet_product_picture' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_picture">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Details</label>
    <input required name ='pet_product_details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_details">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pet Product  Price</label>
    <input required name ='pet_product_price' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_price">
   
  </div>
 
    <div class="form-group">
    <label for="exampleInputEmail1">Pet Product Status</label>
    <input required name ='pet_product_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_product_status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection