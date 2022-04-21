@extends('frontend.master')

@section('product')
{{-- @if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif --}}

    @if(session('message'))
    <div style="background-color: #fef08a; margin-top: 60px;">
        <p style="text-align: center; padding: 30px; font-size: 30px; font-weight: bold;">{!! session('message') !!}</p>
    </div>
    @endif

    <style type="text/css">
        .table>tbody>tr>td,
        .table>tfoot>tr>td {
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width: 20%;
                display: inline !important;
            }
            .actions .btn {
                width: 36%;
                margin: 1.5em 0;
            }
            .actions .btn-info {
                float: left;
            }
            .actions .btn-danger {
                float: right;
            }
            table#cart thead {
                display: none;
            }
            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width: 320px;
            }
            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }
            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }
            table#cart tfoot td {
                display: block;
            }
            table#cart tfoot td .btn {
                display: block;
            }
        }
    </style>

    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top: 100px;">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @if(session()->has('cart') && session('cart') != null)
                @foreach(session()->get('cart') as $key=>$cartData)

                <tr>
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
                    <td data-th="Quantity">
                    <form action="{{route('cart.update',$key)}}" method="post">
                            @csrf
                        <input min="1" name="quantity" type="number" class="form-control text-center" value="{{$cartData['quantity']}}">
                        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        </form>
                    </td>
                    <td data-th="Subtotal" class="text-center">{{$cartData['subtotal']}} .BDT</td>
                    <td class="actions" data-th="">
                  
                        <!-- <button class="btn btn-info btn-sm"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10 0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228l-.997-1.795zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772l.997 1.795z"/></svg></i></button> -->
                        <a href="{{route('cart.delete',$key)}}"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/></i></svg></a>
                        <!-- <button class="btn btn-danger btn-sm"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/></i></svg></button> -->
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td>
                        <h1>Your Cart is Empty.</h1>
                        </td>
                    </tr>


                @endif


                </tbody>
                <tfoot>
                <tr>
                    <td><a href="{{route('home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    
                    <td class="hidden-xs text-center"><strong> Total </strong>
                    @php
                        $carts = session('cart') ?? [];
                    @endphp
                    {{array_sum(array_column($carts,'subtotal'))}} .BDT
                </td>
                <td><a href="{{route('cart.clear')}}" class="btn btn-danger"> Clear Cart</a></td>
                    <td colspan="" class="hidden-xs"></td>
                    {{-- @if(auth()->user()) --}}
                    <td><a href="{{route('checkout')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    {{-- @endif --}}
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection