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
            <button class="buy-btn"><a href="details.book">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
         </div>
        <div class="product">
            <img class="img-fluid" src="/images/3.jpg" alt="Joggers">
            <h5 class="product-name">Joggers</h5>
            <button class="buy-btn"><a href="details.joggers">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/1.jpg" alt="Flannel">
            <h5 class="product-name">Flannel</h5>
            <button class="buy-btn"><a href="details.flannel">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/4.jpg" alt="Hoodie">
            <h5 class="product-name">Hoodie</h5>
            <button class="buy-btn"><a href="details.hoodie">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/5.jpg" alt="Converse">
            <h5 class="product-name">Converse</h5>
            <button class="buy-btn"><a href="details.converse">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/6.jpg" alt="Chain">
            <h5 class="product-name">Gold plated Chain</h5>
            <button class="buy-btn"><a href="details.chain">Buy now</a></button>
            <button class="buy-btn"><<a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/7.jpg" alt="Leather Bomber Jacket">
            <h5 class="product-name">Leather Bomber Jacket</h5>
            <button class="buy-btn"><a href="details.leather">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/8.jpg" alt="Hand bag">
            <h5 class="product-name">Hand bag</h5>
            <button class="buy-btn"><a href="details.bag">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts">
            <h5 class="product-name">Black Biker Shorts</h5>
            <button class="buy-btn"><a href="details.bikershorts">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee">
            <h5 class="product-name">Graphics Tee</h5>
            <button class="buy-btn"><a href="details.graphictee">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
       <div class="product">
            <img class="img-fluid" src="/images/11.jpg" alt="Crop top">
            <h5 class="product-name">Crop top</h5>
            <button class="buy-btn"><a href="details.croptop">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
        <div class="product">
            <img class="img-fluid" src="/images/12.jpg" alt="Cargo Pants">
            <h5 class="product-name">Cargo Pants</h5>
            <button class="buy-btn"><a href="details.cargopants">Buy now</a></button>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
    </div>
 </section>
 @endsection
