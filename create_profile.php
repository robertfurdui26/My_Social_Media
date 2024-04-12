<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Create Profile</title>
</head>

<body>
    <?php include('message.php'); ?>
    <?php
                    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
                    ?>
    <div class="container ">
        <div class="col-md-5 align-center">
            <div class="card">
                <div class="card-header bg-dark text-white log-header">
                    <h4>Hello
                        <?php echo $_SESSION['username']?> you need to complete your profile! </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" autocomplete="off">
                        </h1>

                        <div class="mb-3">
                            <label class="mb-3">Profile Name</label>
                            <input type="text" autocomplete="off" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3">NickName</label>
                            <input type="password" autocomplete="off" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3 login_form">
                            <button type="submit" name="log" class="btn btn-success " name="page_home.php">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
                    }
                    ?>



</html>