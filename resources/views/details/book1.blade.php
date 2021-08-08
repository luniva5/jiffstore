@extends('master')
@section('title')
Milk and Honey - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/12.jpg" alt="Books">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Milk and Honey</b></h2>
            <i>by Rupi Kaur</i>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 550</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 300</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="far fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p>Milk and honey' is a collection of poetry and prose about survival. About the experience of violence, abuse, love, loss, and femininity. It is split into four chapters, and each chapter serves a different purpose. Deals with a different pain. Heals a different heartache. 'milk and honey' takes readers through a journey of the most bitter moments in life and finds sweetness in them because there is sweetness everywhere if you are just willing to look.</p></i>
            </div> 
        </div>
        <div class="options">
        <div class="buyoption">
        <button class="buy-btn"><a href="checkout">Buy now</a></button>
        <button class="buy-btn"><a href="">Add to cart</a></button>   
        </div>
        </div>
    </div><br><br>
    <hr>
<section class="youmaylike">
    <h1 class="extra">You may also like</h1><br>
    <div class="product">
            <a href="details.book"><img class="img-fluid" src="/images/2.jpg" alt="Book"></a>
            <h5 class="product-name">Alchemist</h5>
            <button class="buy-btn"><a href="">Add to cart</a></button>
         </div>
    <div class="product">
        <a href="details.bikershorts"><img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts"></a>
        <h5 class="product-name">Black Biker Shorts</h5>            
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    <div class="product">
        <a href="details.graphictee"><img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee"></a>
        <h5 class="product-name">Graphics Tee</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div> 
    <div class="product">
        <a href="details.airjordan"><img class="img-fluid" src="/images/11.jpg" alt="Air Jordan"></a>
        <h5 class="product-name">Air Jordan</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
</section>
@endsection