@extends('master')
@section("content")
<section id="home">
    <div class="container-main">
         <h1>Lets thrift</h1>
         <p>COME THRIFT WITH US</p>
         <button>Shop Now</button>
     </div>    
 </section>
 <!--FOR PRODUCTS -->
 <section> 
     <div class="desc">
         <h3>Our Items</h3>
         <hr>
         <p>Let's try to reduce our carbon footprint</p>
     </div>

    <div class="row">
        <div class="product">
            <img class="img-fluid" src="images\2.jpg" alt="Book">
            <h5 class="product-name">Book</h5>
            <h4 class="product-price">Rs 250</h4>
            <button class="buy-btn">Buy now</button>
         </div>
        <div class="product">
            <img class="img-fluid" src="images\3.jpg" alt="Trousers">
            <h5 >Trousers</h5>
            <h4>Rs 850</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\1.jpg" alt="Flannel">
            <h5>Flannel</h5>
            <h4>Rs 800</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\4.jpg" alt="Hoodie">
            <h5>Hoodie</h5>
            <h4>Rs 1250</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\5.jpg" alt="Converse">
            <h5>Converse</h5>
            <h4>Rs 1300</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\6.jpg" alt="Chain">
            <h5>Gold plated Chain</h5>
            <h4>Rs 850</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\7.jpg" alt="Bomber jacket">
            <h5>Bomber Jacket</h5>
            <h4>Rs 1450</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="images\8.jpg" alt="Hand bag">
            <h5>Hand bag</h5>
            <h4>Rs 1750</h4>
            <button class="buy-btn">Buy now</button>
        </div>
    </div>
 </section>
 @endsection
