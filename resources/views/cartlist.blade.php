@extends('layout')

@section('content')
<div class="container text-center">
        <div class="col-sm-10">
            <div class="searched-wrapper">
                <h2>My Cart</h2>  
                <div>
                    @foreach ($products as $product)
                        <div class="row searched-items align-items-center justify-content-center mb-5 cart-list-divider">
                            <div class="col-sm-3">
                                <a href="/detail/{{$product->id}}" class="text-decoration-none">
                                    <img class="trending-img" src="{{$product->gallery}}" class="d-block w-100" alt="...">
                                    
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="/detail/{{$product->id}}" class="text-decoration-none">
                                    <div class="">
                                    <h4>{{$product->name}}</h4>
                                    <h6>₹{{$product->price}}</h6>
                                    <h6>{{$product->description}}</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning">Remove From Cart</button>
                            </div>
                        </div>
                    @endforeach
                </div>              
            </div>
        </div>
  </div>
@endsection