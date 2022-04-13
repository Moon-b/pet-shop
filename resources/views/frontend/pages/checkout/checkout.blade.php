@extends('frontend.master')

@section('product')

    <div class="row" >
        <div class="col-md-1"></div>
        <div class="col-md-4 order-md-2 mb-4" style="margin-top: 100px;">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{session()->has('cart')?count(session()->get('cart')):0}}</span>
            </h4>
            <ul class="list-group mb-3">
               
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Total</th>

                        <!-- <th scope="col">Handle</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('cart'))
                    @foreach(session()->get('cart') as $key=>$cartData)
                        <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$cartData['name']}}</td>
                        <td>{{$cartData['price']}}</td>
                        <td>{{$cartData['subtotal']}}</td>
                        </tr>
                        
                    </tbody>
                    </table>
                        <!-- <tr>
                            <td data-th="Product">
                                <div class="row">
                                    {{--                            <div class="col-sm-2 hidden-xs">--}}
                                    {{--                                <img src="http://placehold.it/100x100" alt="..." class="img-responsive" /></div>--}}
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{{$cartData['name']}}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{$cartData['price']}} .BDT</td>

                            <td data-th="Subtotal" class="text-center">{{$cartData['subtotal']}} .BDT</td>
                            <td class="actions" data-th="">

                                <a href="{{route('cart.delete',$key)}}"  style="color: white" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>Delete Cart</a>
                            </td>
                        </tr> -->
                    @endforeach

                @else
                    <tr>
                        <td>
                            <h1>Your Cart is Empty.</h1>
                        </td>
                    </tr>


                @endif
            </ul>


        </div>
        <div class="col-md-6 order-md-1" style="margin-top: 100px;">
            <h4 class="mb-3">Billing address</h4>
            <form action="{{route('order.place')}}" method="POST" class="needs-validation">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input name="first_name" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input name="last_name" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>



                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address">Contact</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping contact.
                    </div>
                </div>




                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Cash On Delivery (COD)</label>
                    </div>

                </div>


                <hr class="mb-4">
                <td> <button type="submit" class="btn btn-info">Place Order </button>
                <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button> -->
            </form>
        </div>
    </div>
@endsection