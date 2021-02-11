@extends('master')
@section('content')
<!-- Trending slides -->
<div class="container">
  
   <h2>Products in Orderlist</h2>
   <a href="/ordernow" class="btn btn-success">Pay online</a>
   <strong>Total Products : {{count($products)}}</strong>
   @foreach($products as $item)
   <!-- <a href="detail/{{$item->id}}"> -->
        <hr />
        <div class="card" style="width:;">
            <div class="row">
                <div class="col-md-3">
                    <img class="card-img img-responsive" src="{{$item->gallery}}" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                    
                        <h5 class="card-title"><b>Name:</b> {{$item->name}}</h5>
                        <p class="card-text"><strong>Description:</strong> {{$item->description}}</p>
                        <p class="card-text"><strong>Price:</strong> {{$item->price}}</p>
                        <p class="card-text"><strong>Payment status:</strong> {{$item->payment_status}}</p>
                        <p class="card-text"><strong>Payment Method:</strong> {{$item->payment_method}}</p>
                    </div>
                </div>
                <div class="col-sm-2">
                <!-- <a href="" class="btn btn-danger">Remove</a> -->
                </div>
            </div>
        </div>
        <!-- </a> -->
    @endforeach
    
</div>
@endsection