@extends('welcome')
@section('content')
<h1>Pet Donation Form</h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<a href="{{route('DonationList.form')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New Donation List </a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">donation_form_date</th>
      <th scope="col">reason_for_donation</th>
      <th scope="col">donation_form_status</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($donationlists as $singledonationlist)
      <tr>
        <td>{{$singledonationlist->id}}</td>
         <td>{{$singledonationlist->donation_form_date}}</td>
        <td>{{$singledonationlist->reason_for_donation}}</td>
        <td>{{$singledonationlist->donation_form_status}}</td>
          <td>{{$singledonationlist->action}}
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