
@extends('frontend.master')
@section('product')
<!DOCTYPE html>
<html>
  
<head>
    <title>Bootstrap Shopping Cart</title>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1" />
  
    <!-- CSS only -->
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  
    <!-- JavaScript Bundle with Popper -->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
  
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
  
    <!--CSS Code-->
    <style>
        .container {
            margin-top: 30px;
            color: green;
        }
  
        span {
            color: green;
        }
    </style>
</head>
  
<!--Body tag-->
<body>
    <div class="container" align="center">
        <h2>GeeksforGeeks</h2>
        <h3>Shopping-cart</h3>
        <p>
            <button type="button" 
                class="btn btn-default btn-sm">
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>
            </button>
        </p>
    </div>
</body>
  
</html>


@endsection