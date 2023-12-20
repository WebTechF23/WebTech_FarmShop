@foreach($products as $product)
    <div>
        <p>{{ $product->name }}</p>


        <form method="POST" action="{{ route('products.destroy', ['id' => $product->id]) }}">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
        </form>
    </div>
@endforeach
m
