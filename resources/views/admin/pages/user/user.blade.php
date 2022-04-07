@extends('welcome')
@section('content')
<h1>Customer</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<a href="{{route('user.form')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New user </a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">user_image</th>
      <th scope="col">name</th>
      <!-- <th scope="col">user_last_name</th> -->
      <th scope="col">user_address</th>
      <th scope="col">user_country</th>
      <th scope="col">user_city</th>
      <th scope="col">user_phone</th>
      <th scope="col">email</th>
      <th scope="col">roll</th>
      <th scope="col">action</th>
 
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