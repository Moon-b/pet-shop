@extends('welcome')
@section('content')
<h1><b><u>Pet Product</u></b> </h1>
<a href="{{route('PetProduct.form')}}" class="btn btn-success"  style="float: right;font-size:18px; ">Add New Pet Product </a>
<table class="table table-borderless ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Categories Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Picture</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Available Quantity</th>
      <th scope="col">Pet Product Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <!-- <th scope="col">view</th> -->
    </tr>
  </thead>
  <tbody>
  
    @foreach($petproducts as $singlepetproduct)
      <tr>
        <td>{{$singlepetproduct->id}}</td>
        <td>{{$singlepetproduct->petproduct->pet_product_categories_name}}</td>
         <td>{{$singlepetproduct->pet_product_name}}</td>
         <td>
        <img width="150px" src="{{url('/uploads',$singlepetproduct->pet_product_picture)}}" alt="product image">
      </td>
        <!-- <td>{{$singlepetproduct->pet_product_picture}}</td> -->
        <td>{{$singlepetproduct->pet_product_details}}</td>
        <td>{{$singlepetproduct->pet_product_price}}</td>
        <td>{{$singlepetproduct->available_quantity}}</td>
        <td>{{$singlepetproduct->pet_product_status}}</td>
        
        <td>
        <a  class='btn btn-primary' href="{{route('PetProduct.edit',$singlepetproduct->id)}}">Edit</a>  
        </td>
        <td>
        <a class='btn btn-success' href="{{route('PetProduct.delete',$singlepetproduct->id)}}">Delete</a>
        </td>
        <!-- <td>{{$singlepetproduct->view}}
        <a class="btn btn-danger" href="">View</a>
        </td> -->
      </tr>
    @endforeach
  </tbody>
</table> 
  


 

@endsection