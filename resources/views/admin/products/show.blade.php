<x-base>
    <h1>Welcome to the products view</h1>

    <a href="{{ route('products.create') }}">Crear Producto</a>

    @if ($products->isEmpty())
        <p>No hay productos para mostrar. Crea uno.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="#">Mostrar</a>
                            <a href="#">Editar</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</x-base>