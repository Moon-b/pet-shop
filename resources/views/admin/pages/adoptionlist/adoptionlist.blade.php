@extends('welcome')
@section('content')
<h1>Pet Adoption Form</h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> -->
<!-- <a href="{{route('AdoptionList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Adoption List</h2></a> -->
<a href="{{route('Pet.form')}}" class="btn btn-success"  style="float: right;font-size:18px; ">Add New Adoption List </a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">adoption_form_date</th>
      <th scope="col">reason_for_adoption</th>
      <th scope="col">adoption_form_status</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($adoptionlists as $singleadoptionlist)
      <tr>
        <td>{{$singleadoptionlist->id}}</td>
         <td>{{$singleadoptionlist->adoption_form_date}}</td>
        <td>{{$singleadoptionlist->reason_for_adoption}}</td>
        <td>{{$singleadoptionlist->adoption_form_status}}</td>
          <td>{{$singleadoptionlist->action}}
        <a  class='btn btn-primary' href="">Edit</a>  
        
        
        <a class='btn btn-success' href="">Delete</a>
        <!-- <a class='btn btn-Danger' href="">View</a> -->
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>


@endsection