<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (full version) and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        .small-swal-popup {
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .small-swal-title {
            font-size: 20px;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .small-swal-content {
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            color: #555;
        }

        .small-swal-button {
            font-size: 14px;
            font-family: 'Arial', sans-serif;
            background-color: #333333;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .small-swal-button:hover {
            background-color: #2d3748;
        }
    </style>


</head>
<body style="font-family: Arial,serif;">
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-5">
        <div class="card-body">
            <h2 class="text-center">Register</h2>
            <form id="registerForm" action="{{ route('user.store') }}" method="POST">
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
                    <input type="password" name="password_confirmation" class="form-control" id="pwd-confirm" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <br><br>
                <a href="{{ route('user.index') }}" class="login-link">Already have an account? Login here.</a>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message ,
                            icon: 'success',
                            confirmButtonText: 'OK',
                            width: '350px',
                            padding: '1.5em',
                            customClass: {
                                popup: 'small-swal-popup',
                                title: 'small-swal-title',
                                content: 'small-swal-content',
                                confirmButton: 'small-swal-button'
                            },
                            buttonsStyling: false
                        }).then(() => {
                            window.location.href = '{{ route("user.index") }}';
                        });
                    }
                },
                error: function(response) {
                    if (response.status === 400) {
                        Swal.fire({
                            title: 'Error!',
                            text: response.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'OK',
                            width: '350px',
                            padding: '1.5em',
                            customClass: {
                                popup: 'small-swal-popup',
                                title: 'small-swal-title',
                                content: 'small-swal-content',
                                confirmButton: 'small-swal-button'
                            },
                            buttonsStyling: false
                        });
                    }
                }
            });
        });
    });
</script>

</body>
</html>
