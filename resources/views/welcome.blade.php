@extends('layout')
@section('title')
@section('content')


@section('hero')
    <seaction class="seaction-main">
        <div class="center-title">
            <h1>From Plant, Not Synthetic </h1>
            <h5> NUTRITION FOR DAILY HEALTH</h5>
            <button class="shop_now"><a href="{{ route('shop') }}">shop now</a></button>
        </div>
    </seaction>
@endsection




<main>
    <!-- /*carousel--------------------------->


    <div id= "carousel">
        <div class="wrapper ">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <ul>
                    @foreach ($carouselProducts as $product)
                        <li class="card">
                            <a href="{{ route('product.show', $product->slug) }}">
                                <img src="{{ asset($product->images->first()->image) }}">
                                <p>{{ $product->name }}</p>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>

        </div>
    </div>
    <div class="carousel_break_line">
        <hr>
    </div>



    <!-- /*carousel--------------------------->

    <!-- /*blog-containt--------------------------->
    <div class="blog-container">
        <div class="firstdiv">
            <div class="right">
                <div class="image" id="fistimage">
                    <img src="https://earthful.me/cdn/shop/files/earthful_banners_-06_750x.jpg?v=1640592204"
                        alt="">
                </div>
            </div>
            <div class="left" id="fistbox" style="background-color: #BACCCC;">
                <div class="text">
                    <div class="boldtext">
                        100% PLANT DERIVED. <br> NOTHING SYNTHETIC.
                    </div>
                    <div class="lighttext">
                        Every product is based on the nutrition needs of Indians and <br> their diets and ONLY
                        contains ingredients that are backed by <br> modern science.
                    </div>
                    <a href="#"><button>Read our blogs</button></a>
                </div>
            </div>
        </div>
        <div class="firstdiv">
            <div class="left" id="secondbox" style="background-color: #D4D4D4;">
                <div class="text">
                    <div class="boldtext">
                        100% PLANT DERIVED. <br> NOTHING SYNTHETIC.
                    </div>
                    <div class="lighttext">
                        Achieve your daily nutrition needs via concentrated nutrients<br>
                        coming from food,
                        minus the harm and side effects of artificial <br> sources.
                    </div>
                    <a href="#"> <button>Know us better</button></a>
                </div>
            </div>
            <div class="right">
                <div class="image">
                    <img src="https://earthful.me/cdn/shop/files/earthful_banners_-04_750x.jpg?v=1640592043"
                        alt="">
                </div>
            </div>
        </div>
        <div class="firstdiv">
            <div class="right">
                <div class="image">
                    <img src="https://earthful.me/cdn/shop/files/earthful_banners_-05_750x.jpg?v=1640592092"
                        alt="">
                </div>
            </div>
            <div class="left" id="thirdbox" style="background-color: #CAA4A3;">
                <div class="text">
                    <div class="boldtext">
                        100% PLANT DERIVED. <br> NOTHING SYNTHETIC.
                    </div>
                    <div class="lighttext">
                        Since our practices are always aligned with your best <br>
                        interests, we do not shy away from keeping things <br>
                        transparent with you. Find all ingredients right in <br>
                        front of our packaging to help you make an informed <br>
                        choice.
                    </div>
                    <a href="#"> <button>Meet our clean ingredient</button></a>
                </div>
            </div>
        </div>



    </div>



    <!-- /*blog-containt--------------------------->

    <!-- /*adviser-profile--------------------------->
    <div class="advisercontainer">
        <div class="advisertitle">
            <h1>Our Scientific Advisors</h1>
            <p>Our Scientific Advisors, doctors and nutritionists guide us with latest scientific approaches &
                innovation. This ensures we deliver on our
                <br> promise to you.
            </p>
        </div>
        <div class="adviserpanel">
            <div class="profile">
                <div class="profileimg">
                    <img src="./assets/profile1.jpeg" alt="" srcset="">
                </div>
                <div class="profile-info">
                    <h1>Dr.xyz</h1>
                    <h2>MD,gynecology</h2>
                </div>
            </div>
            <div class="profile">
                <div class="profileimg">
                    <img src="./assets/profile2.jpeg" alt="" srcset="">
                </div>
                <div class="profile-info">
                    <h1>xyz</h1>
                    <h2>Registered Dietitian and Clinical Nutritionist</h2>
                </div>
            </div>
            <div class="profile">
                <div class="profileimg">
                    <img src="./assets/profile3.jpeg" alt="" srcset="">
                </div>
                <div class="profile-info">
                    <h1>Dr.xyz</h1>
                    <h2>MD, Internal Medicine</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /*adviser-profile--------------------------->

    <!-- /*featured product--------------------------->
    <div class="feturedcontainer">
        <div class="headline">
            <h1>Featured Product</h1>
        </div>
        <div class="feturedproduct">
            @foreach ($showcaseproducts as $product)
                <div class="productbox">
                    <div class="productimg">
                        <img src="{{ asset($product->images->first()->image) }}" alt="">
                    </div>
                    <div class="productinfo">
                        <h1>{{ $product->name }}</h1>

                        <div class="btn-group">
                            <a href="{{ route('add_to_cart', $product->id) }}">
                                <button type="button" class="add-cart-btn">
                                    Add to cart &nbsp; RS.{{ $product->price }}
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- /*featured product--------------------------->

    <!-- /*insta tagline--------------------------->
    <div class="instalink">
        <h1>Pledge to a Holistic Life!</h1>
        <h2>JOIN OUR INSTA COMMUNITY AT <a href="#">@EARTHFUL.ME</a></h2>
    </div>
    <!-- /*insta tagline--------------------------->


    <!-- /*subscrib-section--------------------------->
    <div class="box">
        <form action="">
            <h1>I want to get healthier</h1>
            <p>GET THE LATEST HEALTH NEWS IN YOUR INBOX!</p>
            <input type="text" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </form>
        <img src="./assets/bottom-background.jpg" alt="">
    </div>

    <!-- /*subscrib-section--------------------------->
</main>


<!-- main-containt------------------------------->
@endsection
