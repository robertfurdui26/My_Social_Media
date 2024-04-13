<?php
session_start();

require 'db.php';

$sql = "SELECT * FROM user_profile";
$result = $conn->query( $sql );




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="add_friends.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Add New Friends</title>
</head>

<body>
    <?php include('message.php'); ?>

    <section>
        <!-- Codul pentru bara de navigare -->
        <nav class='navbar navbar-expand-lg bg-dark p-4'>
            <div class='container-fluid'>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                    data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='true'
                    aria-label='Togglenavigation'>
                    <span class='navbar-toggler-icon '></span>
                </button>

                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                    <?php
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>
                    </li>
                    </ul>

                    <?php
}
?>
                    <form>
                        <?php
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>
                        <a href=' page_home.php' class='btn btn-success back'>Back</a>
                        <?php
} 
?>
                    </form>
                </div>
            </div>
        </nav>
    </section>


    <div class='container'>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<form action="add_friend_endpoint.php" method="POST">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<div class="card-header d-flex justify-content-between align-items-center mb-3">';
                echo '<h1>' . $row['profile_name'] . '</h1>';
                echo '<button type="submit" class="btn btn-success" name="add_friend">Add</button>';
                echo '</div>';
                echo '</form>';
                echo '<div class="userImg">';
                echo '<img src="' . $row['image'] . '" alt="User Image">';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No profiles found";
        }
        ?>
    </div>

</body>





</html>