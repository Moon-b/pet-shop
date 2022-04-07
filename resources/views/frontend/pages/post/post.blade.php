@extends('frontend.master')
@section('product')
<h1>Posts</h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<!-- <a href="{{route('Post.create')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New posts </a> -->
<div style="display: flex; justify-content: flex-end ; padding-right: 127px;">
  <a href="{{route('Post.create')}}" class="btn btn-success" style="float: right; width: 28%"><span style="font-size: 15px;">Add New Posts</span></a>
  </div>
  <!-- <div class="col-12">
  <table class="table"> -->
  <!-- <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_name</th>
      
      <th scope="col">title</th>
      <th scope="col">details</th>
      <th scope="col">type</th>
      <th scope="col">form date</th>
      <th scope="col">to date</th>
     
      <th scope="col">is temporary</th>
      
      
 
    </tr>
  </thead> -->
  
@foreach($posts as $post)
<div class="col-md-4">
            <div class="product-item">
              <!-- <img width="150px" src="{{url('/uploads/',$post->pet_picture)}}" alt="product image"> -->
              <div class="down-content">
                <a href="#"><h4>{{$post->id}}</h4></a>
                <h6>{{$post->pet_name}}</h6>
                <p>{{$post->title}}</p>
                <p>{{$post->details}}</p>
                <p>{{$post->type}}</p>
                <p>{{$post->from_date}}</p>
                <p>{{$post->to_date}}</p>
                <p>{{$post->is_temporary}}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
</div>
@endforeach
  <!-- <tbody>
    @foreach($posts as $post)
      <tr>
      <th scope="row">{{$post->id}}</th>
      
    
        <td>{{$post->pet->pet_name}}</td>
        
      <td>{{$post->title}}</td>
      <td>{{$post->details}}</td>
      <td>{{$post->type}}</td>
      <td>{{$post->from_date}}</td>
      <td>{{$post->to_date}}</td>
      <td>{{$post->is_temporary}}</td>

       
  
        
        
      
        <!-- <a class='btn btn-Danger' href="">View</a> -->
        <!-- </td>
      </tr>
    @endforeach
  </tbody> --> -->
<!-- </table>
  </div>
</div> -->



@endsection