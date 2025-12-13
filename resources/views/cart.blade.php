@extends('layout')
    @section('title','cart')
    @section('content')
<main> 
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

<div class="cart-container">
    <table  id="cart">
        <thead>
            <tr>
                <th >Product</th>
                <th>Quantity</th>
                <th >total</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp 
            @if(session('cart'))
                @foreach( session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
            <tr data-id="{{ $id }}">
                <td>
                    <div class="cart-info" >
                        <div class="cartimage">
                            <img src="{{$details['image']}}"  alt="img">
                        </div>
                        <div class="cartproductname">
                            <h4>{{$details['name']}}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Quantity">
                    <input type="number" class="form-control quantity cart_update" value="{{$details['quantity']}}" min="1">
                    <button class="btn-danger cart_remove"> <i class="fa-solid fa-trash-can"></i></button>               
                </td>
                <td> Rs. {{ $details['price'] * $details['quantity'] }}.00</td>              
                        
            
            </tr>
            @endforeach
            @endif 
        </tbody>
    </table>
    <div class="cart-footer">
        <div class="content">
            <div class="total-price">
            <h3>subtotal</h3>
            <h4 class="subtotal-value">Rs.{{ $total }}.00</h4>
            </div>
        </div>
        <div class="tax-note">
            <span>Tax included and shipping calculated at checkout</span>
        </div>
        <div class="checkout-button">
            <form action="{{route('session')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-success" id="checkout-live-button"type="submit">Check&nbsp;out</button>
            </form>
        </div>
    </div>
</div> 

</main>
@endsection  









    
   
            



