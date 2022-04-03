@extends('welcome')
@section('content')
<h1>Customer</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<a href="{{route('Customer.form')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New Customer </a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">customer_image</th>
      <th scope="col">customer_first_name</th>
      <th scope="col">customer_last_name</th>
      <th scope="col">customer_address</th>
      <th scope="col">customer_country</th>
      <th scope="col">customer_city</th>
      <th scope="col">customer_phone</th>
      <th scope="col">customer_email</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $singlecustomer)
      <tr>
        <td>{{$singlecustomer->id}}</td>

         <td><img width="130px" src="{{url('/uploads/'.$singlecustomer->customer_image)}}" alt="">
             </td>
             
        <td>{{$singlecustomer->customer_first_name}}</td>
        <td>{{$singlecustomer->customer_last_name}}</td>
        <td>{{$singlecustomer->customer_address}}</td>
        <td>{{$singlecustomer->customer_country}}</td>
        <td>{{$singlecustomer->customer_city}}</td>
        <td>{{$singlecustomer->customer_phone}}</td>
        <td>{{$singlecustomer->customer_email}}</td>
          <td>
        <a  class="btn btn-primary" href="{{route('Customer.edit',$singlecustomer->id)}}">Edit</a>         
        
        <a class="btn btn-success" href="{{route('Customer.delete',$singlecustomer->id)}}">Delete</a>
        <!-- <a class='btn btn-Danger' href="">View</a> -->
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>



@endsection