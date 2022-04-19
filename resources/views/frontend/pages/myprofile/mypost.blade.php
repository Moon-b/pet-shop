@extends('frontend.master')
@section('product')
   @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
 
<div class="row">
    <!-- <a href="{{route('mypost')}}" class="btn btn-info">My Post</a> -->
</div>
<div class="col-12" style="overflow-x: scroll;">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_categories_name</th>
      <th scope="col">picture</th>
      <th scope="col">title</th>
      <th scope="col">details</th>
      <th scope="col">type</th>
      <th scope="col">from_date</th>
      <th scope="col">to_date</th>
      <th scope="col">is_temporary</th>
      <th scope="col"> status</th>
      <th scope="col">action</th>
      
      <!-- <th scope="col">Action</th> -->

      
 
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
         <td>{{$post->pet->pet_categories_name}}</td>
        <td><img width="150px" src="{{url('/uploads',$post->picture)}}" alt=""></td>
        <td>{{$post->title}}</td>
        <td>{{$post->details}}</td>
        <td>{{$post->type}}</td>
        <td>{{$post->from_date}}</td>
        <td>{{$post->to_date}}</td>
        <td>{{$post->is_temporary}}</td></br>
        <td>{{$post->status}}</td></br>

        @if($post->recever_id != null)
        <td><a href="{{route('receiverinfo',$post->id)}}" class="btn btn-info">View</a></td>
        @endif
        {{-- @if($post->status != "cancel")
        
      
      <td> <a href="{{route('mypost.cancel',$post->id)}}"   class="btn btn-info">Delete</a></td>
      @endif --}}
      @if($post->status == "pending")
        
      
      <td> <a href="{{route('mypost.cancel',$post->id)}}"   class="btn btn-info">Delete</a></td>
      @endif
      </tr>
      @endforeach
  </tbody>
</table>
  </div>
</div>
                




@endsection 
