@extends('master')
@section("content")

<h2>Checkout</h2>
<div class="row1">
  <div class="col-75">
    <div class="container1">
      <form action="/action_page.php">
      
        <div class="row1">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname">
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
            <h3>Payment</h3>
            <label for="fname">Cash on delivery </label>
            <label for="fname">Accepted Cards </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
            </div>
            <label for="ccnum">Card number</label>
            <input type="text" id="cname" name="cardname" placeholder="Card Number">
            <label for="cname">Name on Card</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Name on card">
            <div class="row">
              <div class="col-50">
                <label for="expdate">Exp Date</label>
                <input type="text" id="expdate" name="expdate" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container1">
      <h4>Order Summary <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="images/2.jpg">Product1 </a> <span class="price">Rs750</span></p>
      <p><a href="#">Product 2</a> <span class="price">Rs450</span></p>
      <p><a href="#">Product 3</a> <span class="price">Rs550</span></p>
      <p><a href="#">Product 4</a> <span class="price">Rs850</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs2600</b></span></p>
    </div>
  </div>
</div>

</body>
</html>
@endsection
