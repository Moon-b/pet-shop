
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Pet Shop BD</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/owl.css')}}">

    <!-- new  -->

    <link rel="stylesheet" href="{{url('assets/css/preloader.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/backToTop.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/huicalendar.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/fontAwesome5Pro.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/default.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    @include('frontend.partials.header')
    
    {{-- @include('frontend.partials.banner') --}}

   
     @yield('slider') 

    <div class="latest-products">
      <div class="container">
        <div class="row" >
          <div class="col-md-12">
            <div class="section-heading">
              
            </div>
            
          </div>
         
          @yield('product')
    
        
       
          
        </div>
      </div>
    </div>

   


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Pet</em> Products</h4>
                  <p>It will make easy lifestyle for pets</p>
                </div>
                <div class="col-md-4">
                  <a href="{{route('home')}}" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @include('frontend.partials.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>
    <script src="{{url('frontend/assets/js/owl.js')}}"></script>
    <script src="{{url('frontend/assets/js/slick.js')}}"></script>
    <script src="{{url('frontend/assets/js/isotope.js')}}"></script>
    <script src="{{url('frontend/assets/js/accordions.js')}}"></script>

    <!-- new  -->

    <script src="{{url('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
   <script src="{{url('assets/js/vendor/waypoints.min.js')}}"></script>
   <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{url('assets/js/meanmenu.js')}}"></script>
   <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
   <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
   <script src="{{url('assets/js/magnific-popup.min.js')}}"></script>
   <script src="{{url('assets/js/huicalendar.js')}}"></script>
   <script src="{{url('assets/js/parallax.min.js')}}"></script>
   <script src="{{url('assets/js/backToTop.js')}}"></script>
   <script src="{{url('assets/js/nice-select.min.js')}}"></script>
   <script src="{{url('assets/js/counterup.min.js')}}"></script>
   <script src="{{url('assets/js/ajax-form.js')}}"></script>
   <script src="{{url('assets/js/wow.min.js')}}"></script>
   <script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
   <script src="{{url('assets/js/main.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    <script>
      (function (window, document) {
          var loader = function () {
              var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
              script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
              tag.parentNode.insertBefore(script, tag);
          };
  
          window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
      })(window, document);
  </script>


  </body>

</html>
