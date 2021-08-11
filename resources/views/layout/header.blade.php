<?php
use App\Http\Controllers\ProductController;
$total= ProductController::cartItem();
?>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="navname">
                    <p><a href="/">JIFFSTORE</a></p>
                </div>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="login"><i class="far fa-user-circle"></i></a></li>
                        <li><a href="cart"><i class="fas fa-shopping-cart"></i>({{$total}})</a></li>
                        @if(Session::has('user'))
                        <li class="dropdown">
                            <i class="fas fa-caret-down"></i>
                            <div class="dropdown-content">
                                <a href="#"><i style="color:black; font-size: 12px; text-align: left; padding: 20px;">{{Session::get('user')['name']}}</i></a>
                                <a href="/logout">Log out</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>   