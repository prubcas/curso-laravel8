<x-base>

    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $product->title }}" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" min="1" max="1000" name="price" id="price" value="{{ old('price') ?? $product->price }}" required>
        </div>

        <div>
            <input type="submit" value="Editar Producto">
        </div>
    </form>
    
</x-base>