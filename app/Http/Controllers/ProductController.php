<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;




class ProductController extends Controller
{
    
    public function index()
{
    
    // Carousel items (top slider)
    $carouselProducts = Product::orderBy('id','desc')->take(8)->get();
    // dd($products->count());
    // Featured products section
    $showcaseproducts = Product::take(4)->get();
    

    return view('welcome', compact('carouselProducts', 'showcaseproducts'));
}


public function show($slug)
{
    $product = Product::where('slug', $slug)
        ->with('images')
        ->firstOrFail();

    return view('product-detail', compact('product'));
}




public function search(Request $request)
{
    if ($request->ajax()) {

        $products = Product::with('images')
            ->where('name', 'like', '%' . $request->search . '%')
            ->orWhere('price', 'like', '%' . $request->search . '%')
            ->limit(5)
            ->get();

        $output = '';

        if ($products->count() > 0) {

            foreach ($products as $product) {

                $image = $product->images->first()
                    ? asset($product->images->first()->image)
                    : asset('assets/no-image.jpg');

                $url = route('product.show', $product->slug);

                $output .= '
                <a href="'.$url.'" class="product-link">
                    <div class="product">
                        <img src="'.$image.'" alt="">
                        <div class="p-details">
                            <h2>'.$product->name.'</h2>
                            <h3>Rs. '.$product->price.'</h3>
                        </div>
                    </div>
                </a>';
            }

        } else {
            $output = '<p style="padding:10px;color:#777;">No product found</p>';
        }

        return response($output);
    }

    abort(404);
}
   
    public function shop()
{
    $products = Product::all();
    return view('shopall', compact('products'));
}


    // <<------------------------------------   cart  ---------------------------------->>
    function cart(){
        
        return view('cart');
    }
   
    function addToCart($id){
        $product = Product::findOrFail($id);
    
        $cart = session()->get('cart', []);
    
        $image = optional($product->images->first())->image;
    
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $image,   // 
                "price" => $product->price,
                "quantity" => 1,
            ];
        }
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success','Cart successfully added!');
    }
    
    function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','Product remove successfully');
        }
    }

    function update(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            session()->flash('success','Cart successfully updated!');
        }
    }


}
