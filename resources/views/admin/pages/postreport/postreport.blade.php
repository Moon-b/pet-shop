@extends('welcome')
@section('content')
<h1>Posts</h1>
<div class="row" style="margin-top: 75px;">

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
      <th scope="col">from date</th>
      <th scope="col">to date</th>
     
      <th scope="col">is temporary</th>
      <th scope="col"> Status</th>

     
      
      
 
    </tr>
  </thead>
  <tbody>
    @foreach($post_report as $post)
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
      <td>{{$post->status}}</td>

       
  
        
         
    @endforeach
  </tbody>
</table>
  </div>
</div>



@endsection