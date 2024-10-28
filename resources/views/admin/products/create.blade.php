<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Product</title>
    <style>
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Ensures padding is included in width */
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff; /* Bootstrap primary color */
            outline: none; /* Remove default outline */
        }

        button.btn {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            color: white;
            font-size: 16px;
        }

        .btn-success {
            background-color: #28a745; /* Bootstrap success color */
        }

        .btn-secondary {
            background-color: #6c757d; /* Bootstrap secondary color */
        }

        button.btn:hover {
            opacity: 0.9; /* Slightly fade on hover */
        }
    </style>
</head>
    </style>
</head>
<body>




<div class="container">
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" required />
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" step="0.01" class="form-control" required />
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" required />
        </div>


        <div>
        <label for="categories_ids" class="form-label">Categories</label>
            <select multiple class="form-select" id="categories" name="categories_ids[]" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="btn btn-success">Create Product</button>
    </form><br>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products List</a>
</div>
</body>
</html>
