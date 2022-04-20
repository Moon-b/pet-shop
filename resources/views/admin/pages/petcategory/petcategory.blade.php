

@extends('welcome')
@section('content')
<h2><b>Pet Category</b></h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet</h2></a> -->

  <div style="display: flex; justify-content: flex-end ; padding-right: 127px;">
  <a href="{{route('PetCategory.form')}}" class="btn btn-success" style="float: right; width: 28%"><span style="font-size: 15px;">Add New Pet Category</span></a>
  </div>


  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Categories Name</th>
      <th scope="col">Details</th>
      {{-- <th scope="col">Status</th> --}}
      <th scope="col">Action</th>
       
    </tr>
  </thead>
  <tbody>
    @foreach($petcategories as $singlepetcategory)
      <tr>
        <td>{{$singlepetcategory->id}}</td>
         <td>{{$singlepetcategory->pet_categories_name}}</td>
        <td>{{$singlepetcategory->details}}</td>
        {{-- <td>{{$singlepetcategory->status}}</td> --}}
        <td>{{$singlepetcategory->action}}
        <a  class='btn btn-primary' href="{{route('PetCategory.edit',$singlepetcategory->id)}}">Edit</a>  
        
        
        <a class='btn btn-success' href="{{route('PetCategory.delete',$singlepetcategory->id)}}">Delete</a>
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

@endsection
