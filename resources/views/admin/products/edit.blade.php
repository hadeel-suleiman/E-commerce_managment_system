<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

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

        h2 {
            text-align: center;
            color: rgb(145, 176, 243);
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fff;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #888;
        }

        button[type="submit"] {
            display: inline-block;
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="exampleInputTitle">Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="exampleInputTitle" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputBody">Description</label>
                <textarea name="description" class="form-control" id="exampleInputBody" placeholder="Enter product description" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPrice">Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" id="exampleInputPrice" placeholder="Enter product price" required>
            </div>

            <div class="form-group">
                <label for="exampleInputQuantity">Quantity</label>
                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" id="exampleInputQuantity" placeholder="Enter product quantity" required>
            </div>

           <div class="form-group">
              <label for="categories">Categories:</label>
              <select name="categories_ids[]" id="categories" class="form-control" multiple required>
                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}"
                      @foreach ($product->categories as $productCategory)
                          {{ $productCategory->id == $category->id ? 'selected' : '' }}
                      @endforeach>
                      {{ $category->name }}
                      </option>
                  @endforeach
              </select>
          </div>
          
          <a href="{{ route('products.index') }}" type="submit" class="btn btn-primary">Save</a>
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
      </form>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
