@extends('master')
@section('content')
<div class="" style="">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner mycrousal">
        @foreach ($product as $item)
    
        <div class="carousel-item {{$item['id']==1?'active':''}}">
          <a href="detail/{{$item['id']}}">
            <img class="d-block w-100" src="{{$item['gallery']}}" alt="First slide"></a>
            <div class="crausel-caption"></div>
            <div class="carousel-caption d-none d-md-block ">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
              </div>
          </div>
      
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="main_heading my-5 pt-5">
  <div class="text-center">
      <h1 class="display-4">Trending Product</h1>
      <hr class="w-25 mx-auto">
  </div>
  <div class="container">
      <div class="row gy-2 my-5">
        @foreach ($product as $item)
        <div class="col-md-4 col-10 col-xxl-4 mx-auto">
          <figure>
            <a href="detail/{{$item['id']}}">
          <img src="{{$item['gallery']}}" class="img-fluid" alt="Gallery"></a>
          </figure>
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
      </div>
      </div>
    </div>
        @endforeach
  </div>
</section>

  


@endsection