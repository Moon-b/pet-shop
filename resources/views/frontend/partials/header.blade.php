<header>
      <div class="header-area bg-white sticky-header">
         <div class="container-fluid">
            <div class="header-main-wrapper">
               <div class="row align-items-center">
                  <div class="col-xl-9 col-lg-7 col-md-5 col-sm-9 col-9">
                     <div class="header-left d-flex align-items-center">
                        <div class="header-logo">
                           <a  href="index.html"><img style="height: 60px; " src="{{url('image/p.jpg')}}" alt="Pet Shop BD"></a>
                        </div>
                        

                        <div class="main-menu d-none d-xl-block">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class=""><a href="{{route('home')}}">Home</a></li>
                                 <li class=""><a href="{{route('home')}}">Pet Products</a></li>
                                 {{-- <li class=""><a href="">Pets</a></li> --}}
                                 <!-- <li class=""><a href="{{url('cart')}}">Add to cart</a></li> -->
                                 @if(auth()->user())
                                 <li class="menu-item-has-children"><a href="{{route('Post')}}">Posts</a>
                                     <ul class="sub-menu">
                                         <li><a href="{{route('Post.create')}}">Create Post</a></li>
                                         
                                     </ul>
                                 </li>
                                </li>
                                @endif
                               
                        <!-- <li class="nav-item">
                        
                        <a style="color:white" href="{{route('cart.view')}}">Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</a>
                    </li> -->
                    
                                 
                                 @if(auth()->user())
                                 <li class=""><a href="{{route('douserlogout')}}">Logout</a>
                                 <li class=""><a href="#">{{auth()->user()->name}}</a>
                                 @else
                                 <li class=""><a href="{{route('signup')}}">Signup</a>
                                 </li>
                                 <li class=""><a href="{{route('userlogin')}}">Signin</a>
                                 </li>
                                 @endif
                             </ul>

                           </nav>
                        </div>
                     </div>
                  </div>
                  
                  
                  <div class="col-xl-3 col-lg-5 col-md-7 col-sm-3 col-3">
                     <div class="header-right d-flex align-items-center justify-content-end">
                     <div class="cart-wrapper mr-30">
                           <a href="{{route('cart.view')}}" class="cart-toggle-btn">
                              <div class="header__cart-icon p-relative">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="19.988" height="19.988"
                                    viewBox="0 0 19.988 19.988">
                                    <g id="trolley-cart" transform="translate(-1 -1)">
                                       <path id="Path_36" data-name="Path 36"
                                          d="M1.666,2.333H3.8L6.159,12.344a1.993,1.993,0,0,0,.171,3.98H17.656a.666.666,0,1,0,0-1.333H6.33a.666.666,0,0,1,0-1.333H17.578a1.992,1.992,0,0,0,1.945-1.541l1.412-6a2,2,0,0,0-1.946-2.456H5.486L4.98,1.514A.666.666,0,0,0,4.331,1H1.666a.666.666,0,0,0,0,1.333ZM18.989,5a.677.677,0,0,1,.649.819l-1.412,6a.662.662,0,0,1-.648.514H7.524L5.8,5Z"
                                          transform="translate(0 0)" fill="#141517" />
                                       <path id="Path_37" data-name="Path 37"
                                          d="M20,27a2,2,0,1,0,2-2A2,2,0,0,0,20,27Zm2.665,0A.666.666,0,1,1,22,26.333.666.666,0,0,1,22.665,27Z"
                                          transform="translate(-6.341 -8.01)" fill="#141517" />
                                       <path id="Path_38" data-name="Path 38"
                                          d="M9,27a2,2,0,1,0,2-2A2,2,0,0,0,9,27Zm2.665,0A.666.666,0,1,1,11,26.333.666.666,0,0,1,11.665,27Z"
                                          transform="translate(-2.67 -8.01)" fill="#141517" />
                                    </g>
                                 </svg>
                                 <span class="item-number">{{session()->has('cart') ? count(session()->get('cart')):0}}</span>
                              </div>
                           </a>
                        </div>
                        

                        <!-- <div class="user-btn-inner p-relative d-none d-md-block">
                           <div class="user-btn-wrapper">
                              <div class="user-btn-content ">
                                 <a class="user-btn-sign-in" href="javascript:void(0)">Sign In</a>
                              </div>
                           </div>
                        </div> -->
                        <div class="aa-search-box">
              
                
                <form action="{{route('search')}}" method="GET">
                <button type="submit"><span class="fa fa-search"></span></button>
                  <input type="text" name="search" placeholder="Search here  product ">
                </form>
              </div>
              @if (auth()->user())
                  
                        
                        <li class=""><a href="{{route('myprofile')}}"><b>MyProfile</b></a>
              @endif

                                 </li>
                        <!-- <div class="d-none d-md-block">
                           <a class="user-btn-sign-up edu-btn" href="{{route('signup')}}">Sign Up</a>
                        </div> -->
                        <div class="menu-bar d-xl-none ml-20">
                           <a class="side-toggle" href="javascript:void(0)">
                              <div class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>