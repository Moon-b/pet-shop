@extends('welcome')
@section('content')
<h1>Dashboard</h1>

  <!-- url({{url('/image/mun.jpg')}})" -->
  <div class="row">
        <div class="col-md-3">
            <div class="card" >
                <h5 class="card-header" style="background-color: #FFC300  ">Total Order</h5>
                <div class="card-body" style="background-color:#E67E22  ">

                    <h2>{{$total_order}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5 class="card-header"style="background-color: #AED6F1 ">Sale (Today)</h5>
                <div class="card-body">

                    <h2>10</h2>

                </div>

            </div>
        </div>
        
        <div class="col-md-3" >
            <h5 class="card-header" style="background-color:   #D4AC0D  ">Total User</h5>
            <div class="card-body" style="background-color:#F6DDCC  ">

            {{-- <div class="card"  style="background-color: #DAF7A6">
                <h5 class="card-header">Total User</h5> --}}
                <div class="card-body">

                    <h2>{{$total_user}}</h2>
</div>
</div>
                </div>
                <div class="col-md-3" >
                    <h5 class="card-header" style="background-color:  #148F77   ">Total Pet Product</h5>
                    <div class="card-body" style="background-color:#95A5A6 ">
        
            {{-- <div class="card"  style="background-color: sky blue">
                <h5 class="card-header">Total Pet Product</h5> --}}
                <div class="card-body">

                    <h2>{{$total_product}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color:#EDBB99  ">
                <h5 class="card-header">Total Posts</h5>
                <div class="card-body">

                    <h2>{{$total_posts}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color:#ABEBC6">
                <h5 class="card-header">Today Order</h5>
                <div class="card-body">

                    <h2>{{$today_order}}</h2>

                </div>
            </div>
        </div>

        <!-- <div class="col-md-3">
            <div class="card"  style="background-color: blue">
                <h5 class="card-header">Total Product</h5>
                <div class="card-body">

                    <h2>10</h2>

                </div>
            </div>
        </div> -->
    </div>
    <div class="text-center">
  <img src="{{url('image/mun.jpg')}}" class="rounded" alt="Hello Munmun">

</div>

@endsection
