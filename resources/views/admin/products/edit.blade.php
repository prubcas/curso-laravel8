<x-base>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" min="1" max="1000" name="price" id="price" value="{{ old('price') }}" required>
        </div>

        <div>
            <input type="submit" value="Crear Producto">
        </div>
    </form>
    
</x-base>