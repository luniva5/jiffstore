@extends('master')
@section('title')
Jiffstore - Come thrift with us
@endsection
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
    @foreach($products as $item)
        <div class="product">
            <a href="detail/{{$item['id']}}">
            <img class="img-fluid" src="{{$item['gallery']}}">
            </a>
            <h5 class="product-name">{{$item['name']}}</h5>
            <h4 class="product-price">Rs {{$item['sellingprice']}}</h4>
         </div>
    @endforeach
    </div>
</section>
@endsection
