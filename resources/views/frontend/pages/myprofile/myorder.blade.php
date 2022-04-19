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
      <th scope="col">'action'</th>

     
 
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
         @if($data->status == "pending")
         <td><a href="{{route('user.order.cancel',$data->id)}}" class="btn btn-success">Cancel</a></td>
         @endif
      
         @if($data->status == "approved")
          <td><a href="{{route('invoice',$data->id)}}" class="btn btn-success">My Order Details</a></td>
      </tr>
      @endif
      @if($data->status == "pending")
           <td><a href="{{route('invoice',$data->id)}}" class="btn btn-success">My Order Details</a></br></td>
      </tr>
      @endif
      @endforeach
     
  </tbody>
</table>
  </div>
</div>




@endsection