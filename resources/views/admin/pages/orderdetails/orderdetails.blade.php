@extends('welcome')
@section('content')
<h1>Order Details</h1>


<!-- <div class="row" style="margin-top: 75px;"> -->

  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">shipping_fee</th>
      
      <th scope="col">single_product_price</th>
      <th scope="col">quantity</th>
      <th scope="col">subtotal</th>
      <th scope="col">total</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($orderdetails as $singleorderdetail)
      <tr>
        <td>{{$singleorderdetail->id}}</td>
         <td>{{$singleorderdetail->shipping_fee}}</td>
        
        <td>{{$singleorderdetail->single_product_price}}</td>
        <td>{{$singleorderdetail->quantity}}</td>
        <td>{{$singleorderdetail->subtotal}}</td>
        <td>{{$singleorderdetail->total}}</td>
          <td>{{$singleorderdetail->action}}
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