<!-- resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamer Buff</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Karma', sans-serif;
            color: #333333;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .form-control {
            border-radius: 0;
            border: 1px solid #dddddd;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .text-center {
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn {
            margin-top: 10px;
        }
        .register-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
        .login-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }
        .row {
            justify-content: center;
        }
        .col-md-6 {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            color: #333333;
            font-size: 16px;
            font-family: 'Karma', sans-serif;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .vertical-nav {
            position: fixed;
            height: 100%;
            width: 250px;
            top: 0;
            left: -250px;
            background-color: #ffffff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1000;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .vertical-nav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #333333;
            display: block;
            transition: 0.3s;
            font-family: 'Karma', sans-serif;
        }
        .vertical-nav a:hover {
            background-color: #f1f1f1;
        }
        .vertical-nav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: #333333;
        }
        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #ffffff;
            color: #333333;
            padding: 10px 15px;
            border: none;
        }
        .openbtn:hover {
            background-color: #f1f1f1;
        }
        .title {
            font-size: 24px;
            margin-left: 10px;
        }
        .search-bar {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }
        .search-bar input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #dddddd;
            width: 200px;
        }
        .login-register button {
            background-color: #28a745;
            border: none;
            color: #ffffff;
            padding: 5px 10px;
            margin-left: 5px;
            border-radius: 5px;
        }
        .login-register button:hover {
            background-color: #218838;
        }
        .carousel-item img {
            width: 100%;
            height: auto;
        }
        .divider {
            width: 100%;
            height: 2px;
            background-color: #333333;
            margin: 20px 0;
        }
        .new-content {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .footer {
            background-color: #333333;
            color: #ffffff;
            padding: 40px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer .row {
            margin: 0;
        }
        .footer .col-md-4 {
            margin-bottom: 20px;
            padding: 0 20px;
        }
        .footer .col-md-4 h5 {
            margin-bottom: 15px;
            font-size: 18px;
        }
        .footer .col-md-4 p {
            margin-bottom: 10px;
            font-size: 14px;
            line-height: 1.6;
        }
        .footer .col-md-4 iframe {
            border: 0;
            width: 100%;
            height: 150px;
        }
        .game-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .game-item {
            text-align: center;
            flex: 1;
            margin: 0 10px;
        }
        .game-item img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }
        .game-item h5 {
            margin-top: 10px;
            font-size: 16px;
        }
        .game-item p {
            font-size: 14px;
            color: #666666;
        }
        .next-arrow {
            text-align: center;
            margin-top: 20px;
        }
        .next-arrow button {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .next-arrow button:hover {
            background-color: #0056b3;
        }
        .main-content {
            padding: 16px;
        }
    </style>
</head>
<body>
<div class="top-bar">
    <div style="display: flex; align-items: center;">
        <button class="openbtn" onclick="openNav()">☰</button>
        <div class="title">
            <h1>Gamer Buff</h1>
        </div>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>
    <div class="login-register">
        <a href="{{ route('user.login') }}"><button>Login</button></a>
        <a href="{{ route('user.create') }}"><button>Register</button></a>
    </div>
</div>
<div id="mySidenav" class="vertical-nav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('products') }}">Products</a>
    <a href="{{ route('cart.show') }}">Cart</a>
    <a href="{{ route('aboutus') }}">About Us</a>
    <a href="#">Profile</a>
</div>

<!-- Main Content Section -->
<div class="main-content">
    @yield('content')
</div>

<!-- Footer Section -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Gamer Buff is your go-to source for the latest in gaming news, reviews, and more. Stay updated with us!</p>
            </div>
            <div class="col-md-4">
                <h5>Our Services</h5>
                <p>We provide the latest news, in-depth reviews, and exclusive content on all things gaming. Join our community and stay ahead in the gaming world.</p>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>123 Gaming Street<br>Game City, GC 12345</p>
                <p>Email: contact@gamerbuff.com</p>
                <p>Phone: +123 456 7890</p>
                <iframe src="https://www.google.com/maps/embed" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.left = "0";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.left = "-250px";
    }
</script>
</body>
</html>
