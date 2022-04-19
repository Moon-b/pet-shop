@extends('welcome')
@section('content')
<h1>Order</h1>

<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<a href="{{route('OrderDetails')}}" class="btn btn-success "  style="float: right;font-size:18px; "> Order Details</a>
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
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($order as $singleorder)
      <tr>
        <td>{{$singleorder->id}}</td>
         <td>{{$singleorder->receiver_first_name}}</td>
         <td>{{$singleorder->receiver_last_name}}</td>
         <td>{{$singleorder->receiver_email}}</td>
         <td>{{$singleorder->total}}</td>
         <td>{{$singleorder->status}}</td>
         <td>{{$singleorder->contact}}</td>
          
        <td>
          
        {{-- <!-- <span class="btn btn-success">{{$singleorder->status}}</span> --> --}}
        @if($singleorder->status == 'pending')
          <a class='btn btn-success' href="{{route('Order.approve',$singleorder->id)}}">Approve</a>
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