@extends('frontend.master')
@section('product')
<div class="row">
    @foreach($product as $data)
    <div class="col-md-3">
        <div class="card">
        <a href="{{route('product.view',$data->id)}}">
                             <!-- <img src="{{url('/uploads/'.$data->pet_product_image)}}" alt="Product Image" style="height: 300px;"> --> 
                            <img width="150px" src="{{url('/uploads/',$data->pet_product_picture)}}" alt="product image">
                        </a>
            <!-- <img width="100px" src="{{url('/uploads/',$data->pet_product_picture)}}" alt="{{$data->name}}"> -->
            <h5>{{$data->pet_product_name}}</h5>
            <h5>{{$data->pet_product_price}}</h5>
        </div>
    </div>
    @endforeach
</div>
@endsection 