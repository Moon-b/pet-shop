@extends('welcome')
@section('content')
<h1>Order</h1>

<div class="row" style="margin-top: 75px;">

  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
    
           
      <th scope="col">id</th>
      <th scope="col"> order id</th>
      
      <th scope="col">pet product id</th>
      <th scope="col"> quantity</th>
      <th scope="col"> unit price</th>
      <th scope="col"> subtotal</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach( $orderdetails as $singleorderdetail)
   
      <tr>
        <td>{{$singleorderdetail->id}}</td>
         <td>{{$singleorderdetail->order_id}}</td>
         <td>{{$singleorderdetail->pet_product_id}}</td>
         <td>{{$singleorderdetail->quantity}}</td>
        <td>{{$singleorderdetail->unit_price}}</td>
        <td>{{$singleorderdetail->subtotal}}</td>

        <!-- @php
          $date = date('Y-m-d', strtotime($singleorderdetail->created_at));
        @endphp -->
        <!-- <td>{{$date}}</td> -->
          <td>{{$singleorderdetail->action}}
          
        
        
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