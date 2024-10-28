<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f9; /* Light gray background */
            font-family: 'Arial', sans-serif;
            margin-top: 50px;
        }



        .navbar {
            margin-bottom: 20px; /* Space below the navbar */
            margin-left: 150px;
            background-color: #007bff; /* Primary blue color */
        }

        .navbar-brand, .navbar-nav > li > a {
            color: white !important; /* White text for navbar items */
        }

        .navbar-nav > li > a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Hover effect */
        }

        .jumbotron {
            background-color: #ffffff; /* White background for jumbotron */
            border-radius: 5px; /* Rounded corners */
            padding: 30px; /* Padding inside jumbotron */
            margin-bottom: 20px; /* Space below jumbotron */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        h2 {
            font-size: 2.5rem; /* Larger font size for the heading */
            color: #343a40; /* Dark gray color for text */
        }

        p {
            font-size: 1.2rem; /* Slightly larger font size for paragraphs */
            color: #6c757d; /* Gray color for text */
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            top: 51px; /* Below navbar */
            left: 0;
            width: 150px;
            height: calc(100% - 51px); /* Full height minus navbar height */
            background-color: #ffffff; /* White background for sidebar */
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1); /* Sidebar shadow */
            overflow-y: auto; /* Enable scrolling if content overflows */
        }

        #sidebar ul {
            list-style-type: none; /* Remove bullets from list */
            padding-left: 0; /* Remove default padding */
        }

        #sidebar ul li a {
            display: block;
            padding: 15px;
            color: #007bff; /* Link color */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        #sidebar ul li a:hover {
            background-color: rgba(0,123,255,0.1); /* Light hover effect on links */
            border-left: 4px solid #007bff; /* Left border on hover for emphasis */
        }

        .dropdown-menu > li > a {
            padding: 10px 20px; /* Padding for dropdown items */
        }
    </style>
</head>

<body>

    <div class="container-fluid">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">E-Commerce</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="/home">Home</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Products <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="/products">Products list</a></li>
                          <li><a href="/products/create">Create Product</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Categories <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="/categories">Categories list</a></li>
                          <li><a href="/categories/create">Create Category</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Orders <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="/orders">Orders list</a></li>
                      </ul>
    </li>
                      </ul>
                  </li>
              </ul>
          </div>
        </div>
      </nav>

      <!-- Sidebar -->
      <nav id="sidebar">
          <ul class="">
              <li><a href="">Details</a></li>
              <li><a href="">Prices</a></li>
              <li><a href="">Contact</a></li>
          </ul>
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="content" style="margin-left:260px;"> <!-- Adjust margin to accommodate sidebar -->
          <div class="jumbotron">
              <h2>Welcome to Admin Dashboard!</h2>
              <p>Only Admin users should be able to manage products, categories, and view orders from here.</p>
          </div>
      </div>

      </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
