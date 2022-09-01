@extends('layout')

@section('content')
<div class="custom-slider ms-3">
        <div class="col-sm-4">
            <table class="table table-striped">
               
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>₹{{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>₹0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>₹100</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>₹{{$total + 100}}</td>
                  </tr>
                </tbody>
              </table>

              <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group mt-5 mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Address</label>
                  <textarea class="form-control" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="fw-bold">Payment Mode</label>
                    <h6><input type="radio" value="cash" name="payment"><span>Online</span></h6>
                    <h6><input type="radio" value="cash" name="payment"><span>EMI</span></h6>
                    <h6><input type="radio" value="cash" name="payment"><span>Cash On Delivery</span></h6>
                </div>
               
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
        </div>
        
  </div>
@endsection