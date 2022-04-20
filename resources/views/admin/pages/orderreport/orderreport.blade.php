@extends('welcome')
@section('content')
<h1>Order</h1>

<div class="row" style="margin-top: 75px;">

  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
    
           
      <th scope="col">ID</th>
      <th scope="col"> 'Receiver Fast Name'</th>
      
      <th scope="col">'Receiver Last_Name'</th>
      <th scope="col"> 'Receiver Email'</th>
      <th scope="col"> 'Total'</th>
      <th scope="col"> 'Status'</th>
      <th scope="col">'Contact'</th>
      <th scope="col">action</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach($order_report as $singleorder)
      <tr>
        <td>{{$singleorder->id}}</td>
         <td>{{$singleorder->receiver_first_name}}</td>
         <td>{{$singleorder->receiver_last_name}}</td>
         <td>{{$singleorder->receiver_email}}</td>
         <td>{{$singleorder->total}}</td>
         <td>{{$singleorder->status}}</td>
         <td>{{$singleorder->contact}}</td>
         <td>{{$singleorder->action}} 
          
        
        
            {{-- <a class='btn btn-success' href="">Delete</a> --}}
            <a class='btn btn-danger' href="{{route('order.view',$singleorder->id)}}">View</a>
            </td>
          </tr>
          
        
     
        


          
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>




@endsection