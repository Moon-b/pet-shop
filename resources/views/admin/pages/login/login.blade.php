
<!doctype html>
<html lang="en">
<head><script nonce="09971686-5ddf-4495-baf7-0d4513528736">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-02/fonts,_icomoon,_style.css+css,_owl.carousel.min.css+css,_bootstrap.min.css+css,_style.css.pagespeed.cc.12uEfYIPIx.css" />


<title>Login</title>
</head>
<body>
<div class="d-lg-flex half">
<div class="bg order-1 order-md-2" style="background-image:url({{url('/image/mun.jpg')}});background-size: cover; background-repeat:no-repeat;"></div>
<div class="contents order-2 order-md-1">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-7">
<h3>Login to <strong>PET SHOP BD</strong></h3>

<form action="{{route('admin.dologin')}}" method="post">
    @csrf
<div class="form-group first">
<label for="username">Email</label>
<input required name="email" type="text" class="form-control" placeholder="your-email@gmail.com" id="email">
</div>
<div class="form-group last mb-3">
<label for="password">Password</label>
<input required name="password" type="password" class="form-control" placeholder="Your Password" id="password">
</div>
<div class="d-flex mb-5 align-items-center">
<label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
<input type="checkbox" checked />
<div class="control__indicator"></div>
</label>
<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
</div>
@if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p>
                                        <span class="btn btn-danger">{{$error}}</span></p>
                                @endforeach
                            @endif

                            @if(session()->has('message'))
                                    <p>
                                        <span class="btn btn-danger">{{session()->get('message')}}</span></p>
                                @endif
<input type="submit" value="Log In" class="btn btn-block btn-primary">
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-02/js/jquery-3.3.1.min.js"></script>
<script src="https://preview.colorlib.com/theme/bootstrap/login-form-02/js/popper.min.js+bootstrap.min.js+main.js.pagespeed.jc.uPp5-NCLt3.js"></script><script>eval(mod_pagespeed_U0drreBoo3);</script>
<script>eval(mod_pagespeed_ECLkrTsSNR);</script>
<script>eval(mod_pagespeed_muSzTF93jG);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f5781a498c14739","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>