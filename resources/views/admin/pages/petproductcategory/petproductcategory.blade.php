@extends('welcome')
@section('content')
<h1><b><u>Pet Product Category</u></b></h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> -->
<!-- <a href="{{route('PetProductCategory.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> -->
<a href="{{route('PetProductCategory.form')}}" class="btn btn-success"  style="float: right;font-size:18px; ">Add New Pet Product Category </a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_product_categories_name</th>
      <th scope="col">details</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($petproductcategories as $singlepetproductcategory)
      <tr>
        <td>{{$singlepetproductcategory->id}}</td>
         <td>{{$singlepetproductcategory->pet_product_categories_name}}</td>
        <td>{{$singlepetproductcategory->details}}</td>
        <td>{{$singlepetproductcategory->status}}</td>
          <td>{{$singlepetproductcategory->action}}
        <a  class='btn btn-primary' href="">Edit</a>  
        
        
        <a class='btn btn-success' href="">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

@endsection


