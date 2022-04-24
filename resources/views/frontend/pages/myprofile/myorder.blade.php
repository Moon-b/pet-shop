@extends('frontend.master')
@section('product')


<div class="row" style="margin-top: 75px;">
  <h1>My Order</h1>
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
{{-- <!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif --}}

        @if(session('message'))
        <div style="background-color: #fef08a; margin-top: 60px;">
            <p style="text-align: center; padding: 30px; font-size: 30px; font-weight: bold;">{!! session('message') !!}</p>
        </div>
        @endif
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
    
           
      <th scope="col">ID</th>
      <th scope="col"> Receiver First Name</th>
      
      <th scope="col">Receiver Last Name</th>
      <th scope="col"> Receiver Email</th>
      <th scope="col">Tansaction ID</th>
      <th scope="col"> Total</th>
      <th scope="col"> Payment Status</th>
      <th scope="col"> Order Status</th>
      <th scope="col"> Contact</th>
      
      <th scope="col"> Action </th>

     
 
    </tr>
  </thead>
  <tbody>
    @foreach($order as $data)
      <tr>
        <td>{{$data->id}}</td>
         <td>{{$data->receiver_first_name}}</td>
         <td>{{$data->receiver_last_name}}</td>
         <td>{{$data->receiver_email}}</td>
         <td>{{$data->tran_id}}</td>
         <td>{{$data->total}}.BDT</td>
         <td>{{$data->payment_status}}</td>
         <td>{{$data->order_status}}</td>
         <td>{{$data->contact}}</td>
         @if($data->order_status == "pending" && $data->tran_id!=null)
         <td><a href="{{route('user.order.cancel',$data->id)}}" class="btn btn-success">Cancel</a></td>
         @endif
      
         {{-- @if($data->status == "approved")
          <td><a href="{{route('invoice',$data->id)}}" class="btn btn-success">My Order Details</a></td>
      </tr>
      @endif --}}
      {{-- @if($data->status == "pending" && $data->status=="success" && $data->status=="approved") --}}
           <td><a href="{{route('invoice',$data->id)}}" class="btn btn-success">My Order Details</a></br></td>
      </tr>
      {{-- @endif --}}
      {{-- @if($data->tran_id!=null)
      <td><a href="{{route('user.order.cancel',$data->id)}}" class="btn btn-success">Cancel</a></td>
      @endif --}}
 </tr>


      @endforeach
     
  </tbody>
</table>
  </div>
</div>




@endsection