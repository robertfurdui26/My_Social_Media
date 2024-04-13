<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

require 'db.php';

$id = $_SESSION['id'];
$sql = "SELECT image, profile_name FROM user_profile WHERE id = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $profile_name = $row['profile_name'];
    $image_path = $row['image'];
} else {
  
    $profile_name = "Nume Profil";
    $image_path = "default_image.jpg";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="page_home.css">

    <title>Home</title>
</head>

<body>
    <?php include('message.php'); ?>

    <section>
        <!-- Codul pentru bara de navigare -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Jazz Tech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                altceva
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="friend.php">Prietenii mei</a></li>
                                <li><a class="dropdown-item" href="Admin/index.php">Tabel Acc</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                    <form class="d-flex">
                        <?php
                        if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
                        ?>
                        <a href="signUp.php" class="btn btn-outline-danger log">Log Out</a>
                        <?php
                        } else {
                        ?>
                        <a class="btn btn-outline-success " href="login.php">Log In</a>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Profile Name: <h1><?php echo $profile_name; ?></h1>
            </div>
            <div class="userImg">
                <img src="<?php echo $image_path; ?>" alt="User Image">
            </div>
        </div>
    </div>
</body>

</html>