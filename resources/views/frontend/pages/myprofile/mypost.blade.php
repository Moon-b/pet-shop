@extends('frontend.master')
@section('product')
   @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
 
<div class="row">
    <!-- <a href="{{route('mypost')}}" class="btn btn-info">My Post</a> -->
</div>
<div class="col-12">
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
      
 
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$posts->id}}</td>
         <td>{{$posts->pet->pet_categories_name}}</td>
        <td><img width="150px" src="{{url('/uploads',$posts->picture)}}" alt=""></td>
        <td>{{$posts->title}}</td>
        <td>{{$posts->details}}</td>
        <td>{{$posts->type}}</td>
        <td>{{$posts->from_date}}</td>
        <td>{{$posts->to_date}}</td>
        <td>{{$posts->is_temporary}}</td>
        
      </tr>
  </tbody>
</table>
  </div>
</div>
                




@endsection 
