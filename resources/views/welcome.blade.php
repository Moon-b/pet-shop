<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 16:29:15 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Pet Shop BD</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{url('backend/assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{url('backend/assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{url('backend/assets/fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{url('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/plugins/material/material.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/css/material_style.css')}}">
    <!-- inbox style -->
    <link href="{{url('backend/assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="{{url('backend/assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="{{url('backend/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        
	@include('admin.fixed.header')
       
        <div class="page-container">
           
            @include('admin.fixed.sidebar')
            
            <div class="page-content-wrapper">
			<div class="page-content mt-5">
                <!-- main body  -->
				<!-- <h1>Hello</h1> -->
			@yield('content')
            </div>
            
        </div>
</div>
        
    </div>
    <!-- start js include path -->
    <script src="{{url('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/popper/popper.js')}}"></script>
    <script src="{{url('backend/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{url('backend/assets/plugins/feather/feather.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{url('backend/assets/js/pages/sparkline/sparkline-data.js')}}"></script>
    <!-- Common js-->
    <script src="{{url('backend/assets/js/app.js')}}"></script>
    <script src="{{url('backend/assets/js/layout.js')}}"></script>
    <script src="{{url('backend/assets/js/theme-color.js')}}"></script>
    <!-- material -->
    <script src="{{url('backend/assets/plugins/material/material.min.js')}}"></script>
    <!--apex chart-->
    <script src="{{url('backend/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('backend/assets/js/pages/chart/apex/home-data.js')}}"></script>
    <!-- summernote -->
    <script src="{{url('backend/assets/plugins/summernote/summernote.js')}}"></script>
    <script src="{{url('backend/assets/js/pages/summernote/summernote-data.js')}}"></script>
    <!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 16:30:20 GMT -->

</html>
