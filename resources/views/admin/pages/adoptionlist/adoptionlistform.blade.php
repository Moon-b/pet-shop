@extends('welcome')
@section('content')
<form action="{{route('AdoptionList.post')}}" method="POST"enctype="multipart/form-data">
@csrf
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">Adoption Form Date</label>
    <input name ='adoption_form_date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter adoption form date">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Reason For Adoption </label>
    <input name ='reason_for_adoption' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter reason for adoption">
    <div class="form-group">
    <label for="exampleInputEmail1">Adoption Form Status</label>
    <input name ='adoption_form_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter adoption form status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection