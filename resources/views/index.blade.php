@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product List</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
 <section id="home">
     <div class="container">
         <h1>Lets thrift</h1>
         <p>COME THRIFT WITH US</p>
         <button>Shop Now</button>
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
        <div class="product">
            <img class="img-fluid" src="Products/2.jpg" alt="Book">
            <h5 class="product-name">Book</h5>
            <h4 class="product-price">Rs 250</h4>
            <button class="buy-btn">Buy now</button>
         </div>
        <div class="product">
            <img class="img-fluid" src="Products/3.jpg" alt="Trousers">
            <h5 class="product-name">Trousers</h5>
            <h4 class="product-price">Rs 850</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/1.jpg" alt="Flannel">
            <h5 class="product-name">Flannel</h5>
            <h4 class="product-price">Rs 800</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/4.jpg" alt="Hoodie">
            <h5 class="product-name">Hoodie</h5>
            <h4 class="product-price">Rs 1250</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/5.jpg" alt="Converse">
            <h5 class="product-name">Converse</h5>
            <h4 class="product-price">Rs 1300</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/6.jpg" alt="Chain">
            <h5 class="product-name">Gold plated Chain</h5>
            <h4 class="product-price">Rs 850</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/7.jpg" alt="Bomber jacket">
            <h5 class="product-name">Bomber Jacket</h5>
            <h4 class="product-price">Rs 1450</h4>
            <button class="buy-btn">Buy now</button>
        </div>
        <div class="product">
            <img class="img-fluid" src="Products/8.jpg" alt="Hand bag">
            <h5 class="product-name">Hand bag</h5>
            <h4 class="product-price">Rs 1750</h4>
            <button class="buy-btn">Buy now</button>
        </div>
    </div>
 </section>
</body>
</html>
