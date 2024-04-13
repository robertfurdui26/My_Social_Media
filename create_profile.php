<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="create_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Create Profile</title>
</head>

<body>
    <?php include('message.php'); ?>



    <div class="container ">
        <div class="col-md-5  align-center">
            <div class="card">
                <div class="card-header bg-dark text-white l">
                    <h4>Inregistrare</h4>
                </div>
                <div class="card-body">
                    <form action="profile_endpoint.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                        </h1>

                        <div class="mb-3">
                            <label class="mb-3" for="username">User Name</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3" for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3" for="profile_name">Profile Name:</label>
                            <input type="text" autocomplete="off" name="profile_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3" for="image">Profile Picture:</label>
                            <input type="file" autocomplete="off" name="image" class="form-control" required>
                        </div>


                        <div class="mb-3">
                            <label class="mb-3" for="Email">Email address:</label>
                            <input type="text" autocomplete="off" name="Email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-3" for="Address">Address:</label>
                            <input type="text" autocomplete="off" name="Address" class="form-control" required>
                        </div>


                        <div class="mb-3">
                            <label class="mb-3" for="Phone">Phone:</label>
                            <input type="number" autocomplete="off" name="Phone" class="form-control" required>
                        </div>


                        <div class="mb-3 login_form">
                            <button type="submit" name="save_profile" class="btn btn-success align-center">Save
                                Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>





</html>