@extends('master')
@section('title')
Thin Fiagro Chain Necklace - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/6.jpg" alt="Gold Chain">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Thin Fiagro Chain Necklace</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 800</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 350</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="far fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p> &#9679;	Bought from Masala Beads</p></i>
            <p> &#9679;	Thick Chain<p>
            <p> &#9679;	Alloy</p>
            <p> &#9679;	Rhodium Coating</p>
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
            <button class="buy-btn"><a href="details.book">Add to cart</a></button>
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