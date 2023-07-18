<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="quantity" value="{{ $product->qty }}">
            @if ($errors->has('qty'))
                <p>{{ $errors->first('qty') }}</p>
            @endif
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{ $product->price }}">
            @if ($errors->has('price'))
                <p>{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{ $product->description }}">
            @if ($errors->has('description'))
                <p>{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>
</body>
</html>
