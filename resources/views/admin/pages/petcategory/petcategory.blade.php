

@extends('welcome')
@section('content')
<h2><b>Pet Category</b></h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet</h2></a> -->
<a href="{{route('PetCategory.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Pet Category</h2></a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_categories_name</th>
      <th scope="col">details</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
       
    </tr>
  </thead>
  <tbody>
    @foreach($petcategories as $singlepetcategory)
      <tr>
        <td>{{$singlepetcategory->id}}</td>
         <td>{{$singlepetcategory->pet_categories_name}}</td>
        <td>{{$singlepetcategory->details}}</td>
        <td>{{$singlepetcategory->status}}</td>
        <td>{{$singlepetcategory->action}}
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
