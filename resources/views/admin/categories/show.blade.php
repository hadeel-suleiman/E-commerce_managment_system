<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: rgb(145, 176, 243);
            margin-bottom: 20px;
        }

        .category-detail {
            margin-bottom: 15px;
        }

        .category-detail strong {
            color: #333;
        }

        .btn-secondary {
            margin-top: 20px; /* Add some space above the button */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Category Details: {{ $category->name }}</h1>

    <!-- Category Details -->
    <div class="category-detail">
        <p><strong>ID:</strong> {{ $category->id }}</p>
        <p><strong>Name:</strong> {{ $category->name }}</p>
    </div>

    <!-- Back Button -->
    <a href="{{ route('categories.index') }}" class='btn btn-secondary'>Back to Categories List</a>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
