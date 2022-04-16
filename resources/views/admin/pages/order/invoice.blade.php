@extends('welcome')

@section('content')
    <div class="container">
        <div class="card"  id="invoice">
            <div class="card-header">
                Invoice
                <strong>{{$order->created_at}}</strong>
                <span class="float-right"> <strong>Status:</strong> {{$order->status}}</span>

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
                            <!-- <th>Item</th> -->
                            <th class="right"> Name</th>
                            <th class="center">Unit Price</th>
                            <th class="center">Quantity</th>
                            <th class="center">SubTotal</th>
                            <th class="right">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order->details as $data)
                        <!-- dd($order->all()); -->
                        <tr>
                            <td class="center">{{$data->id}}</td>
                            <td class="left strong">{{$data->product->name}}</td>
                            <td class="right">{{$data->unit_price}} .BDT</td>
                            <td class="center">{{$data->quantity}}</td>
                            <td class="right">{{$data->subtotal}} .BDT</td>
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

                            <tr>
                                <td class="left">
                                    <strong>VAT (10%)</strong>
                                </td>
                                <td class="right">{{$order->total*10/100}} .BDT</td>
                            </tr>
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

    <div class="col-md-4">

        <button class="btn btn-success" onclick="printInvoice('invoice')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z"/></svg>Print</button>
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