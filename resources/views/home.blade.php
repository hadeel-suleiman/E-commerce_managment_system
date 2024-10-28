<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: rgb(145, 176, 243);
            margin-bottom: 20px;
            text-align: center;
        }

        .alert {
            display: flex;
            align-items: center;
        }

        .alert-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .logout-button {
            margin-top: 20px; /* Space above the button */
        }
    </style>
</head>
<body>

<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="alert alert-danger">
                            <img src="https://img.icons8.com/ios-filled/50/ff0000/error.png" alt="Error Icon" class="alert-icon"/>
                            <p>Error!! You do not have admin access</p>
                        </div>

                        <!-- Logout Button -->
                        @auth
                            <button type="button" class="btn btn-danger logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Go Back</button>

                            <!-- Logout Form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>