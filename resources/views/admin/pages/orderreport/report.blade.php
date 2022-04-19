@extends('welcome')
@section('content')
<h1>Report</h1>
<form class="form-inline" action="{{route('admin.orderreport.result')}}" >
    <label class="sr-only" for="inlineFormInputName2">From Date</label>
    <input type="date" name="from_date" class="form-control" id="inlineFormInputGroupUsername2" placeholder="form Date">

  
    <label class="sr-only" for="inlineFormInputGroupUsername2">To Date</label>
    <div class="input-group mb-2 mr-sm-2">
      <div class="input-group-prepend">
        
      </div>
      <input type="date" name="to_date" class="form-control" id="inlineFormInputGroupUsername2" placeholder="To Date">
    </div>
  
    {{-- <div class="form-check mb-2 mr-sm-2">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label>
    </div> --}}
  
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
@endsection