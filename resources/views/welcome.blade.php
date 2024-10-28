<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
   <style>
    body {
        font-family: 'Figtree', sans-serif;
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,.04);
    }

    .navbar-brand {
        font-weight: bold;
        color: #3490dc;
    }

    .jumbotron {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        padding: 3rem 2rem;
        margin-top: 3rem;
    }

    .display-4 {
        color: #3490dc;
        font-weight: bold;
    }

    .lead {
        color: #6c757d;
    }

    .btn-primary {
        background-color: #3490dc;
        border-color: #3490dc;
        padding: 10px 20px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #2779bd;
        border-color: #2779bd;
        transform: translateY(-2px);
    }

    .nav-link {
        color: #3490dc;
        font-weight: 600;
        margin: 0 10px;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #2779bd;
    }

    @media (max-width: 768px) {
        .jumbotron {
            padding: 2rem 1rem;
        }
    }
</style>

</head>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">E-Commerce Management System</h1>
        <p class="lead">Welcome to our world!</p>
        <hr class="my-4">
         <a class="btn btn-secondary" href="{{ route('login') }}">Log in</a><br><br>
          <p>if you don't have an account please register below!</p>
           <a class="btn btn-secondary" href="{{ route('register') }}">Register</a>

        @if (Route::has('login'))
            @auth
                <a class="btn btn-secondary" href="{{ url('/home') }}">Home</a>
                @endif
            @endauth
             <div class="alert">
        <p style="margin: 0; color:red;">Note: This section is intended only for admins</p>
    </div>


    </div>
</div>
