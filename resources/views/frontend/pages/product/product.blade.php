@extends('frontend.master')

@section('product')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4" style="margin-top: 100px;">
{{-- 
        @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif --}}
        @if(session('message'))
        <div style="background-color: #fef08a; margin-top: 60px;">
            <p style="text-align: center; padding: 30px; font-size: 30px; font-weight: bold;">{!! session('message') !!}</p>
        </div>
        @endif
        <div class="product-item">
            <a href="">
                <img src="{{url('/uploads/'.$product->pet_product_picture)}}" alt="DFASF" style="height: 300px;">
            </a>

        </div>
    </div>

    <div class="col-md-4" style="margin-top: 100px;">
        <div class="down-content">
            <a href="#"><h4>{{$product->pet_product_name}}</h4></a>
            <p>{{$product->pet_product_details}} </p>
            <h6>{{$product->pet_product_price}} .BDT </h6>
            <!-- <p>{{$product->pet_product_details}}</p> -->

            <span>Reviews (32)</span>

            <a href="{{route('cart.add',$product->id)}}" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection