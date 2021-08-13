@extends('master')
@section('title')
My Orders - Jiffstore
@endsection
@section('content')
<section class="cart-item">
    <h1 class="extra">My Orders</h1><br><br>    
<div class="row">
@foreach($orders as $item)
    <div class="product">
        <a href="detail/{{$item->id}}">
        <img class="img-fluid" src="{{$item->gallery}}">
        </a>
        <h5 class="product-name">{{$item->name}}</h5>
        <h4 class="product-price">Rs {{$item->sellingprice}}</h4>
        <div class="status">
        <hr>
        <h4>Delivery Status: {{$item->status}}</h4>
        <h4>Address: {{$item->address}}</h4>
        <h4>Payment Status: {{$item->payment_status}}</h4>
        <h4>Payment Method: {{$item->payment_method}}</h4>
        </div>
    </div>  
@endforeach
<hr><br><br><br><br>
<a href="/"><button class="buy-btn">Continue Shopping</button></a>
</div>
</section>
@endsection