@extends('master')
@section('title')
Flannel - Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="/images/5.jpg" alt="Converse">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>Converse</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs 4900</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs 2999</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p> &#9679;	Never worn</p></i>
            <p> &#9679;	Rubber outsole for durable traction<p>
            <p> &#9679;	Size EU:39</p>

            </div>      
        </div>
        <div class="btn">
        <button class="buy-btn"><a href="">Buy now</a></button>
        <button class="buy-btn"><a href="">Add to cart</a></button>   
        </div>
    </div><br><br>
    <hr>
<section class="youmaylike">
    <h1 class="extra">You may also like</h1><br>
    <div class="product">
        <img class="img-fluid" src="/images/8.jpg" alt="Hand bag">
        <h5 class="product-name">Hand bag</h5>
        <button class="buy-btn"><a href="details.bag">Buy now</a></button>            <button class="buy-btn"><a href="">Add to cart</a></button>
    </div> 
    <div class="product">
        <img class="img-fluid" src="/images/9.jpg" alt="Biker Shorts">
        <h5 class="product-name">Black Biker Shorts</h5>
        <button class="buy-btn"><a href="details.bikershorts">Buy now</a></button>            <button class="buy-btn"><a href="">Add to cart</a></button>
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
</section>
@endsection