@extends('master')
@section('content')
@php
$total=count($product)
@endphp
<!-- Trending slides -->
<div class="container" style="">
<h2 style="text-align:center">Search @if($total==0)
no
@endif result</h2>
  <div class="row">



   @foreach($product as $item)
    
    <div class="col-md-2">
      <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" alt="Chania" style="width:100%;">
        <h3 style="text-align:center">{{$item['name']}}</h3>
        <h5 style="text-align:center">{{$item['description']}}</h5>
      </a>
    </div>
    @endforeach
    </div>
  </div>
 
@endsection