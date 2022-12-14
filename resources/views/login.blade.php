@extends('layout')

@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <form action="login" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button><br>
                <a href="/register" >Register Here</a>
              </form>
        </div>
    </div>
</div>
@endsection