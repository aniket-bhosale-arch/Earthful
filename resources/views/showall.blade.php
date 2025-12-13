@extends('layout')
    @section('title',)
    @section('content')
    <main>
    <div class="categorycontainer">
        <div class="categoryproduct">
            @foreach($products as $product)
            <div class="productbox">
                <div class="productimg">
                   <a href="{{route('product_details',$product->id)}}">
                   <img src="{{$product->image}}" alt="image">
                   </a>
                </div>
                    <div class="productinfo">
                        <h1>{{$product->name}}</h1>
                        <form action="" method="POST">
                        @csrf
                            <div class="btn-group">    
                                <input type="hidden"  >
                                <a href="{{route('add_to_cart', $product->id)}}">
                                    <button type="button" class="add-cart-btn">Add to cart  &nbsp;  &nbsp;     RS.{{$product->price}} </button> 
                                </a> 
                            </div>
                        </form>     
                    </div>
            </div>
            @endforeach
       
     
      </div>    
  </div>


 




    </main>

    @endsection 