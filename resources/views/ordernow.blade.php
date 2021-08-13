@extends('master')
@section('title')
Order Now - Jiffstore
@endsection
@section("content")
<h2 class=check>Checkout</h2>
<div class="row1">
  <div class="col-75">
    <div class="container1">
      <form action="placeorder" method="POST">
      @csrf
        <div class="row1">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="postal">Postal Code</label>
            <input type="text" id="postal" name="postal" >
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone">
          </div>

          <div class="col-50">
          <label><h3>Payment Methods</h3>
          <input type="radio" value="Cash on Delivery" name="payment"> Cash on delivery <br><br>
          <input type="radio" value="Online Transaction" name="payment"> esewa
          </div>
          
        </div>
        <label>
          <br><input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Proceed to Pay" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container1">
      <h4>Order Summary <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
      <hr>
      <p>Sub Total: <span class="price" style="color:black"><b>Rs {{$total}}</b></span></p>
      <p>Tax: <span class="price" style="color:black"><b>Rs 0</b></span></p>
      <p>Delivery: <span class="price" style="color:black"><b>Rs 50</b></span></p>
      <p>Total: <span class="price" style="color:black"><b>Rs {{$total+50}}</b></span></p>
    </div>
  </div>
</div>
<br><br>
@endsection
