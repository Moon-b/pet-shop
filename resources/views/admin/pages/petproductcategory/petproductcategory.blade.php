@extends('welcome')
@section('content')
<h1><b>Pet Product Category</b></h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> -->
<!-- <a href="{{route('PetProductCategory.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> -->
{{-- <a href="{{route('PetProductCategory.form')}}" class="btn btn-success"  style="float: right;font-size:18px; ">Add New Pet Product Category </a> --}}
<a href="{{route('PetProductCategory.form')}}" class="btn btn-success" style="float: right; width: 28%"><span style="font-size: 15px;">Add New Pet Product Category</span></a>
{{-- <a href="{{route('PetProductCategory.form')}}" class="btn btn-success"  style="float: right;font-size:18px; ">Add New Pet Product Category </a> --}}
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Categories Name</th>
      <th scope="col">Details</th>
      {{-- <th scope="col">status</th> --}}
      <th scope="col">Action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($petproductcategories as $singlepetproductcategory)
      <tr>
        <td>{{$singlepetproductcategory->id}}</td>
         <td>{{$singlepetproductcategory->pet_product_categories_name}}</td>
        <td>{{$singlepetproductcategory->details}}</td>
        {{-- <td>{{$singlepetproductcategory->status}}</td> --}}
          <td>{{$singlepetproductcategory->action}}
        <a  class='btn btn-primary' href="{{route('PetProductCategory.edit',$singlepetproductcategory->id)}}">Edit</a>  
        
        
        <a class='btn btn-success' href="{{route('PetProductCategory.delete',$singlepetproductcategory->id)}}">Delete</a>
       
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

@endsection


