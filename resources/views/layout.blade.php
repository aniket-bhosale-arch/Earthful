
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>@yield('title')</title>
            <!-- css- font-link---------------------------> 
            <link rel="stylesheet" type="text/css" href="{{ ('../css/style.css') }}" >
            <link rel="stylesheet" type="text/css" href="{{ ('../css/productstyle.css') }}" >
            <link rel="stylesheet" href="{{ ('../css/all.min.css') }}">
            <!-- css- font-link---------------------------> 

            <script src="{{ ('../js/jquery3.7.0 .min.js') }}"></script>

            <script src="{{ ('../js/main.js') }}" defer></script>

        </head>
        <body>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')

       
     <!-- doubts--------------------------------- -->

 <script>


$(Document).ready(function(){
  //   $(".containt .tab_containt ").hide();
  //   $(".question").click(function(){
    
  //       var current_tab_value = $(this).attr("data-list");
  //       $(".containt .tab_containt ").hide();                     hide and show using tabs
  
  //       $("."+current_tab_value).show();
  //       $(this).find('.dropdown').toggleClass('rotate');
  
  //   });
  $(".question").click(function(){
  $(this).next('.containt').slideToggle();
  $(this).find('.dropdown').toggleClass('rotate');
  });
    
    });
  //   <!-- doubts--------------------------------- -->

// <!-- productcarousel-------------------------------------- -->

$(Document).ready(function(){
$(".small-img-col > img").click(function(){
var $smallImages = $(this).attr('src');
$(".img-container > img").attr('src', $smallImages );
});
});
// <!-- productcarousel-------------------------------------- -->
// <!-- cart-delete-update-------------------------------------- -->


    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url:'{{ route('update_cart') }}',
            method: "patch",
            data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success:function(response){
                    window.location.reload();
                }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")){
            $.ajax({
                url:'{{route("remove_cart")}}',
                method:"DELETE",
                data:{
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                },
                success:function(response){
                    window.location.reload();
                }
            });
        }
    });
// <!-- cart-delete-update-------------------------------------- -->
   let popup = document.getElementById("popup");

   function openPopup(){
    popup.classList.add("open-popup");
   }
   function closePopup(){
    popup.classList.remove("open-popup");
   }

</script>

<script type="text/javascript">
    $.ajaxSetup({headers: {'csrftoken' : '{{ csrf_token() }}'}});
</script>
<script>
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var value = $(this).val();
            // console.log(value);
            $.ajax({
                type:"get",
                url:"/search",
                data:{'search':value},
              
                success:function(data){
                    // console.log(data);
                    $('.product-result').html(data);
                }
            });
        });
    });
</script>

 </body>
 </html>






