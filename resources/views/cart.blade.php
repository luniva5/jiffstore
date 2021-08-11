@extends('master')
@section('title')
Cart - Jiffstore
@endsection
@section('content')
<section class="cart-item">
    <h1 class="extra">Your Cart</h1><br>    
<div class="row">
@foreach($products as $item)
    <div class="product">
        <a href="detail/{{$item->id}}">
        <img class="img-fluid" src="{{$item->gallery}}">
        </a>
        <h5 class="product-name">{{$item->name}}</h5>
        <h4 class="product-price">Rs {{$item->sellingprice}}</h4>
        <a href="removecart/{{$item->cart_id}}"><button class="shop-btn">Remove from Cart</button></a>
    </div>
     
@endforeach
</div>
</section>
@endsection