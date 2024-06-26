<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Sign Up</title>
</head>

<body>
    <?php include('message.php'); ?>

    <div class="container ">
        <div class="col-md-5 align-center">
            <div class="card">
                <div class="card-header bg-dark text-white log-header">
                    <h4>Sign Up
                    </h4>
                </div>
                <div class="card-body">
                    <form action="register_endpoint.php" method="POST" autocomplete="off">
                        </h1>

                        <div class="mb-3">
                            <label class="mb-3">User Name</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3 login_form">
                            <button type="submit" class="btn btn-success " name="signup">Register</button>
                            <a href="login.php" class="btn btn-dark float-end acasa_log">LogIn</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>