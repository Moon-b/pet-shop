@extends('welcome')
@section('content')
<h1>Dashboard</h1>

  <!-- url({{url('/image/mun.jpg')}})" -->
  <div class="row">
        <div class="col-md-3">
            <div class="card" >
                <h5 class="card-header" style="background-color: green">Total Order</h5>
                <div class="card-body" style="background-color: greenyellow">

                    <h2>{{$total_order}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5 class="card-header">Sale (Today)</h5>
                <div class="card-body">

                    <h2>10</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color: blue">
                <h5 class="card-header">Total User</h5>
                <div class="card-body">

                    <h2>{{$total_user}}</h2>
</div>
</div>
                </div>
                <div class="col-md-3" >
            <div class="card"  style="background-color: sky blue">
                <h5 class="card-header">Total Pet Product</h5>
                <div class="card-body">

                    <h2>{{$total_product}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color: green">
                <h5 class="card-header">Total Posts</h5>
                <div class="card-body">

                    <h2>{{$total_posts}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color: green">
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
