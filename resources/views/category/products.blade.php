<h2>{{ $category->name }}</h2>

<div class="product-grid">
    @foreach($products as $product)
        <div class="product-card">
            <a href="{{ route('product.show', $product->slug) }}">
                <img src="{{ asset($product->images->first()->image ?? '') }}">
                <h4>{{ $product->name }}</h4>
                <p>Rs. {{ $product->price }}</p>
            </a>
        </div>
    @endforeach
</div>
