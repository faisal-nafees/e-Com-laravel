@extends('layout')

@section('content')
<div class="container text-center">
    <div class="row">
      <div class="col-sm-4">
        <a href="#">Filter</a>
      </div>
      <div class="col-sm-4">
        <div class="searched-wrapper">
            <h4>Searched Products</h4>
            
                @foreach ($products as $product)
                @if ($products)
                <div class="searched-items mb-5">
                    <a href="/detail/{{$product->id}}" class="text-decoration-none">
                        <img class="trending-img" src="{{$product->gallery}}" class="d-block w-100" alt="...">
                        <div class="">
                        <h2>{{$product->name}}</h2>
                        <h4>{{$product->price}}</h4>
                        <h5>{{$product->description}}</h5>
                        </div>
                    </a>
                </div>
                @else
                <p>No products found</p>
                @endif
                @endforeach
                
        </div>
      </div>
      
    </div>
  </div>
   
    {{--  --}}
@endsection