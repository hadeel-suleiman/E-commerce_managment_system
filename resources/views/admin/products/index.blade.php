<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        /* Custom Styles */

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Modern font */
            background-color: #e9ecef; /* Light gray background */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px; /* Set a maximum width for the container */
            margin: auto; /* Center the container */
            background-color: white; /* White background for the container */
            padding: 20px; /* Padding inside the container */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Enhanced shadow for depth */
        }

        h1 {
            text-align: center; /* Centered heading */
            color: #343a40; /* Darker text color */
            margin-bottom: 20px; /* Space below heading */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px; /* Padding for buttons */
            margin: 5px; /* Margin around buttons */
            border: none;
            border-radius: 5px; /* Rounded corners for buttons */
            color: white; /* Text color for buttons */
            font-size: 14px; /* Font size for buttons */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
        }

        .btn-info {
            background-color: #17a2b8; /* Info button color */
        }

        .btn-warning {
            background-color: #ffc107; /* Warning button color */
        }

        .btn-danger {
            background-color: #dc3545; /* Danger button color */
        }

        .btn-success {
            background-color: #28a745; /* Success button color */
        }

        .btn:hover {
            opacity: 0.9; /* Slightly fade on hover */
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px; /* Space below alert messages */
            border-radius: 5px; /* Rounded corners for alerts */
        }

        .alert-success {
            background-color: #d4edda; /* Light green background for success alerts */
            color: #155724; /* Dark green text color for success alerts */
        }

        table {
            width: 100%; /* Full width table */
            border-collapse: collapse; /* Collapse borders between cells */
            margin-top: 20px; /* Space above the table */
        }

        th, td {
            padding: 12px;
            text-align: left; /* Left-aligned text in table cells */
            border-bottom: 1px solid #dee2e6; /* Bottom border for rows */
        }

        th {
            background-color: #007bff; /* Header background color */
            color: white; /* Header text color */
        }

        tr:nth-child(even) {
            background-color: #f8f9fa; /* Zebra striping for even rows */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>

    @if (session('Success'))
        <div class="alert alert-success">{{ session('Success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        @if(!$product->deleted_at)
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                            </form>

                            <form action="{{ route('products.forceDelete', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to permanently delete this product?');">Force Delete</button>
                            </form>
                        @else
                            <form action="{{ route('products.restore', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to restore this product?');">Restore</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include any custom JS if needed -->
<script src="script.js"></script>

</body>
</html>
