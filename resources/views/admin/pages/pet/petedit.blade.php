@extends('welcome')
@section('content')

<form action="{{route('pet.update',$pets->id )}}" method="POST" >
    @method('PUT')
    @csrf
   

    <input type="hidden" value="{{$pets->id}}" name="pet_id">

  <div class="form-group">
    <label for="exampleInputEmail1">pet_name</label>
    <input value="{{$pets->pet_name}}"name ="pet_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_name">
</div>
<div class="form-group">
    <label for="pet_categories">pet categories name</label>
    <select class="form-control"name="pet_categories_id" id="">
       
    @foreach($petcategories as $singlepetcategory)
      
        <option value="{{$singlepetcategory->id}}">{{$singlepetcategory->pet_categories_name}}</option>
        @endforeach
</select>
</div>

    <div class="form-group">
    <label for="exampleInputEmail1">pet_breed</label>
    <input value="{{$pets->pet_breed}}"name ="pet_breed" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_breed">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_size</label>
    <input value="{{$pets->pet_size}}"name ="pet_size"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_size">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_color</label>
    <input value="{{$pets->pet_color}}" name ="pet_color" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_color">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">pet_life_span</label>
    <input value="{{$pets->pet_life_span}}" name ="pet_life_span" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_life_span">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_age</label>
    <input value="{{$pets->pet_age}}"name ="pet_age"   type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_age">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_height</label>
    <input value="{{$pets->pet_height}}"name ="pet_height"   type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_height">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">rules</label>
    <input value="{{$pets->rules}}"  name ="rules" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter rules">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_weight</label>
    <input value="{{$pets->pet_weight}}"name ="pet_weight" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_weight">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_health</label>
    <input value="{{$pets->pet_health}}"  name ="pet_health" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_health">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_quality</label>
    <input value="{{$pets->pet_quality}}"name ='pet_quality' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_quality">
 
  </div>
  
  <button type="Update" class="btn btn-primary">Update</button>
</form>
@endsection