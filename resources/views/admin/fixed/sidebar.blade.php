<div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- <li class="sidebar-user-panel">
                                <div class="sidebar-user">
                                    <div class="sidebar-user-picture">
                                        <img alt="image" src="../assets/img/dp.jpg">
                                    </div>
                                    <div class="sidebar-user-details">
                                        <div class="user-name">Sneha Patel</div>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item start active open">
                                <a href="{{route('dashboard')}}" class="nav-link nav-toggle">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM6 19h12V9.157l-6-5.454-6 5.454V19zm3-9h6v6H9v-6zm2 2v2h2v-2h-2z"/></svg></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('PetCategory')}}" class="nav-link nav-toggle"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h8v8H3V3zm0 10h8v8H3v-8zM13 3h8v8h-8V3zm0 10h8v8h-8v-8zm2-8v4h4V5h-4zm0 10v4h4v-4h-4zM5 5v4h4V5H5zm0 10v4h4v-4H5z"/></svg></i>
                                    <span class="title">Pet Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('Pet')}}"  class="nav-link nav-toggle"> <i ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M8 4h13v2H8V4zM5 3v3h1v1H3V6h1V4H3V3h2zM3 14v-2.5h2V11H3v-1h3v2.5H4v.5h2v1H3zm2 5.5H3v-1h2V18H3v-1h3v4H3v-1h2v-.5zM8 11h13v2H8v-2zm0 7h13v2H8v-2z"/></svg></i>
                                    <span class="title">Pet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('PetProductCategory')}}" class="nav-link nav-toggle"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 12.999V20a1 1 0 0 1-1 1h-8v-8.001h9zm-11 0V21H3a1 1 0 0 1-1-1v-7.001h9zM11 3v7.999H2V4a1 1 0 0 1 1-1h8zm10 0a1 1 0 0 1 1 1v6.999h-9V3h8z"/></svg></i>
                                    <span class="title">Pet Product Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('PetProduct')}}" class="nav-link nav-toggle"> <i ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 10v4h6v-4h-6zm-2 0H5v4h6v-4zm2 9h6v-3h-6v3zm-2 0v-3H5v3h6zm2-14v3h6V5h-6zm-2 0H5v3h6V5zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z"/></svg></i>
                                    <span class="title">Pet Product</span>
                                </a>
                            </li>
                           
                            <!-- <li class="nav-item">
                                <a href="{{route('DonationList')}}" class="nav-link nav-toggle"> 
                                    <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.375 15.103A8.001 8.001 0 0 0 8.03 5.053l-.992-1.737A9.996 9.996 0 0 1 17 3.34c4.49 2.592 6.21 8.142 4.117 12.77l1.342.774-4.165 2.214-.165-4.714 1.246.719zM4.625 8.897a8.001 8.001 0 0 0 11.345 10.05l.992 1.737A9.996 9.996 0 0 1 7 20.66C2.51 18.068.79 12.518 2.883 7.89L1.54 7.117l4.165-2.214.165 4.714-1.246-.719zM8.5 14H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V7h2v1h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v1h-2v-1H8.5v-2z"/></svg></i>
                                    <span class="title">Donation List</span>

                                </a>
                            </li> -->
                           
                           

                            <li class="nav-item">
                                <a href="{{route('Postreceive')}}" class="nav-link nav-toggle"> <i ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.33 11.5h2.17A4.5 4.5 0 0 1 16 16H8.999L9 17h8v-1a5.578 5.578 0 0 0-.886-3H19a5 5 0 0 1 4.516 2.851C21.151 18.972 17.322 21 13 21c-2.761 0-5.1-.59-7-1.625L6 10.071A6.967 6.967 0 0 1 9.33 11.5zM4 9a1 1 0 0 1 .993.883L5 10V19a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h2zm9.646-5.425L14 3.93l.354-.354a2.5 2.5 0 1 1 3.535 3.536L14 11l-3.89-3.89a2.5 2.5 0 1 1 3.536-3.535z"/></svg></i>
                                    <span class="title">Posts</span>
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="{{route('user')}}" class="nav-link nav-toggle"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 14v8H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm2.595 5.812a3.51 3.51 0 0 1 0-1.623l-.992-.573 1-1.732.992.573A3.496 3.496 0 0 1 17 14.645V13.5h2v1.145c.532.158 1.012.44 1.405.812l.992-.573 1 1.732-.992.573a3.51 3.51 0 0 1 0 1.622l.992.573-1 1.732-.992-.573a3.496 3.496 0 0 1-1.405.812V22.5h-2v-1.145a3.496 3.496 0 0 1-1.405-.812l-.992.573-1-1.732.992-.572zM18 17a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg></i>
                                    <span class="title">User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link nav-toggle"><i class="fa-brands fa-first-order"></i>
                                    <span class="title">Order</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('Order')}}">Order</a></li>
                                    <li><a href="{{route('admin.orderreport')}}">Order Report</a></li>
                                    
                                </ul>
                            </li>
                            {{-- <li class="menu-item-has-children"><a href="{{route('Order')}}">Order</a><i class="fa-brands fa-first-order"></i> --}}
                                {{-- <ul class="sub-menu">
                                    <li><a href="">Order Report</a></li>
                                    
                                </ul>
                            </li>
                           </li> --}}
                            <!-- <li class="nav-item">
                                <a href="{{url('/orderdetails')}}" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                                    <span class="title">Order Details</span>
                                </a>
                            </li> -->
                            
                            <li class="nav-item">
                                <a href="{{url('/payment')}}" class="nav-link nav-toggle"> <i ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v2H9V8a1 1 0 0 1 1-1h7V5.97l-6-1.876L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1v-4h13v4a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2z"/></svg></i>
                                    <span class="title">Payment</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin.report')}}" class="nav-link nav-toggle"> <i ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v2H9V8a1 1 0 0 1 1-1h7V5.97l-6-1.876L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1v-4h13v4a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2z"/></svg></i>
                                    <span class="title">Report</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="event.html" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                                    <span class="title">Log Out</span>
                                </a>
                            </li> -->
                             


                             




                        </ul>
                    </div>
                </div>
            </div>