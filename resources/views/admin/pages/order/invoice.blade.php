@extends('welcome')

@section('content')
    <div class="container">
        <div class="card"  id="invoice">
            <div class="card-header">
                Invoice
                <strong>{{$order->created_at}}</strong>
                <span class="float-right"> <strong> Payment Status:</strong> {{$order->payment_status}}</span></br>
                <span class="float-right"> <strong>Order Status:</strong> {{$order->order_status}}</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Online Pet Shop BD</strong>
                        </div>
                        <div>House #20</div>
                        <div>Road #7</div>
                        <div>Email: onlinepetshopBD.com</div>
                        <div>Phone: 01989798908</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>{{$order->receiver_first_name}} {{$order->receiver_last_name}}</strong>
                        </div>
                        <div>{{$order->receiver_address}}</div>
                        <div>Email: {{$order->receiver_email}}</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="center">#</th>
                            <th class="left"> Order ID</th>
                            <th class="left"> Name</th>
                            <th class="left">Unit Price</th>
                            <th class="left">Quantity</th>
                            <th class="left">SubTotal</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order->details as $data)
                        <tr>
                            <td class="center">{{$data->id}}</td>
                            <td class="left">{{$data->order_id}}</td>
                            <td class="left strong">{{$data->product->pet_product_name}}</td>
                            <td class="left">{{$data->unit_price}} .BDT</td>
                            <td class="left">{{$data->quantity}}</td>
                            <td class="left">{{$data->subtotal}} .BDT</td>
                        </tr>
                        @endforeach
           

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="right">{{$order->total}} .BDT</td>
                            </tr>
{{-- 
                            <tr>
                                <td class="left">
                                    <strong>VAT (10%)</strong>
                                </td>
                                <td class="right">{{$order->total*10/100}} .BDT</td>
                            </tr> --}}
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>{{$order->total+($order->total*10/100)}} .BDT</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div style="display: flex; justify-content:end; padding-right: 60px; margin-bottom: 60px;">

        <button class="btn btn-success" onclick="printInvoice('invoice')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6 19H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm0-2v-1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1h2V9H4v8h2zM8 4v3h8V4H8zm0 13v3h8v-3H8zm-3-7h3v2H5v-2z"/></svg></button>
    </div>


    <script type="text/javascript">
        function printInvoice(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

@endsection