@extends('welcome')
@section('content')
<form action="{{route('DonationList.post')}}" method="POST"enctype="multipart/form-data">
@csrf
<form>
  
<div class="form-group">
    <label for="exampleInputEmail1">Donation Form Date</label>
    <input name ='donation_form_date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form date">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Reason For Donation </label>
    <input name ='reason_for_donation' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter reason for donation">
    <div class="form-group">
    <label for="exampleInputEmail1">Donation Form Status</label>
    <input name ='donation_form_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form status">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection