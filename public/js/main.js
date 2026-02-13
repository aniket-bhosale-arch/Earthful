// jquaryforstickyheader--------------------->

window.addEventListener("scroll",function(){
  var header = this.document.querySelector("header");
  header.classList.toggle('sticky', window.scrollY > 0);
});

// jquaryfordropdownmenu---------------------->
$(document).ready(function(){
$('.sub-btn').click(function(){
  $(this).next('.sub-menu').slideToggle();
  $(this).find('.dropdown').toggleClass('rotate');
});

// jqueryforsidbarcloseandactive----------------------->
$('.menu-btn').click(function(){
$('.side-bar').addClass('active');
});

$('.close-btn').click(function(){
  $('.side-bar').removeClass('active');
  });
});
// ----------------------------*------------------->
// -----------------------searchbox------------------->

$(document).ready(function(){

    // Toggle Search Box When Clicking Search Icon
    $('.right-menu > button:first-child').on('click', function(e){
        e.preventDefault();
        $('.search-box').stop(true, true).slideToggle(200);
        $('#search').focus();
    });

    // Close Search Box When Clicking Outside
    $(document).on('click', function(e){
        if(!$(e.target).closest('.search-box, .right-menu > button:first-child').length){
            $('.search-box').slideUp(200);
        }
    });

    // Live Search AJAX (Your Existing Code - Only Kept Smooth)
    $('#search').on('keyup', function(){
        var value = $(this).val();
        $.ajax({
            type: "get",
            url: "/search",
            data: {search:value},
            success:function(data){
                $('.product-result').html(data).show();
            }
        });
    });

});





// -----------------------searchbox------------------->

// jqueryfor-cart-closeandactive----------------------->

const openBtn = document.getElementById('open_cart_btn')
const cart = document.getElementById('sidecart')
const closeBtn = document.getElementById('close_btn')


openBtn.addEventListener('click', openCart)
closeBtn.addEventListener('click', closeCart)


function openCart(){
  cart.classList.add('open')
}
function closeCart(){
  cart.classList.remove('open')
}



// jqueryfor-cart-closeandactive----------------------->





const carousel = document.querySelector(".carousel ul");
const leftBtn = document.getElementById("left");
const rightBtn = document.getElementById("right");

const cardWidth = carousel.querySelector(".card").offsetWidth + 20;

leftBtn.addEventListener("click", () => {
  carousel.scrollLeft -= cardWidth;
});

rightBtn.addEventListener("click", () => {
  carousel.scrollLeft += cardWidth;
});


// productbladejs--------------------------------------->

function changeImage(src){
    document.getElementById('bigImage').src = src;
}


// productbladejs--------------------------------------->


  