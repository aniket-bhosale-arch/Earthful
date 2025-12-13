<div id="wrapper">
        <header style=background:#D6CABC;>
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
                                <a href="{{route('women_multi')}}" class="sub-item">Women Multivitamin18+</a>
                                <a href="{{route('men_multi')}}" class="sub-item">Men Multivitamin</a>
                                <a href="{{route('sleep')}}" class="sub-item">Bone</a>
                                <a href="#" class="sub-item">Women Multivitamin40+</a>
                                <a href="{{route('teen_multi')}}" class="sub-item">teen Multivitamin</a>


                                </div>
                                <a href="{{route('plantprotein')}}" class="sub-item">plant protein</a>
                                <a href="{{route('skin')}}" class="sub-item">skin</a>
                                <a href="{{route('hair')}}" class="sub-item">hair</a>
                                <a href="{{route('gut')}}" class="sub-item">gut</a>
                                <a href="{{route('sleep')}}" class="sub-item">sleep</a>
                                <a href="{{route('pcos')}}" class="sub-item">pcos</a>


                            </div>
                    </div>
                        <div class="item"><a href="#" class="">Our story</a></div>
                        <div class="item"><a href="#" class="">ingredients</a></div>
                        <div class="item"><a href="#" class="">blog</a></div>
                        <div class="item"><a href="#" class="">FAQs</a></div>

                    </div>
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                
                <div class="logo">
                <a href="/"> <img src="../assets/logo.jpg" alt=""></a>
                </div> 
                <div class="right-menu">
                    <button> 
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div class="search-box">
                       <form  id="searchForm" action="{{url('/search')}}" method="get">
                       <div class="row">
                            <input type="text" name="search" id="search"  class="input-box" placeholder="search" autocomplete="off">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
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
        
                    
    </div>