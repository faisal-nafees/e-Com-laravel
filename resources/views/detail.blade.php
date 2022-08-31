@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product->gallery}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name : {{$product->name}}</h2>
            <h3>Price : {{$product->price}}</h3>
            <h4>Category : {{$product->category}}</h4>
            <h4>Description : {{$product->description}}</h4>
            <br>
            <div class="d-flex flex-wrap mb-3">
                <form action="/add-to-cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success me-3">Add To Cart</button>
                </form>
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</div>
@endsection