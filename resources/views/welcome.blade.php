   <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>@yield('title')</title>
            <!-- css- font-link---------------------------> 
            <link rel="stylesheet" type="text/css" href="{{ ('../css/style.css') }}" >
            <link rel="stylesheet" href="{{ ('../css/all.min.css') }}">
            <!-- css- font-link---------------------------> 


        </head>
        <body>
            
        
      <!--main-containt-------------------------------> 
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
                            @foreach($sidebarCategories as $category)

                                @php
                                    $products = $category->products;
                                    $count = $products->count();
                                @endphp

                                @if($count === 0)
                                    @continue
                                @endif

                                <li class="sidebar-item">

                                    {{-- MULTIPLE PRODUCTS → TOGGLE --}}
                                    @if($count > 1)

                                        <span class="category-toggle">
                                            {{ $category->name }}
                                            
                                        </span>

                                        <ul class="product">
                                            @foreach($products as $product)
                                                <li>
                                                    <a href="{{ route('product.show', $product->slug) }}">
                                                        {{ $product->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                    {{-- SINGLE PRODUCT → DIRECT --}}
                                    @else

                                        <a href="{{ route('product.show', $products->first()->slug) }}">
                                            {{ $category->name }}
                                        </a>

                                    @endif

                                </li>

                                @endforeach

                            </div>
                    </div>
                        <div class="item"><a href="#" class="">Our story</a></div>
                        <div class="item"><a href="#" class="">ingredients</a></div>
                        <div class="item"><a href="#" class="">blog</a></div>
                        <div class="item"><a href="#" class="">FAQs</a></div>

                    </div>
                    <div class="social-links">
                     
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
            </div>
                </div>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                
                <div class="logo">
                <a href="/"> <img src="./asset/logo.jpg" alt=""></a>
                </div> 
                <div class="right-menu">
                    <button> 
                        <i   class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div class="search-box">
                       <form id="searchForm" action="{{url('/search')}}" method="get" onsubmit="return false;">
                        <div class="row">
                            <input type="text" name="search" id="search"  class="input-box" placeholder="search" autocomplete="off">
                            <button type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                       </form>
                        <div class="product-result">
                        
                        </div>
                    </div>
                    <button>
                    <a href="/login"><i class="fa-regular fa-user"></i></a>
                    </button>
                    <button id="open_cart_btn">
                            <a href="#"><i class="fa-solid fa-bag-shopping"><span>{{ count((array)session('cart')) }}</span></i> </a>
                    </button> 

                </div>
                   
              
                        <div id="sidecart" class="sidecart ">
                        @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                            @php 
                            $total += ($details['price'] * $details['quantity']);  
                            @endphp
                        @endforeach
                            <div class="cart_content">
                                <div class="cart_header">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    <div class="header_titlt">
                                        <h2>Cart</h2>
                                    </div>
                                    <span id="close_btn" class="close_btn">&times;</span>
                                </div>
                                    <div class="cart_items">
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        <div class="cart_item">
                                            <div class="item_img">
                                                    <img src="{{$details['image']}}" alt="">
                                            </div>
                                            <div class="item_details">
                                                <p>{{$details['name']}}</p>
                                            <strong>RS.{{$details['price']}}</strong>
                                                <span">Quantity:{{$details['quantity']}}
                                               
                                                </span>
                                            </div>
                                        </div>   
                                        @endforeach
                                        @endif                    
                                    </div>
                                        <div class="cart_action">
                                            <div class="subtotal">
                                                <p>SUBTOTAL:</p>
                                                <P>RS. <span id="subtotal_price">{{$total}}</span> </P>
                                            </div>
                                            
                                            <button> <a href="{{ route('cart') }}">View all</a></button>
                                            <button>Checkout</button>
                                        </div>
                            </div>
                        </div>    
                    </div>
            </nav>
        </header>
        
                                <seaction class="seaction-main">
                                      <div class="center-title">
                                        <h1>From Plant, Not Synthetic </h1>
                                        <h5>   NUTRITION FOR DAILY HEALTH</h5>
                                        <button class="shop_now"><a href="{{route('shop')}}">shop now</a></button>
                                    </div>
                                </seaction> 
                              
       
    </div>
    
    <main> 
<!-- /*carousel---------------------------> 


    <div id= "carousel">
        <div class="wrapper ">
            <i id="left" class="fa-solid fa-angle-left"></i>   
                <div class="carousel"> 
                    <ul>
                    @foreach($carouselProducts as $product)
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
          <img src="https://earthful.me/cdn/shop/files/earthful_banners_-06_750x.jpg?v=1640592204" alt="">
        </div>
      </div>
      <div class="left" id="fistbox" style="background-color: #BACCCC;" >
        <div class="text" >
          <div class="boldtext">
            100% PLANT DERIVED. <br> NOTHING SYNTHETIC.
          </div>
          <div class="lighttext">
          Every product is based on the nutrition needs of Indians and <br> their diets and  ONLY contains ingredients that are backed by <br> modern science.
          </div>
          <a href="#"><button>Read our blogs</button></a>
        </div>
      </div>
    </div>
    <div class="firstdiv">
      <div class="left" id="secondbox"  style="background-color: #D4D4D4;">
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
          <img src="https://earthful.me/cdn/shop/files/earthful_banners_-04_750x.jpg?v=1640592043" alt="">
        </div>
      </div>
    </div> 
    <div class="firstdiv">
      <div class="right">
        <div class="image">
          <img src="https://earthful.me/cdn/shop/files/earthful_banners_-05_750x.jpg?v=1640592092" alt="">
        </div>
      </div>
      <div class="left" id="thirdbox" style="background-color: #CAA4A3;">
        <div class="text" >
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
      <p>Our Scientific Advisors, doctors and nutritionists guide us with latest scientific approaches & innovation. This ensures we deliver on our
         <br> promise to you.</p>
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
        @foreach($showcaseproducts as $product)
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
      <footer>
    <div class="footer">
            <div class="social-links">
                    <div class="footer_logo">
                        <img src="./assets/logo.jpg" alt="">
                    </div>   
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
    <h3> © 2023,Earthful</h3>
</footer>

 
<script src="{{ ('../js/jquery3.7.0 .min.js') }}"></script>
<script src="{{ ('../js/main.js') }}" defer></script>

<script>
$(document).ready(function(){
    $('#search').on('keyup', function(){
        let value = $(this).val();

        if(value.length < 2){
            $('.product-result').html('');
            return;
        }

        $.ajax({
            type: "GET",
            url: "{{ url('/search') }}",
            data: { search: value },
            success: function(data){
                $('.product-result').html(data);
            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });
    });
});
</script>


    <!-- // document.addEventListener('DOMContentLoaded', function() {
    //     var searchInput = document.getElementById('search');
    //     var searchForm = document.getElementById('searchForm');

    //     searchInput.addEventListener('keydown', function(event) {
    //         if (event.key === 'Enter') {
    //             event.preventDefault(); // Prevent form submission
    //             var searchQuery = searchInput.value.trim();
    //             if (searchQuery !== '') {
    //                 window.location.href = '/product_details/' + encodeURIComponent(searchQuery);
    //             }
    //         }
    //     });

    //     searchForm.addEventListener('submit', function(event) {
    //         event.preventDefault(); // Prevent form submission

    //         // Perform AJAX request to search endpoint
    //         fetch('/search', {
    //             method: 'GET', // Use GET method for form submission
    //             headers: {
    //                 'X-Requested-With': 'XMLHttpRequest'
    //             }
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             // Display search results
    //             var productResult = document.querySelector('.product-result');
    //             productResult.innerHTML = data;
    //         })
    //         .catch(error => {
    //             console.error('Error:', error);
    //         });
    //     });
    // }); -->

    <script>
document.querySelectorAll('.category-toggle').forEach(toggle => {
    toggle.addEventListener('click', function () {

        // Close other open lists (optional)
        document.querySelectorAll('.product.open').forEach(list => {
            if (list !== this.nextElementSibling) {
                list.classList.remove('open');
            }
        });

        // Toggle current category
        this.nextElementSibling.classList.toggle('open');
    });
});
</script>





</body>
</html>



