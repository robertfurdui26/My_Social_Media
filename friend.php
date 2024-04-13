<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" link
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="friend_.css">
    <title>Your friends</title>
</head>

<body>

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

    <?php
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {


    if (isset($_SESSION["friends"]) && !empty($_SESSION["friends"])) {
        foreach ($_SESSION["friends"] as $id) {
            $sql = "SELECT * FROM user_profile WHERE id = '$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<div class="card-header">';
                    echo '<h1 class="name">' . $row['profile_name'] . '</h1>'; 
                    echo '</div>';
                    echo '<div class="userImg">';
                    echo '<img src="' . $row['image'] . '" alt="Imaginea prietenului">';
                    echo '</div>';
                    echo '<div class=but-duo>';
                    echo '<button type="submit" class="btn btn-success message" name="Message">Message</button>';
                    echo '<button type="submit" class="btn btn-danger " name="Delete">Delete</button>';
                    echo '</div>';



                    echo '</div>';
                }
            }
        }
    } else {
        // Nu afișăm nimic, deoarece nu există prieteni
    }

  } else {
      // Aici poți adăuga un mesaj sau o re-direcționare către pagina de autentificare dacă nu este sesiune activă
  }
  ?>
</body>

</html>