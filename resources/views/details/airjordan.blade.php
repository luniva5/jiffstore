@extends('master')
@section('title')
Air Jordan - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/11.jpg" alt="Air Jordan">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Air Jordan</b></h2>
            <i>by Paulo Coelho</i>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 6550</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 4500</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p>Jordan Brand adds a new colorway to its hot streak of Jordan 1 releases with the Air Jordan 1 “Obsidian / University Blue”, now available</p></i>
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
        <a href="details.bag"><img class="img-left" src="/images/8.jpg" alt="Hand bag"></a>
        <h5 class="product-name">Hand bag</h5>            
        <button class="buy-btn"><a href="">Add to cart</a></button>
    </div> 
    <div class="product">
        <a href="details.chain"><img class="img-fluid" src="/images/6.jpg" alt="Chain"></a>
        <h5 class="product-name">Thin Fiagro Chain Necklace</h5>
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
    
</section>
@endsection
