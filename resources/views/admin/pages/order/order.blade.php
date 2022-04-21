@extends('welcome')
@section('content')
<h1>Order Lists</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
{{-- <a href="{{route('OrderDetails')}}" class="btn btn-success "  style="float: right;font-size:18px; "> Order Details</a> --}}
<a href="{{route('OrderDetails')}}" class="btn btn-success" style="float: right; width: 28%"><span style="font-size: 15px;">Order Details</span></a>
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
    
           
      <th scope="col">ID</th>
      <th scope="col"> Receiver First Name</th>
      
      <th scope="col">Receiver Last Name</th>
      <th scope="col"> Receiver Email</th>
      <th scope="col">Transaction ID
      <th scope="col"> Total</th>
      <th scope="col"> Payment Status</th>
      <th scope="col"> Order Status</th>
      <th scope="col"> Contact</th>
      <th scope="col"> Action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($order as $singleorder)
      <tr>
        <td>{{$singleorder->id}}</td>
         <td>{{$singleorder->receiver_first_name}}</td>
         <td>{{$singleorder->receiver_last_name}}</td>
         <td>{{$singleorder->receiver_email}}</td>
         <td>{{$singleorder->tran_id}}</td>
         <td>{{$singleorder->total}}.BDT</td>
         <td>{{$singleorder->payment_status}}</td>
         <td>{{$singleorder->order_status}}</td>
         {{-- <td>{{$singleorder->status}}</td> --}}
         <td>{{$singleorder->contact}}</td>
          
        <td>
          
        {{-- <!-- <span class="btn btn-success">{{$singleorder->status}}</span> --> --}}
        @if($singleorder->order_status == 'pending')
          <a class='btn btn-success' href="{{route('Order.approve',$singleorder->id)}}">Confirmation</a>
    

          {{-- @if($singleorder->status == 'pending' && $singleorder->tran_id==null) --}}
           <a class='btn btn-success' href="{{route('admin.order.cancel',$singleorder->id)}}">Cancel</a>
      @endif
      @if($singleorder->order_status == 'approved')
          {{-- <a class='btn btn-success' href="{{route('Order.approve',$singleorder->id)}}">Confirmation</a> --}}
    

          {{-- @if($singleorder->status == 'pending' && $singleorder->tran_id==null) --}}
           <a class='btn btn-success' href="{{route('admin.order.cancel',$singleorder->id)}}">Cancel</a>
      @endif


        </td> 
        
       
       
        {{-- <td>
<form action="{{route('Order.approve',$singleorder->id)}}" method="POST">
  {{-- @method('PUT') --}}
  {{-- @csrf
  <select name="status">
      <option class="btn btn-primary" value="Confirm">Confirm</option>
      <option class="btn btn-primary" value="Processing">Processing</option>
      <option class="btn btn-primary" value="Delivery">Delivery</option>
      <option class="btn btn-primary" value="Cancel">Cancel</option>
      <option class="btn btn-primary" value="Received">Received</option>
  </select>
  <button class="btn btn-success"><i class="fa-solid fa-check-double"></i></button>
</form>
</td> --}} 


          <td>{{$singleorder->action}} 
          
        
        
        {{-- <a class='btn btn-success' href="">Delete</a> --}}
        <a class='btn btn-danger' href="{{route('order.view',$singleorder->id)}}">View</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>




@endsection