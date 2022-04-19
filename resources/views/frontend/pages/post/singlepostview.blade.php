@extends('frontend.master')

@section('product')

<div class="row">
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-4" style="margin-top: 100px;">

        @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
        <div class="product-item">
            <a href="">
                <img src="{{url('/uploads/'.$posts->picture)}}" alt="DFASF" style="height: 300px;">
            </a>

        </div>
      
    </div>

    <div class="col-md-8" style="margin-top: 100px;">
        <div class="down-content">
            <a href="#"><h4>{{$posts->id}}</h4></a>
            <p>{{$posts->pet_categories_name}} </p>
            <p>{{$posts->picture}} </p>
            <p>{{$posts->title}} </p>
            <p>{{$posts->details}} </p>
            <p>{{$posts->type}} </p>
            <p>{{$posts->from_date}} </p>
            <p>{{$posts->to_date}} </p>
            <p>{{$posts->is_temporary}} </p>
           

            <span>Reviews (32)</span>
            @if($posts->type == 'adoption' )
                <a href="{{route('Post.donate',$posts->id)}}" class="btn btn-success">Donate</a>
                @else
                <a href="{{route('Post.adopt',$posts->id)}}" class="btn btn-success">Adopt</a>
                @endif

            <!-- <a href="" class="btn btn-success">Adopt</a> -->
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

@endsection