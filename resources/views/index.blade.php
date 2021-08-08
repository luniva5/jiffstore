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
            <a href="details.book"><img class="img-fluid" src="/images/2.jpg" alt="Book"></a>
            <h5 class="product-name">Alchemist</h5>
            <h4 class="product-price">Rs 250</h4>
         </div>
        <div class="product">
            <a href="details.joggers"><img class="img-fluid" src="/images/3.jpg" alt="Joggers"></a>
            <h5 class="product-name">Joggers</h5>
            <h4 class="product-price">Rs 800</h4>
        </div>
        <div class="product">
            <a href="details.flannel"><img class="img-fluid" src="/images/1.jpg" alt="Flannel"></a>
            <h5 class="product-name">Flannel</h5>
            <h4 class="product-price">Rs 800</h4>
        </div>
        <div class="product">
            <a href="details.hoodie"><img class="img-fluid" src="/images/4.jpg" alt="Hoodie"></a>
            <h5 class="product-name">Hoodie</h5>
            <h4 class="product-price">Rs 1200</h4>
        </div>
        <div class="product">
            <a href="details.converse"><img class="img-fluid" src="/images/5.jpg" alt="Converse"></a>
            <h5 class="product-name">Converse</h5>
            <h4 class="product-price">Rs 1675</h4>
        </div>
        <div class="product">
            <a href="details.chain"><img class="img-fluid" src="/images/6.jpg" alt="Chain"></a>
            <h5 class="product-name">Thin Fiagro Chain Necklace</h5>
            <h4 class="product-price">Rs 350</h4>
        </div>
        <div class="product">
            <a href="details.leather"><img class="img-fluid" src="/images/7.jpg" alt="Leather Bomber Jacket"></a>
            <h5 class="product-name">Leather Bomber Jacket</h5>
            <h4 class="product-price">Rs 2900</h4>
        </div>
        <div class="product">
            <a href="details.bag"><img class="img-fluid" src="/images/8.jpg" alt="Hand bag"></a>
            <h5 class="product-name">Hand bag</h5>
            <h4 class="product-price">Rs 1600</h4>
        </div>
        <div class="product">
            <a href="details.bikershorts"><img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts"></a>
            <h5 class="product-name">Black Biker Shorts</h5>
            <h4 class="product-price">Rs 700</h4>
        </div>
        <div class="product">
            <a href="details.graphictee"><img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee"></a>
            <h5 class="product-name">Graphics Tee</h5>
            <h4 class="product-price">Rs 1000</h4>
        </div>
       <div class="product">
            <a href="details.airjordan"><img class="img-fluid" src="/images/11.jpg" alt="Air Jordan"></a>
            <h5 class="product-name">Air Jordan</h5>
            <h4 class="product-price">Rs 4500</h4>
        </div>
        <div class="product">
            <a href="details.book1"><img class="img-fluid" src="/images/12.jpg" alt="Books"></a>
            <h5 class="product-name">Milk and Honey</h5>
            <h4 class="product-price">Rs 300</h4>
        </div>
    </div>
 </section>
 @endsection
