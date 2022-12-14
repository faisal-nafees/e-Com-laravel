<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg text-light navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/myorder">Orders</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="/search">
                    <input class="form-control ms-5 me-2 search-box" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <ul class="navbar-nav ">
            <li class="nav-item"><a href="/cartlist" class="nav-link">Cart({{$total}})</a></li>
            @if (Session::has('user'))
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')->name}}
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
            @else
            <a href="/login" class="nav-link">Login</a>   
            <a href="/register" class="nav-link">Register</a>   
            @endif
        </ul>
    </div>
  </nav>