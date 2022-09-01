@extends('layout')

@section('content')
<div class="custom-slider">
        <div class="col-sm-10">
            <div class="searched-wrapper">
                <h2>My Orders</h2>  
                <div>
                    @foreach ($orders as $order)
                        <div class="row searched-items align-items-center  mb-5 cart-list-divider">
                            <div class="col-sm-3">
                                <a href="/detail/{{$order->id}}" class="text-decoration-none">
                                    <img class="trending-img" src="{{$order->gallery}}" class="d-block w-100" alt="...">
                                    
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="/detail/{{$order->id}}" class="text-decoration-none">
                                    <div class="text-dark">
                                        <h4>{{$order->name}}</h4>
                                        <h6 class="fs-6">Delivery Status : {{$order->status}}</h6>
                                        <h6>Payment Status : {{$order->payment_status}}</h6>
                                        <h6>Payment Mode : {{$order->payment_mode}}</h6>
                                        <h6>Delivery Address : {{$order->address}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>              
            </div>
        </div>
  </div>
@endsection