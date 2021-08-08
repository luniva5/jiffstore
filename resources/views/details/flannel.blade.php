@extends('master')
@section('title')
Flannel - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/1.jpg" alt="Flannel">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Flannel</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 1500</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 800</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p> &#9679;	Style:Casual</p></i>
            <p> &#9679;	Material : Woolen<p>
            <p> &#9679;	Pattern: Plaid</p>

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
        <a href="details.bag"><img class="img-fluid" src="/images/8.jpg" alt="Hand bag"></a>
        <h5 class="product-name">Hand bag</h5>            
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div> 
    <div class="product">
        <a href="details.chain"><img class="img-fluid" src="/images/6.jpg" alt="Chain"></a>
        <h5 class="product-name">Thin Fiagro Chain Necklace</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    <div class="product">
        <a href="details.leather"><img class="img-fluid" src="/images/7.jpg" alt="Leather Bomber Jacket"></a>
        <h5 class="product-name">Leather Bomber Jacket</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    <div class="product">
        <a href="details.graphictee"><img class="img-fluid" src="/images/10.jpg" alt="Graphics Tee"></a>
        <h5 class="product-name">Graphics Tee</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
</section>
@endsection