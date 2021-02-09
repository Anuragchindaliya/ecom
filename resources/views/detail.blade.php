@extends('master')
@section('content')
<div class="container " style="height: 73vh;">
    <div class="row">
        <div class="col-md-6">
            <img src="{{$product['gallery']}}" style="width:100%;">
        </div>
        <div class="col-md-6">
            <a href="/">Go Back</a>
            <p>
            <h2>{{$product['name']}}</h2>
            <h3>Price :{{$product['price']}}<h3>
            <h4>Description : {{$product['description']}}</h4>
            </p>
            <br/>
           <form action="/addcart" method="POST">
            @csrf
                <input type="hidden" value="{{$product['id']}}" name="product_id">
                <button class="btn btn-primary">Add to Cart</button>
           </form>
           <br/>
            <button class="btn btn-danger">Buy Now</button>
        </div>
    </div>
</div>
@endsection