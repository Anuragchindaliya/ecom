@extends('master')
@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="">
    @foreach($products as $item)
    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" alt="Chania" style="width:100vh;">
        <div class="carousel-caption" style="background: rgb(0 0 0 / 60%);">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
      </a>
    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

  

</div>

<!-- Trending slides -->
<div class="container" style="">
<h2 style="text-align:center">Feature</h2>
  <div class="row" style="">
    
    @foreach($products as $item)
    <div class="col-md-2">
      <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" alt="Chania" style="width:100%;">
        <h4 style="text-align:center">{{$item['name']}}</h4>
      </a>
    </div>
    @endforeach
    </div>
  </div>
 
@endsection