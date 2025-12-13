    @extends('layout')
    @section('title','gut')
    @section('content')

    <main>
      
        <!-- productinfo-------------------------------------- -->

        @if(session('success'))
        <div class="toast show">
            <i class="fa-solid fa-check check"></i>
            <div class="toast-content">
                <div class="message">
                    <span class=" text text1">succsess</span>
                        <span class="alert-success text text-2">
                        {{session('success')}}
                    </span>
                </div>
            </div>
            <div class="progress"></div>
        </div>
        @endif

        <div class="card-wrapper">
            <div class="container">
                <div class="product-div">
              @foreach($products as $product)

                    <div class="product-div-left">
                    <div class="small-img-container">
                            <div class="small-img-col">
                                <img src="./assets/productshowcase/gut1.jpg" alt="" srcset=""class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/productshowcase/gut2.jpg" alt="" srcset="" class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/productshowcase/gut3.jpg" alt="" srcset="" class="small-img"> 
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/productshowcase/gut4.jpg" alt="" srcset="" class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/productshowcase/gut4.jpg" alt="" srcset="" class="small-img">
                            </div>
                        </div>
                        <div class="img-container">
                             <img src="{{$product->image}}" alt="" srcset=""class="small-img">

                        </div>
                       
                    </div>
                    <div class="product-div-right">
                        <h1>{{$product->name}}</h1>
                        <h3>{{$product->description}}</h3>
                        <span class="product-price">RS.{{$product->price}}.00</span>
                        <div class="discription">
                        <ul>
                            <li>Contains All Amino Acids. India's 1st Plant Protein to have PDCAAS = 1</li>
        
                            <li>Indonesian Cocoa Beans for taste. NO Synthetic Flavours</li>
                            <li>6 INGREDIENTS Only. 100% Plant. No side effects.</li>
                            <li>Formulated by doctors, nutritionists</li>
                            <li>FSSAI & GMP approved.</li>
                        </ul>
                        </div>
                        <div class="use-direction">
                                   <h1>How to use</h1>
                            <div class="instruction">
                                <div class="right-icon">
                                <img src="./assets/how to use.jpg" alt="" srcset=""> 
                                </div>
                                <left-text>
                                <span>Add 2 scoops (~42 g) to 300 ml water/milk.</span>
                                <span>Consume it 30-90 minutes before or after exercise.</span>

                                </left-text>
                               
                            </div>                        
                        </div>
                            <form action="" method="POST">
                                @csrf
                                <div class="btn-group">    
                                    <input type="hidden"  >
                                <a href="{{route('add_to_cart', $product->id)}}"><button type="button" class="add-cart-btn">Add to cart</button> 
                                </div> </a> 
                            </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- productinfo-------------------------------------- -->

        <!-- middleimage--------------------------------------------> 
        <div class="middle-image">
            <img src="./assets/productshowcase/gut-middle-img.jpg" alt="">
        </div>
        <!-- middleimage--------------------------------------------> 
        <!-- ingredients-display--------------------------------------------> 
        <div class="ing-container">
            <div class="tagline">
                <h1>Our ingredients!</h1>
                <p>We uphold transparency right from selecting our ingredients to the point they reach you. <br>  Rest assured, you will know as much as we do. Not any less.</p>
            </div>
            
            <div class="ing-list">
                <div class="popupcontent">
                    <div class="ing" >
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="text-box">
                        <h1 id="show-popup" onclick="openPopup()">chromium</h1>
                        </div> 
                    </div>
                    <div class="popup" id="popup" >
                        <h1 class="pop-mainhead">PUMPKIN SEED</h1>
                        <span onclick="closePopup()">&times;</span>
                        <p class="pop-subhead">SEED PACKED WITH HAIR GOODNESS</p>
                        <p class="pop-subhead1">Botanical Name - Cucurbita maxima</p>
                        <div class="pop-div">|</div>
                        <p class="pop-subhead">INTRODUCING THE SOURCE</p>
                        <p class="pop-content">If you have been throwing this seed into the waste bin then you have been discarding a treasure. These seeds are packed with valuable nutrients necessary for your hair health.</p>
                        <p class="pop-subhead">DID YOU KNOW?</p>
                        <p class="pop-content">Pumpkin seeds were by the archaeologists in the caves of Mexico which date back to 7000 B.C.</p>
                    </div>  
                </div>
                <div class="popupcontent">
                    <div class="ing" >
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="text-box">
                        <h1 id="show-popup" onclick="openPopup()">chromium</h1>
                        </div> 
                    </div>
                    <div class="popup" id="popup" >
                        <h1 class="pop-mainhead">PUMPKIN SEED</h1>
                        <p class="pop-subhead">SEED PACKED WITH HAIR GOODNESS</p>
                        <p class="pop-subhead1">Botanical Name - Cucurbita maxima</p>
                        <div class="pop-div">|</div>
                        <p class="pop-subhead">INTRODUCING THE SOURCE</p>
                        <p class="pop-content">If you have been throwing this seed into the waste bin then you have been discarding a treasure. These seeds are packed with valuable nutrients necessary for your hair health.</p>
                        <p class="pop-subhead">DID YOU KNOW?</p>
                        <p class="pop-content">Pumpkin seeds were by the archaeologists in the caves of Mexico which date back to 7000 B.C.</p>
                    </div>  
                </div>
                <div class="popupcontent">
                    <div class="ing" >
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="text-box">
                        <h1 id="show-popup" onclick="openPopup()">chromium</h1>
                        </div> 
                    </div>
                    <div class="popup" id="popup" >
                        <h1 class="pop-mainhead">PUMPKIN SEED</h1>
                        <p class="pop-subhead">SEED PACKED WITH HAIR GOODNESS</p>
                        <p class="pop-subhead1">Botanical Name - Cucurbita maxima</p>
                        <div class="pop-div">|</div>
                        <p class="pop-subhead">INTRODUCING THE SOURCE</p>
                        <p class="pop-content">If you have been throwing this seed into the waste bin then you have been discarding a treasure. These seeds are packed with valuable nutrients necessary for your hair health.</p>
                        <p class="pop-subhead">DID YOU KNOW?</p>
                        <p class="pop-content">Pumpkin seeds were by the archaeologists in the caves of Mexico which date back to 7000 B.C.</p>
                    </div>  
                </div>
                <div class="popupcontent">
                    <div class="ing" >
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHYAsQMBEQACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAADBAUCBgEAB//EAEEQAAIBAwIDBQUDCQYHAAAAAAECAwAEERIhBTFBEyJRYXEGFIGRoTKx0RUjQlJTVJLB4RYkM5PS8CVDYpSiwvH/xAAaAQADAQEBAQAAAAAAAAAAAAABAgMEAAUG/8QAMBEAAgICAgEDAQcEAgMAAAAAAAECEQMhEjEEE0FRIhQyYXGBkfAjobHhwdEFM0L/2gAMAwEAAhEDEQA/APyqB8GlaPNkhstkVFokzGaFBPsUrOHIE1JipyY8egUsemTPQ1PkGgEy7EU0WMkKYw29W9ijjoMmM0jIydHrmggIyjkGi0dJBtRIqdE6BSA53FVj0UiCYURkwLtTpFEgDvVUiiQBjTFUZzXBM0QnlcE+rjjcUZkkRAVXUwXU5wBnxPQVz0rOLv8AZK//AHnh/wD3IqH2iPw/2ByFwCGqilZh9hmPJFJOSRFmtNQ5gsJGuaPKzrHYmCr51GRSIC6lApUrY5OacE6auoDIywLDanWg8z5Sa57JsIAWpKEugiQda5sN2HVQuxpOx4pGZQpFMjmhKY4FUWwQQhI29XSNMUDJph6MMaIUZNcMeGuOPq4J5XHFH2f1fli0KP2ZD51mPWF9R4fdSZPuMEnUWfpfYeVl/C1eVa/jMXJfxnABcmvQuiVjUMeelZpzJSYYwnwqXI5Jm0jxTKQ1GyNtqI6ErlSTRiw3ROeIhs1pjLRWM1QxFuKVk5dmjGQaXkLYeJB1pWxe2GOByoNjApAxyRXRY6FZJSi4NVqylWhOaXPWqxiNGIqTmqljw0Qo7v2LW1l4JJCAjtJIfeFIzn9XPlj+deb5cprIv7GXyJTjLXRAvOACKzvb9rgQwpIwt4yuTINWBvnb61qhn5SUKv5LxypyUfc5/G2a0FTyuOPsVxxdseHX3C7iG7lhzGR31RtTBGHPA9ajKcJpxTIZJwneO9l73zhv75DWbhk+DD9myESBdRFNOVIaRXtYBgGsGSYIxGHjAHSki9lKF2xmtUVQjM7VzCha4AooLQnIoqsULVHkK9/yppDWMyAaalsMlowjCi0RN6xXUHYQOhBziuSHjIj8QbDHBrVjRpx7ECedWoukWrr2Y4lbcLXiDiIxlNbRqx7SNfFhjHyJqEfKxSnwT2DlG6FvZ2QR8atXZo1AYgmSPWoyCNx/Ppz6U+ZXjYWtM7i4tbaBjcxQtbSnuvJEAVYHqcc8c842rzsU5SfGWzBGTf0v+560UL20ct1GFhh/w48AnPLYeP3fOhJyjJxX8/0c+Sbin+bOI9pkuTxFrm6hWLtxmNVIOFGwzjrtXo4HFwqL6N2NpxVOyRVhzWNjXHHX8D4rHeRJbTkpcRKMN0cDr5GsWfHx37Hn+Tgd84lbUv7SD5CsnGJmvIQYowm9Um7LTpDK3Ij2qLhYqkZkvQRgGmjidj8gcMvaSAZq8lSDFWxqRQIyQeVSXZbhom3EprRGJJi4bJ3qlUEIGCmkasLVBNQYc6FUTYKeK4jSKQxOEmOI2xsx5bU0eLfZSMLNXfD7+2umgEZmKoZC0OWGkbE/AkCjCWOceV/gPHHGStMTjuGkYImSzHCgbkmncEuzvRG5PZ3jczTAcPmJhxryVHPljfvfDNKs+GKVy7KwioqyMIJXkaFI3aUZBRVJI+FabS2+ivWz9Nlv04jwK6lClfzDh4iuGVtP2SPjXhwwyxZlH8dGKSamiJwnhn5Dgiu1hmub9xp7ND+iftgeg6+OPHFa8mV55ON1Eq5vJa9ixPKs1qRFdG3JBwsvdKnwwdjWeCkpdX+X80ZlCUXpWhS1aNbh/eZDJO4DrEN+zQgYA6AffVfJTu1pD50/bSIXtpAmLa6LMJXYpoJ2CjGMfE7+tX8KWnFFvGnyTVdHPWVpLe3UdtBp7SQ4GpsDx3NbZNQjyfRobS2yjdcBurVolcoxdgvdz3Sf5UkM0ZElmjI6Lh/D4OHsj21uwmZez7VhrJJxk+C/LasU8s8lpvRllmlPrr4KPunFP14vnH+NT5QJ6+F+5zYkyKdw2JK2BlenjEMULMxzVopFkglvKY5ARQnC0NHTsoG4Lx4FS9Oh3k1QnImTvVCLBaMUUdZhzvTKJTsv8K4VbXdisqySSOR3wu2g+H9ay5skoSqiU6TKIsieHe6Sd5oxmJiPA5X5VKLbnzS7ApVLkhiG4iuY4JkIHatoweYYjJHrtUZY5Qu/YHF20R0tY7H21hkZdKSqXU4wFcgj+R+daZTlPxGl2aYZOWL8TrjdiErHIp0PnDdBy515soctonjemiXwuySH3mdQokvJ2dzjPc1HHh6+pNas2RtqL9kNklb4voBPcW7aQLeVQzhCyHI57ZGxxnHp9athVurFxcbpP9z03kkMKXkwjFxKmEiY7DPTPPA6mpuEbcPYRyV8bpGXvLK6TsbqKSF3BBR11K+OeCNvuNdwnF8ovoHDj9WNk/h8QsZS2FkAQRqqnfusSM+HdZPnWjPNTjFlPIlzgmMWtnJf3LXN4iM4JWJcZWNAemep55rNly+nFQh+v4sHJpcYELjsyL7Q2x4SsbzwqqnsgMM4J2257bGvQ8ZP0H6ml+JqxpvH9ZahnvLyAPdWKxAYbV2uSN88sfTNJxhF1yMrUFLTGNQ1alYsr7AA+nSoSjKP7kJwcWb0D9U13ImckGNa2jRR8x2oHJC7c6ZFYmo85o2dIdjGFpZE7MvnNKAyB40yR1gZV8adMeLC2E1zDNptJ3haQhe6+kHwzQklJbQXs7GOwEMQ7QySztkCRm1EEczk5xXnPM71ok209gZLVpNMUTCUjBLOC5yOXeyCPgaK8j5QyyP3NtPGFaO7tZTp5yPyPnnmPU49aHGMpXCVD0ltaDTNJJIhmWdVaNcGNgQBjkcH6iozSjLQr+iVGYriOATLM4iiXDSzS4BJ5Y9dh/EKvlx86kt37ItkTdOPuBv4uIyLNLA2h2OpUkUOh8uWd/WhgyQTVrX9yKnHkuaFn/wfeexaV2OUXYYBORueWAeXlVZqpvk6BlinN8nSD26iSPEcE4ZRq1NpIX1OceNR4rtsnwraeibczGO8M0c8ZEUkbaFByyMNJG4x9oLv+FbYQjLHX8s2Y4xliodQW9wpgnlv41PeKo40tz223I9aySlKP1RSIRypK0qFOMQ2vCeHQzRQQQ3HvCGN0iAfIOTg+GM/SrYHPJJpu1RTBLJO03oxZ8QR9BuE94WQkCQNuu2c45dPLnR9N79jO49qS6NnidtLddhCly8iNlidKKv9enKqqLjG5dfqWhBxhcpfSwnvx/VuP8lf9VCsXz/n/oXhg+TnqsA9NCjgejJoNUUXQzFCKUVuw+AFoi0BcgGuSFZksMUUAE+9EZaMhacaxy1nmhMehyVRtQjYkpnzFSnFPsCkdNw3iMVzDpmuo4JWY5iVNO3TB3z1/CvPzYWulaA1X3Qj3ir3bGEuc5Mj9R5D/ZHhUo46VsXra2ZE5iUiC5EbP/y5Tg5/n8N/SnjGUu1aGhKXa2iQ0rXEyLe3TC6SbULaRg+kaWBIcbDIIIDY5c969BwUYcYqvxPQmvoaWh8W0cQeN73QuN0eTRt6ZFYPrvcdnm+nki9ALK77O3CXUi3NqpKRSLJqbIJ/9QnxzWjyYt046fuW8mKcYt9mnmt3bsLeeVsEOECNpz445VnhGX3pIzRi0rvQlxG3keQFTCn92bcyDuuCHAIO+O5mtvj8VFq/f/Rt8dRSaTKSyqJezN5bQzsg0q8ZIJ64yRnrUJKPC0m0RcILaVogcT4dK2u+4jxEXKRMFYIuMqTju9MZIrTiyr7mONF8eWErhBbN2ixQKr28BcbHQp06h8R99BOTf1szub5VkYbg9m0JmSbJdm7QOVxrUjY/PO1HO7afsHy98Wuih2cX7WP+IVCzHwfwcvq3rbRtoNGM0HoKRplxQYXo3ExPSuSAlbCscKSa5oZx0L6tTb1yROMbZ467ZWjQ0oUaRM7muIthCgArjjAbTQaOQ5w+wkvPz2WSMNgFRuT5VDLl9PVWO2ktluWCWKNRKNZbZcr3j57YHxrHjcb5dE01fLoNZ2u7C4kDRs2FDuT3QM7k8+XpVJ5mvuKi3qbqOhB3t1ubgsdNtK/aK6nI5YDehAFK+Ukl7rVE5OU/ol2hHiy5gjFosd+gPetwdfd8RjdfUeNavG5K09GjxecW4y6AW0cEEIgtirTtJqazklTWuwBAYbE7cjg+VWyweTb/AHL5cKyIqwXLW8TpEio+cu0i95PXesPpqUqZ5qjUnBiMcyTs2iRJ5BMMmJwxKlsZI58jvtWpYXB2ujZDDKORSXQWAC5mQzBRPAGDxKQWBJG/kNvrU54+EWk9OiOXH6cWvZkz2nnuwIbeSNYrZsuoU5148fwrR40YbknbLeLCCjyiK8J4oICVvO0dQuI9AGxHjnntT5MPLcdMbLgU1cexmXi1uSy2ts4VwQ7awhORjIA64owxyS2w4sU0vrdmPebL9eb/ACh/qp+LLbF3XQ58KUyyVMJE+KDEsKO9jJzSiMbgQAE0o+NGbkYQmnRSfRKMjK+RT0LHQ1CxYUrQJzvQckKKWiRknNAQwQKDOGuHXnEImFtYzFQxJwQCF8Tvy5UmSOOuU10WW+yxYpLbRzvcztcSHvrsSSfU1hnkjkkuKoWfGXuLXvEHlSFexjEKYQqS2ov47A/L61oh41dumPHEpKpaYK3tDDMUhdzEx1aC+UBJ3Cjn58xz5U8ssNNrYZ5sfFOrZQhhW74VK+whljKosahQF5AbVnlklCYssuSM9nBzRNb3MkWcGNyAfTka9aLUop/JuTtWPJxSeSPsb0e9wH9GRiGHow3HxyPKh6aW1o5RS9j48OW7H/C5DK/PsHwsq+nRvhv5UefH7/8Ar+fmMfcREsHEpJFLwu2JO6SrDUAT58ya6KThT2Dj7MUmeWdy8zu7+Ltk0ySSpI5RS6MqtEIVdq4JvEX7T/x/rQ2dobn3GoVIz5EfW8ernSSZnY0I1QZzmuQpsSYAplEtjQK5lGmmo7J0IgamzRJ9IbiUKKDEMyNvQOPFbNChWj5zihRyR5b3U1rOJYGw3I+YPMV0oKSplUitFxppJo4HsxCZRpDNvv0xkVleFVdiSxabj2NQ25UBAgURgnc4x/vJqM3e/kgpSnb/APo9uLyCKNXWTLNlUVQSRjxx866OKbbdDrDOStGF4o0NnHbJw51iA7rgiNfTLEY/+U78WUnbkalhcvqk9kDiVpA1z7zLfQxLONfZjMjg8iBpGCMjY5Hh0r0MbqPFLo1JUqFwvD0H27uY+SrEPrq+6m+t+1fz9AhVuYUP93s4k85CZD9dvpR4v5OD/lL3ju8SiW6Xo4wki+jAfQ5FDhX3Ruzx+GCVDLw6U3SAZMeMTJ6r1HmuaHOtSVf4/n5gsnacGqBPjnG3OuOKOi2/d3/jpdnGgmtdqmyT6Poh2ZOanVmeUTMkxY6RyqkYk2gg+zTmmCpCczZb0osnPsZtoQRljUXIXhZqXunSDTLaJtUxZ2onJGUfBo0Fo27ZFKBIe4FJYrM5upNE2R2Wod3z38eVRy8q0NOMnD6SxdS2k7+6IY7mduSKc6fMn9HHjz8KhGMo/U9Iljjkh9T0gHuRBnhDGXIwfeHMu+OeDtt4eXOmeeK2l0O/IXNPiM/k6IRQRCSRI1JJjjbQGO25C4FRl5Mv1YH5EtsDNNa23ElsrexDyiPUZMgBAeeevh9KepPHzctDJSlj5ylohe1MRS8hfP2o8Y8MH+ta/Fnyh+RfxpOUK+CMDitJpCK/MA7jmK4IRWzXHBUdkZXRirruGU4I+Nd+Bw+l7b8RZYuIQkzscLc26jtCf+peT/f51JwlDcXr4fX6P2OqihwWGDht/niMEF1YXI7D3gIHWNiRjIO6noQQDWfyXLLj/pOpLdfP/f4Cy2tM6/8As3ZfutrXi/bPK+WQ/q/Jwliwdc19BIKZm8wmTQQshW2TtJMnlTtk4rY1P+aT4UUzT0iYWyxJ60SDQzFdaRjwqbjYU9A3n1sTTJUhGrYJ5KIVE+iy5zXWdLQYqQKSxEKTimReBQ4NxaLhFlciO3L3krDQ5I0hcdfjmkyYnkkm3obJjWSrY43tBbx3sZRJJoNzKThWYkdPjUV4rcXfZGPipN2w1t7UQiKeW4gcza8wxoRp045Fv6da6Xh21TDLxU6SYDgdy8/Frp7xhHNOofMncGB038uXpTeRi/px47SDmxP00o+wj7Q3sd5ejsW1RRLpDeJzufTlVfHx8I79xvHxuEN9slDc1cudjYQQ3/BbeMhWRIwpGN1PX0Od6wSnKGVmHLLJDI2iFHYzNHNIiakhzrbOORrY8kU0n7m7ml2fWVwtndxTvbxXARsmOXOlvWunHlFxur+Bjq19rIuIiKztODO1zI2lY2uB2Y8/s5259K8p/wDjvTbySyaX7/5IvHW7HreO4m4jriaL813ZpTqwzH9Ad7cDzzvsMb1LnCGOmu9pfC+WIpv+f8lHs5f1YPm/41n+14/j+yD6j/iPzbh0vIV9AxooZve8ma6gzjoxY7bmlaM8ez7iD5XAoxKNkzfrTAPs70Q0fZrgUYZqAyQzanlSMlkQ66g7jrSioVnh2zQUikXQhJs2KvEvE8VacJplOkjHSuOs63isMXFOFtdxEOAhdTzK46fTFedgcsc+EjP9Ucn5kn8iMOEm5kMxuX0mKGNM5z0PXON61esvU4rr5KrJc+KI6pk77VcqdNwW0ms0WY3CxMx79tLtkefmR186yZZxk+NX+JlzZIN8KsoxWyNbm2QhlwGZlOzA78x9fWpZG4z5iZXKEuRL9oLCK3EM8AVI3GnQARggc/jVvFyuaal2i+DJzjvsjI8kMgkhd45F5MjEEdOY8q0tJ6Zc6X2b4s4s4rFWVJIGLICo7+STv44JNYfJwR5ObXfZk8mMk1OJc/K3Ev2i/JfwrJ9nwfBl9bIfn9m2H2r1TcuysyiRMVxVq0CRAmwrmScaBXW5waWyM3sQk2NUQYmaIx4a4KPMAmlYWMW4wanInIdjORilYqRmf7FIuxkS5F79aomiPRT4FwscVu2g7bsQqFy2jV1AAxkeNT8jMsMOTVgkwr8NS24mtreMSme8YufLbn54rlkcsfOIl6K0dnbcPjd4WlCOvfTOQw9D186jzcmkzNHJOTXIftpGkkkfOOyYJGRsQNKtn1730qGWCj9J2b6XSI3FuCxIqS22RIwkkmLvs2MHI2258q0+PmcrUv0NHj5XPT9h6xeZ7COedlmZtWC43ABxz61PLFKfGOvcz+VGMZaQaJmaSNcBE15bR+kpB2+B388nw36f/qb90Ug4zwt10Du4Vvb8rLk28IBSMnnnqflSY5enjTj2xVk4Y7j2xHisFjFf2EfuqhDkyBO7rycDPoatglklCTvfsWwznKDbCXvDITC3ZKsbAEoQMFTS4c0m/qM2LNkU1ydpmPdE/b3X+c340PWZb138H//Z" alt="">
                        <div class="text-box">
                        <h1 id="show-popup" onclick="openPopup()">chromium</h1>
                        </div> 
                    </div>
                    <div class="popup" id="popup" >
                        <h1 class="pop-mainhead">PUMPKIN SEED</h1>
                        <p class="pop-subhead">SEED PACKED WITH HAIR GOODNESS</p>
                        <p class="pop-subhead1">Botanical Name - Cucurbita maxima</p>
                        <div class="pop-div">|</div>
                        <p class="pop-subhead">INTRODUCING THE SOURCE</p>
                        <p class="pop-content">If you have been throwing this seed into the waste bin then you have been discarding a treasure. These seeds are packed with valuable nutrients necessary for your hair health.</p>
                        <p class="pop-subhead">DID YOU KNOW?</p>
                        <p class="pop-content">Pumpkin seeds were by the archaeologists in the caves of Mexico which date back to 7000 B.C.</p>
                    </div>  
                </div>
                <div class="popupcontent">
                    <div class="ing" >
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="text-box">
                        <h1 id="show-popup" onclick="openPopup()">chromium</h1>
                        </div> 
                    </div>
                    <div class="popup" id="popup" >
                        <h1 class="pop-mainhead">PUMPKIN SEED</h1>
                        <p class="pop-subhead">SEED PACKED WITH HAIR GOODNESS</p>
                        <p class="pop-subhead1">Botanical Name - Cucurbita maxima</p>
                        <div class="pop-div">|</div>
                        <p class="pop-subhead">INTRODUCING THE SOURCE</p>
                        <p class="pop-content">If you have been throwing this seed into the waste bin then you have been discarding a treasure. These seeds are packed with valuable nutrients necessary for your hair health.</p>
                        <p class="pop-subhead">DID YOU KNOW?</p>
                        <p class="pop-content">Pumpkin seeds were by the archaeologists in the caves of Mexico which date back to 7000 B.C.</p>
                    </div>  
                </div>
               
     
    
            </div>
   
        </div>
        <!-- ingredients-display-------------------------------------------->

        <!-- promisediv--------------------------------- -->
        <div class="promise-div">
            <h1>Our Clean Promise</h1>
            <div class="img-items">
                <div class="column">
                    <img src="./assets/cleanpromise/icon1.jpg" alt="">
                </div>
                <div class="column">
                    <img src="./assets/cleanpromise/icon2.jpg" alt="">
                </div><div class="column">
                    <img src="./assets/cleanpromise/icon3.jpg" alt="">
                </div><div class="column">
                    <img src="./assets/cleanpromise/icon4.jpg" alt="">
                </div><div class="column">
                    <img src="./assets/cleanpromise/icon5.jpg" alt="">
                </div><div class="column">
                    <img src="./assets/cleanpromise/icon6.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- promisediv--------------------------------- -->

        <!-- reserchdisplay--------------------------------- -->
        <div class="reserch">
            <div class="container">
                <div class="right-img">
                    <img src="./assets/productshowcase/gut-last-img.jpg" alt="">
                </div>
                <div class="left-text">
                    <h1>Why Earthful's <br> Plant Protein is <br> LOVED? <br> |</h1>
                    <ul>
                        <li>Contains ALL Amino acids needed by body. India's 1st Plant Protein with PDCAAS = 1</li>
                        <li>PDCAAS is the WHO method to check if a Protein has 100% Amino Acids & is easily digested</li>
                        <li>NO Synthetic Flavours. 100% Natural taste of Indonesian Dark Chocolate from Cocoa Beans & sweetness from Monkfruit</li>
                        <li>Only 6 ingredients which are clean. Nothing is Artifical & harms your body.</li>
                    
                    </ul>
                    <button class="reserch-btn">Read full reserch here>></button>
                </div>
            </div>
        </div>
    <!-- reserchdisplay--------------------------------- -->
    <!-- doubts--------------------------------- -->
    <div class="doubt-div">
        <div class="container">
            <h1>Let's clear your Doubts!</h1>
            <div class="about-product">
                <ul>
                    <li>
                        <button class="question"   >How is plant protein diffrent from Whey protein? <i class="fa-solid fa-chevron-down dropdown"></i></button>
                        <div class="containt">
                            <p class="tab_containt ">Whey Protein can cause stomach issues like bloating. Whereas, Plant Protein is free of lactose and you need not worry <br> about bloating. Additionally, it's easier to digest and helps you feel fuller longer. Unlike Whey which often uses <br> artificial flavours, Earthful's Plant Protein only uses natural flavours for sweetness.</p>
                        </div>
                        <button class="question" >How is plant protein diffrent from Whey protein? <i class="fa-solid fa-chevron-down dropdown"></i></button>
                        <div class="containt" >
                            <p class="tab_containt ">Whey Protein can cause stomach issues like bloating. Whereas, Plant Protein is free of lactose and you need not worry <br> about bloating. Additionally, it's easier to digest and helps you feel fuller longer. Unlike Whey which often uses <br> artificial flavours, Earthful's Plant Protein only uses natural flavours for sweetness.</p>
                        </div>
                        <button class="question"  >How is plant protein diffrent from Whey protein? <i class="fa-solid fa-chevron-down dropdown"></i></button>
                        <div class="containt">
                            <p class="tab_containt  ">Whey Protein can cause stomach issues like bloating. Whereas, Plant Protein is free of lactose and you need not worry <br> about bloating. Additionally, it's easier to digest and helps you feel fuller longer. Unlike Whey which often uses <br> artificial flavours, Earthful's Plant Protein only uses natural flavours for sweetness.</p>
                        </div>
                        <button class="question">How is plant protein diffrent from Whey protein? <i class="fa-solid fa-chevron-down dropdown"></i></button>
                        <div class="containt">
                            <p class="tab_containt ">Whey Protein can cause stomach issues like bloating. Whereas, Plant Protein is free of lactose and you need not worry <br> about bloating. Additionally, it's easier to digest and helps you feel fuller longer. Unlike Whey which often uses <br> artificial flavours, Earthful's Plant Protein only uses natural flavours for sweetness.</p>
                        </div>

                       
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- doubts--------------------------------- -->

    </main>
  @endsection  









    
   
            


