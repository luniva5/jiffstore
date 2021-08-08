@extends('master')
@section('title')
Leather Bomber Jacket - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/7.jpg" alt="Bomber Jacket">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Leather Bomber Jacket</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 3550</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 2900</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p> &#9679;	Style: Vintage</p></i>
            <p> &#9679;	Material: Leather<p>
            <p> &#9679;	Size: Oversized</p>

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
        <a href="details.airjordan"><img class="img-fluid" src="/images/11.jpg" alt="Air Jordan"></a>
        <h5 class="product-name">Air Jordan</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
    <div class="product">
        <a href="details.book1"><img class="img-fluid" src="/images/12.jpg" alt="Books"></a>
        <h5 class="product-name">Milk and Honey</h5>
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div>
</section>
@endsection