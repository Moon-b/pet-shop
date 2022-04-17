@extends('frontend.master')
@section('product')
<h1>Order</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
    
           
      <th scope="col">id</th>
      <th scope="col"> 'receiver_first_name'</th>
      
      <th scope="col">'receiver_last_name'</th>
      <th scope="col"> 'receiver_email'</th>
      <th scope="col"> 'total'</th>
      <th scope="col"> 'status'</th>
      <th scope="col">'contact'</th>
     
 
    </tr>
  </thead>
  <tbody>
    @foreach($order as $data)
      <tr>
        <td>{{$data->id}}</td>
         <td>{{$data->receiver_first_name}}</td>
         <td>{{$data->receiver_last_name}}</td>
         <td>{{$data->receiver_email}}</td>
         <td>{{$data->total}}</td>
         <td>{{$data->status}}</td>
         <td>{{$data->contact}}</td>
      </tr>
      @endforeach
      <a href="" class="btn btn-success">My Order Details</a>
  </tbody>
</table>
  </div>
</div>




@endsection