@extends('master')
@section('content')
<!-- Trending slides -->
<div class="container">
  
   <h2>Products in Cart</h2>
   <a href="/ordernow" class="btn btn-success">Order now</a>
   @foreach($products as $item)
   <a href="detail/{{$item->id}}">
        <hr />
        <div class="card" style="width:;">
            <div class="row">
                <div class="col-md-3">
                    <img class="card-img img-responsive" src="{{$item->gallery}}" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <p class="card-text">{{$item->price}}</p>
                        
                    </div>
                </div>
                <div class="col-sm-2">
                <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
                </div>
            </div>
        </div>
        </a>
    @endforeach
    
</div>
@endsection