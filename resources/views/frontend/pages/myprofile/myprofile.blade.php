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
     
 
<!-- <div class="row">
    {{-- <a href="{{route('mypost')}}" class="btn btn-info">My Post</a> --}}
</div> -->
{{-- <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">user image</th>
      <th scope="col">user address</th>
      <th scope="col">user country</th>
      <th scope="col">user city</th>
      <th scope="col">user phone</th>
      
 
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$users->id}}</td>
         <td>{{$users->name}}</td>
        <td><img width="150px" src="{{url('/uploads',$users->user_image)}}" alt=""></td>
        <td>{{$users->user_address}}</td>
        <td>{{$users->user_country}}</td>
        <td>{{$users->user_city}}</td>
        <td>{{$users->user_phone}}</td>
          
        <td> <a href="{{route('mypost')}}"   class="btn btn-info">My Post </a>
        <td> <a href="{{route('myorder')}}"   class="btn btn-info">My Order </a>
        <td> <a href=""   class="btn btn-info">My Order Details </a>
        <td> <a href=""   class="btn btn-info">Edit </a>
      </tr>
  </tbody>
</table>
  </div>
</div> --}}
                
<div class="course-detalies-area pt-120 pb-100">
  <div class="container">
     <div class="row">
        <div class="col-xl-3 col-lg-3">
           <div class="course-instructors-img mb-30">
              <img src="{{url('/uploads/',$users->user_image)}}" alt="nstructors-img">
           </div>
        </div>
        <div class="col-xl-8 col-lg-9">
           <div class="course-detelies-wrapper">
              <div class="course-detiles-tittle mb-30">
                 <h3>{{$users->name}}</h3>
                 <span>{{$users->address}}</span><br><br>
                 <ul>
                    <li>
                        <span class="title-span">Full Name : </span>
                        <span class="info-span">{{$users->name}}</span>
                    </li>

                    <li>
                        <span class="title-span">Address : </span>
                        <span class="info-span">{{$users->user_address}}</span>
                    </li>
                    <li>
                      <span class="title-span">Country: </span>
                      <span class="info-span">{{$users->user_country}}</span>
                  </li>
                  <li>
                    <span class="title-span">City : </span>
                    <span class="info-span">{{$users->user_city}}</span>
                </li>
                <li>
                  <span class="title-span">Phone : </span>
                  <span class="info-span">{{$users->user_phone}}</span>
              </li>

                    <li>
                        <span class="title-span">Email : </span>
                        <span class="info-span">{{$users->email}}</span>
                    </li>
                    {{-- <li>
                        <span class="title-span">Gender : </span>
                        <span class="info-span">{{auth()->user()->gender}}</span>
                    </li> --}}
                </ul>
              </div>
              
              {{-- <div class="course-bio-text pt-45 pb-20">
                 <p>Hello, I am {{auth()->user()->name}}. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur maiores id quo optio illum vero odit et recusandae dolore quod earum, animi sequi est ut? Cum ipsa dignissimos dolorum tenetur laborum deleniti optio quia, totam sapiente velit hic nam quasi, tempore commodi sequi vero corporis ut ullam distinctio amet. Quasi ut distinctio enim vel eaque deleniti porro veniam ducimus laudantium.</p>
              </div> --}}
              {{-- <div class="course-bio-text pt-45 pb-20">
                 <h3>Address</h3>
                 <p>{{auth()->user()->address}}</p>
              </div> --}}
              <div class="col-auto text-end float-end ms-auto">
                 <a href="{{route('myprofile.edit',$users->id)}}"class="btn btn-outline-primary me-2"><i
                         class="fas fa-pen"></i>
                     Edit Info</a>
             </div>
             <div class="col-auto text-end float-end ms-auto">
              <a href="{{route('myorder')}}" class="btn btn-outline-primary me-2"><i
                      class="fas fa-pen"></i>
                  My Order</a>
          </div>
          <div class="col-auto text-end float-end ms-auto">
            <a href="{{route('mypost')}}" class="btn btn-outline-primary me-2"><i
                    class="fas fa-pen"></i>
                My Post</a>
        </div>
           </div>
        </div>
     </div>
  </div>
</div>




@endsection 
