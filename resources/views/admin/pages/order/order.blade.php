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
      <th scope="col">ordered item name</th>
      
      <th scope="col">total product price</th>
      <th scope="col">order date</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $singleorder)
      <tr>
        <td>{{$singleorder->id}}</td>
         <td>{{$singleorder->ordered_item_name}}</td>
        
        <td>{{$singleorder->total_product_price}}</td>

        @php
          $date = date('Y-m-d', strtotime($singleorder->created_at));
        @endphp
        <td>{{$date}}</td>
          <td>{{$singleorder->action}}
        <a  class='btn btn-primary' href="">Edit</a>  
        
        
        <a class='btn btn-success' href="">Delete</a>
        <a class='btn btn-danger' href="">View</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>




@endsection