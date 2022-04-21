@extends('frontend.master')

@section('slider')
    @include('frontend.partials.banner')
@endsection


@section('product')
    @if(session('message'))
    <div style="background-color: #fef08a; margin-top: 60px;">
        <p style="text-align: center; padding: 30px; font-size: 30px; font-weight: bold;">{!! session('message') !!}</p>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
    </div>
    @endif
 



<h1>Latest Pet Product</h2>
    @foreach($product as $data)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{route('product.view',$data->id)}}">
                           
                            <img width="150px" src="{{url('/uploads/',$data->pet_product_picture)}}" alt="product image">
                        </a>
                        <div class="down-content">
                            <a href="#"><h4>{{$data->pet_product_name}}</h4></a>
                            <h6>{{$data->pet_product_price}} .BDT</h6>
                            <p>{{$data->pet_product_details}}</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (32)</span>
                            
                        </div>
                    </div>
                </div>
                @endforeach

@endsection 

