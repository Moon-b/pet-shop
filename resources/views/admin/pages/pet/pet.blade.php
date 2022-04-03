@extends('welcome')
@section('content')
<h1><b>Pet</h1></b>
<!-- <div class="row" style="margin-top: 75px;"> -->
<a href="{{route('Pet.form')}}" class="btn btn-success "  style="float: right;font-size:18px; ">Add New Pet </a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_name</th>
      <th scope="col">pet_categories_name</th>
      <th scope="col">pet_breed</th>
      <th scope="col">pet_size</th>
      <th scope="col">pet_color</th>
      <th scope="col">pet_life_span</th>
      <th scope="col">pet_age</th>
      <th scope="col">pet_height</th>
      <th scope="col">rules</th>
      <th scope="col">pet_weight</th>
      <th scope="col">pet_health</th>
      <th scope="col">pet_quality</th>
      <th scope="col">pet_image</th>
      <th scope="col">action</th>
     
    </tr>
  </thead>
  <tbody>
@foreach($pets as $singlepet)
<tr>
      <th scope="row">{{$singlepet->id}}</th>
      <td>{{$singlepet->pet_name}}</td>
      <td>{{$singlepet->petcategory->pet_categories_name}}</td>
      <td>{{$singlepet->pet_breed}}</td>
      <td>{{$singlepet->pet_size}}</td>
      <td>{{$singlepet->pet_color}}</td>
      <td>{{$singlepet->pet_life_span}}</td>
      <td>{{$singlepet->pet_age}}</td>
      <td>{{$singlepet->pet_height}}</td>
      <td>{{$singlepet->rules}}</td>
      <td>{{$singlepet->pet_weight}}</td>
      <td>{{$singlepet->pet_health}}</td>
      <td>{{$singlepet->pet_quality}}</td>
      <td>
        <img width="150px" src="{{url('/uploads',$singlepet->pet_image)}}" alt="Product image">
      </td>
      <td>{{$singlepet->action}}
      <a class="btn btn-primary" href="{{route('pet.edit', $singlepet->id)}}">Edit</a>
      
    
      <a class="btn btn-danger" href="{{route('pet.delete',$singlepet->id)}}">Delete</a>
      </td>
      
      </tr>

 @endforeach
</tbody>

</table>

@endsection

