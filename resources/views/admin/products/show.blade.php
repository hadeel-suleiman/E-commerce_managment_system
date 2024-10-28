

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<div class="container">
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

            @if ($product->categories->isNotEmpty())
                <h3>Categories</h3>
                <ul>
                    @foreach ($product->categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            @else
                <p>No categories assigned to this product.</p>
            @endif

            <div class="mt-3">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Product</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete Product</button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products List</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
