@extends('welcome')
@section('content')
<h1>Customer</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
{{-- <a href="{{route('user.form')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New user </a> --}}
<a href="{{route('user.form')}}" class="btn btn-success" style="float: right; width: 28%"><span style="font-size: 15px;">Add New User</span></a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Image</th>
      <th scope="col">Name</th>
      <!-- <th scope="col">user_last_name</th> -->
      <th scope="col">User Address</th>
      <th scope="col">User Country</th>
      <th scope="col">User City</th>
      <th scope="col">User Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($users as $singleuser)
      <tr>
        <td>{{$singleuser->id}}</td>

         <td><img width="130px" src="{{url('/uploads/'.$singleuser->user_image)}}" alt="">
             </td>
             
        <td>{{$singleuser->name}}</td>
        <!-- <td>{{$singleuser->user_last_name}}</td> -->
        <td>{{$singleuser->user_address}}</td>
        <td>{{$singleuser->user_country}}</td>
        <td>{{$singleuser->user_city}}</td>
        <td>{{$singleuser->user_phone}}</td>
        <td>{{$singleuser->email}}</td>
        <td>{{$singleuser->roll}}</td>
          <td>
        <a  class="btn btn-primary" href="{{route('user.edit',$singleuser->id)}}">Edit</a>         
        
        <a class="btn btn-success" href="{{route('user.delete',$singleuser->id)}}">Delete</a>
        <!-- <a class='btn btn-Danger' href="">View</a> -->
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>



@endsection