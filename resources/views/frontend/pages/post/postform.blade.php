
@extends('frontend.master')
@section('product')
<h1 style="margin-top: 60px; padding-bottom: 30px;">Thanks For Your Response</h1>
<form action="{{route('Post.form')}}" method="POST"enctype="multipart/form-data">
@csrf
{{-- <div class="form-group">
    <label for="petadopt">Pet Category Name</label>
    <select class="form-control"name="pet_category" id="petadopt">
    @foreach($petcategories as $singlepetcategory)
        <option value="{{$singlepetcategory->id}}">{{$singlepetcategory->pet_categories_name}}</option>
    @endforeach
    </select>
</div> --}}

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">pet category name</label>
  </div>
  <select class="custom-select" name="pet_category" id="inputGroupSelect01">
    @foreach($petcategories as $singlepetcategory)
    <option value="{{$singlepetcategory->id}}">{{$singlepetcategory->pet_categories_name}}</option>
@endforeach
  </select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Picture</label>
    <input required name ='pet_img' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form date">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">TItle</label>
    <input required name ='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form date">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input required name ='details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form date">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Type</label>
    </div>
    <select class="custom-select" name="type" id="inputGroupSelect01">
    
        <option value="donation">Donation</option>
        <option value="adaption">Adaption</option>
  
    </select>
</div>
<!-- <div class="form-group">
    <label for="exampleInputEmail1">status</label>
    <input required name ='status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status">
  </div> -->
  <div class="form-group">
    <label for="exampleInputEmail1"> from date</label>
    <input required name ='form_date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter form date">
</div>
<div class="form-group">
    <label for="exampleInputEmail1"> to date</label>
    <input required name ='to_date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter to date">
</div>
<div class="form-group">
<input required type="checkbox" id="vehicle1" name="is_temporary" value="yes">
  <label for="vehicle1"> Is Temporary</label><br>
</div>
    <!-- <label for="exampleInputEmail1">Donation Form Status</label>
    <input name ='donation_form_status' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter donation form status">
  
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection