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
        <div x-data="{ show: true }"
             x-init="setTimeout(() => show = false, 4000)"
             x-show="show"

            <p>{{ session('create-product') }}</p>
        </div>
    @endif

    <h1>Product</h1>
    <div>Index</div>
</body>
</html>
