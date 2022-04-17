@extends('frontend.master')
@section('product')
<div class="row">
    @foreach($product as $data)
    <div class="col-md-3">
        <div class="card">
            <img width="100px" src="{{url('/uploads/',$data->pet_product_picture)}}" alt="{{$data->name}}">
            <h5>{{$data->pet_product_name}}</h5>
            <h5>{{$data->pet_product_price}}</h5>
        </div>
    </div>
    @endforeach
</div>
@endsection 