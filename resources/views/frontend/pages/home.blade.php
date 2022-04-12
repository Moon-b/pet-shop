@extends('frontend.master')



@section('product')
   @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
 
@foreach($product as $data)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{route('product.view',$data->id)}}">
                             <!-- <img src="{{url('/uploads/'.$data->pet_product_image)}}" alt="Product Image" style="height: 300px;"> --> 
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

