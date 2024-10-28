<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }
        .container {
            max-width: 600px; /* Limit the width of the form */
            margin-top: 20px; /* Space above the form */
        }
        .form-header {
            background-color: #007bff; /* Primary blue color */
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0; /* Rounded top corners */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-header">
        <h2>Create New Category</h2>
    </div>


    <form action="{{ route('categories.store') }}" method="POST">
        @csrf <!-- CSRF protection -->

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter category description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a> <!-- Link to go back to categories list -->
    </form>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
