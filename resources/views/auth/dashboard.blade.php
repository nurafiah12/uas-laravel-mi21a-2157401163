<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <title>User Profile</title>
    <style>
        body {
            background: linear-gradient(45deg, #8A2387, #E94057, #F27121);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .vh-100 {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 600px;
        }

        h1, h3 {
            font-family: 'Dancing Script', cursive;
        }

        h1 {
            font-size: 60px;
        }

        h3 {
            font-size: 50px;
        }

        .btn-primary {
            background-color: #6a5acd;
            color: #fff;
            border: none;
            padding: 8px 10px;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #483d8b;
        }
    </style>
</head>
<body>

<section class="vh-100">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-3">{{ Auth::user()->name }}</h1>
            <h3 class="mb-5">{{ Auth::user()->email }}</h3>
            <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block px-5">Logout</a>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>