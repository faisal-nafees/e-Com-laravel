@extends('layout')

@section('content')
<div class="custom-slider">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
                <div class="carousel-item {{$product->id==1?'active':''}}" data-bs-interval="10000">
                    <a href="/detail/{{$product->id}}">
                        <img class="slider-img" src="{{$product->gallery}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">                      <h5>{{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h1>Trending Products</h1>
        <div class="">
            @foreach ($products as $product)
                <div class="trending-items">
                    <a href="/detail/{{$product->id}}">
                        <img class="trending-img" src="{{$product->gallery}}" class="d-block w-100" alt="...">
                        <div class="">
                        <h5>{{$product->name}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection