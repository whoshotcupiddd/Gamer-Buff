<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
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
        .login-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Register</h2>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" required>
                </div>
                <div class="form-group">
                    <label for="pwd-confirm">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd-confirm" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{ route('user.create') }}" class="btn btn-secondary">Cancel</a>
                <a href="{{ route('user.login') }}" class="login-link">Already have an account? Login here.</a>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
