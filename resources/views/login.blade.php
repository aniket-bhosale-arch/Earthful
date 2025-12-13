
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
             <!-- css- font-link---------------------------> 
             <link rel="stylesheet" type="text/css" href="{{ ('../css/style.css') }}" >
             <link rel="stylesheet" type="text/css" href="{{ ('../css/productstyle.css') }}" >
             <link rel="stylesheet" href="{{ ('../css/all.min.css') }}">
            <!-- css- font-link---------------------------> 
            <!-- bootstrap------------------------- -->
            <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <!-- bootstrap------------------------- -->

</head>
<body>
<div id="wrapper">
        <header>
            <nav>
                <div class="menu-btn">
                    <a href="#"><i class="fas fa-bars"></i></a>
                </div> 
              
                <div class="side-bar">
                <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
                </div>
                    <div class="menu">
                        <div class="item">
                            <a href="#" class="sub-btn">Shop All<i class="fa-solid fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                            <a href="#" class="sub-btn">Multivitamin<i class="fa-solid fa-angle-right dropdown"></i></a>
                                <div class="sub-menu">
                                <a href="#" class="sub-item">Women Multivitamin18+</a>
                                <a href="#" class="sub-item">Men Multivitamin</a>
                                <a href="#" class="sub-item">Bone</a>
                                <a href="#" class="sub-item">Women Multivitamin40+</a>
                                <a href="#" class="sub-item">teen Multivitamin</a>


                                </div>
                                <a href="#" class="sub-item">plant protein</a>
                                <a href="#" class="sub-item">skin</a>
                                <a href="#" class="sub-item">hair</a>
                                <a href="#" class="sub-item">gut</a>
                                <a href="#" class="sub-item">sleep</a>
                                <a href="#" class="sub-item">pcos</a>


                            </div>
                    </div>
                        <div class="item"><a href="#" class="">Our story</a></div>
                        <div class="item"><a href="#" class="">ingredients</a></div>
                        <div class="item"><a href="#" class="">blog</a></div>
                        <div class="item"><a href="#" class="">FAQs</a></div>

                    </div>
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                
                <div class="logo">
                    <img src="./assets/logo.jpg" alt="">
                </div>   
                    <div class="header_search">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="#"><i class="fa-regular fa-user"></i></a>
                        <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                    </div>
            </nav>
        </header>                    
    </div>
        <div class="container">
        <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    </div>                
                @endif

                @if(session()->has('error'))
                  <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if(session()->has('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
        <form action="{{route('login.post')}}" method="POST" >
        @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
          
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
    <div class="box">
                <form action="">
                    <h1>I want to get healthier</h1>
                    <p>GET THE LATEST HEALTH NEWS IN YOUR INBOX!</p>
                    <input type="text" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
                <img src="./assets/bottom-background.jpg" alt="">
                </div>










    
    <footer>
    <div class="footer">
        <div class="social-links">
            <h1>Earthful</h1>
            <ul>
                <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="product-list">
            <h1>shop all</h1>
            <ul>
                <li><a href="#">skin</a></li>
                <li><a href="#">hair</a></li>
                <li><a href="#">Multivitamin</a></li>
                <li><a href="#">PCOCS</a></li>
                <li><a href="#">gut</a></li>
                <li><a href="#">sleep</a></li>

            </ul>
        </div>
        <div class="aboutus">
            <h1>About us</h1>
            <ul>
                <li><a href="#">Our journey</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Know our ingredient</a></li>

            </ul>
        </div>
        
        <div class="quicklinks">
            <h1>Quick links</h1>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Track your order</a></li>
                <li><a href="#">Return and refund policy</a></li>
                <li><a href="#">Terms and conditions</a></li>
                
            </ul>
        </div>
    </div>
    <hr>
    <h3>2023 Earthful</h3>
    </footer>
            


<script src="{{ ('../js/jquery3.7.0 .min.js') }}"></script>

<script src="{{ ('../js/main.js') }}" defer></script>    
</body>
</html>
