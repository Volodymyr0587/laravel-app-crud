<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Index</title>
</head>

<body>

    @if (session()->has('create-product'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" <p>{{ session('create-product') }}</p>
        </div>
    @endif
    @if (session()->has('update-product'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" <p>{{ session('update-product') }}</p>
        </div>
    @endif
    @if (session()->has('delete-product'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" <p>{{ session('delete-product') }}</p>
        </div>
    @endif


    <h1>Products</h1>

    <div style="margin-bottom: 8px">
        <a href="{{ route('product.create') }}">Add Product</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/product/{{ $product->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
