@extends('frontend.master')

@section('product')

<div class="col-md-2"></div>
 <!-- Order Details -->
 <div class="col-md-8 order-details">
    <div class="section-title text-center">
        <h3 class="title">Your Cart</h3>
    </div>
    @if (session()->has('cart'))
    <div class="order-summary">
        <div class="order-col">
            <div><strong>PRODUCT</strong></div>
            <div><strong>PRICE</strong></div>
            <div><strong>Quantity</strong></div>
            <div><strong>Sub Total</strong></div>
        </div>
        <div class="order-products">
            @if (session()->has('cart'))
            @foreach($carts as $cartData)
            <div class="order-col">
                <div>{{$cartData['name']}}</div>
                <div>{{$cartData['price']}}</div>
                <div>{{$cartData['quantity']}}</div>
                <div>{{$cartData['quantity']*$cartData['price']}} Taka</div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="order-col">
            <div>Shiping</div>
            <div><strong>FREE</strong></div>
        </div>
        <div class="order-col"><a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a></div>
        <div class="order-col">
            <div><strong>TOTAL</strong></div>
           
            <div><strong class="order-total">{{array_sum(array_column($carts,'subtotal'))}} Taka</strong></div>
        </div>
    </div>

    <a href="#" class="primary-btn order-submit">Place order</a>
    @else
    <div class="order-summary">
        <h3>Your Cart is empty</h3>
    </div>
    @endif

</div>
<!-- /Order Details -->
<div class="col-md-2"></div>
@endsection