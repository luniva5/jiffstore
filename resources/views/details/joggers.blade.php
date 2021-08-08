@extends('master')
@section('title')
Joggers - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/3.jpg" alt="Joggers">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Joggers</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 1450</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 800</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="far fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p> &#9679;	Durable and Comfortable</p></i>
            <p> &#9679;	Material : 100% Cotton<p>
            <p> &#9679;	Stretchable and Flexible</p>

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
        <a href="details.bikershorts"><img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts"></a>
        <h5 class="product-name">Black Biker Shorts</h5>           
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    <div class="product">
        <a href="details.converse"><img class="img-fluid" src="/images/5.jpg" alt="Converse"></a>
        <h5 class="product-name">Converse</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button> 
    </div>
    <div class="product">
            <a href="details.hoodie"><img class="img-fluid" src="/images/4.jpg" alt="Hoodie"></a>
            <h5 class="product-name">Hoodie</h5>
            <button class="buy-btn"><a href="">Add to cart</a></button>
        </div>
    <div class="product">
        <a href="details.graphictee"><img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee"></a>
        <h5 class="product-name">Graphics Tee</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    
</section>
@endsection