@extends('frontend.master')
@section('product')

@foreach($product as $data)
<div class="col-md-4">
            <div class="product-item">
              <img width="150px" src="{{url('/uploads/',$data->pet_product_picture)}}" alt="product image">
              <div class="down-content">
                <a href="#"><h4>{{$data->pet_product_name}}</h4></a>
                <h6>{{$data->pet_product_price}}</h6>
                <p>{{$data->pet_product_details}}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
</div>
@endforeach




@endsection