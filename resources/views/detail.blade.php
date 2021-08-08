@extends('master')
@section('title')
{{$product['name']}}- Jiffstore
@endsection
@section("content")
<!--------single product details -------->
<section>
    <div class="productinfo">
        <div class="row-container img">
            <img class="img-left" src="{{$product['gallery']}}">
        </div>
        <div class="row-container details">
            <h2 class="product-name"><b>{{$product['name']}}</b></h2>
            <h4>Original price</h5>
            <h4 class="product-price"><del>Rs {{$product['originalprice']}}</del></h4>
            <h4>Selling Price</h5>
            <h4 class="product-price">Rs {{$product['sellingprice']}}</h4>
            <h4>Quality</h4>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <br><br>
            <div class="product-desc">
            <i><h5 class="product-text">Description</h5>
            <p>{{$product['description']}}</p></i>
            </div>      
        </div>
        </div>
        <div class="options">
            <div class="buyoption">
                <button class="buy-btn">Buy now</button></div>
                <div class="buyoption">
                <form action="/add_to_cart" method="POST">
                    @csrf 
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="buy-btn">Add to cart</button>   
                </form>
            </div>
        </div>
    <hr>
<section class="youmaylike">
    <h1 class="extra">You may also like</h1><br>
       
</section>
@endsection