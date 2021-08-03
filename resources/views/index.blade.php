@extends('master')
@section("content")
<section id="home">
    <div class="container-main">
         <h1>Let's thrift</h1>
         <p>COME THRIFT WITH US</p>
         <button class="shop-btn">Shop Now</button>
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
            <img class="img-fluid" src="/images/2.jpg" alt="Book">
            <h5 class="product-name">Book</h5>
            <h4 class="product-price">Rs 250</h4>
            <button>Buy now</button>
         </div>
        <div class="product">
            <img class="img-fluid" src="/images/3.jpg" alt="Joggers">
            <h5 class="product-name">Joggers</h5>
            <h4 class="product-price">Rs 850</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/1.jpg" alt="Flannel">
            <h5 class="product-name">Flannel</h5>
            <h4 class="product-price">Rs 800</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/4.jpg" alt="Hoodie">
            <h5 class="product-name">Hoodie</h5>
            <h4 class="product-price">Rs 1250</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/5.jpg" alt="Converse">
            <h5 class="product-name">Converse</h5>
            <h4 class="product-price">Rs 1300</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/6.jpg" alt="Chain">
            <h5 class="product-name">Gold plated Chain</h5>
            <h4 class="product-price">Rs 850</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/7.jpg" alt="Leather Bomber Jacket">
            <h5 class="product-name">Leather Bomber Jacket</h5>
            <h4 class="product-price">Rs 2450</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/8.jpg" alt="Hand bag">
            <h5 class="product-name">Hand bag</h5>
            <h4 class="product-price">Rs 1750</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts">
            <h5 class="product-name">Black Biker Shorts</h5>
            <h4 class="product-price">Rs 1250</h4>
            <button>Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee">
            <h5 class="product-name">Graphics Tee</h5>
            <h4 class="product-price">Rs 850</h4>
            <button>Buy now</button>
        </div>
    </div>
 </section>
 @endsection
