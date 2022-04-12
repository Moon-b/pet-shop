@extends('welcome')
@section('content')
<h1>Posts</h1>
<div class="row" style="margin-top: 75px;">
<!-- <a href="#" class="btn btn-success" style="float: right;"><h2>Add New Pet Product Category</h2></a> --> 
<!-- <a href="{{route('DonationList.form')}}" class="btn btn-success" style="float: right;"><h2>Add New Donation List</h2></a> -->
<!-- <a href="{{route('Postreceive')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New posts </a> -->
  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_name</th>
      <th scope="col">picture</th>
      
      <th scope="col">title</th>
      <th scope="col">details</th>
      <th scope="col">type</th>
      <th scope="col">form date</th>
      <th scope="col">to date</th>
     
      <th scope="col">is temporary</th>
      <th scope="col">action</th>
      
      
 
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
      <tr>
      <th scope="row">{{$post->id}}</th>
      
    
        <td>{{$post->pet->pet_categories_name}}</td>
        <td><img width="150px" src="{{url('/uploads',$post->picture)}}" alt=""></td>
        
      <td>{{$post->title}}</td>
      <td>{{$post->details}}</td>
      <td>{{$post->type}}</td>
      <td>{{$post->from_date}}</td>
      <td>{{$post->to_date}}</td>
      <td>{{$post->is_temporary}}</td>

       
  
        <td>
          @if($post->status == 'pending')
          <a class='btn btn-success' href="{{route('Post.approve',$post->id)}}">Approve</a>
           <a class='btn btn-success' href="">Delete</a>
      @endif
        <!-- <a class='btn btn-Danger' href="">View</a> -->
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>



@endsection