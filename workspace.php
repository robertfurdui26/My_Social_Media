<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="work.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Workspace</title>
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
if ( isset( $_SESSION[ 'id' ] ) && isset( $_SESSION[ 'username' ] ) ) {
    ?>

                    </li>
                    </ul>

                    <?php
}
?>
                    <form class='d-flex'>
                        <?php
if ( isset( $_SESSION[ 'id' ] ) && isset( $_SESSION[ 'username' ] ) ) {
    ?>
                        <a href='page_home.php' class='btn btn-success log'>Back</a>
                        <?php
} 
?>
                    </form>
                </div>
            </div>
        </nav>
    </section>


    <?php
    if ( isset( $_SESSION[ 'id' ] ) && isset( $_SESSION[ 'username' ] ) ) {

 $videos = array(
    array(
        "path" => "video/clip.mp4",
        "type" => "video/mp4",
        "description" => "Lois nu invata"
    ),
    array(
        "path" => "video/clip2.mp4",
        "type" => "video/mp4",
        "description" => "Gandurile tale sunt bune pentru mine"
    )
);

// Iterăm prin fiecare videoclip și afișăm cardurile
foreach ($videos as $video) {
    echo '<div class="video-card">';
    echo '<video width="320" height="200" controls>';
    echo '<source src="' . $video['path'] . '" type="' . $video['type'] . '">';
    echo 'Your browser does not support the video tag.';
    echo '</video>';
    echo '<p class="description">' . $video['description'] . '</p>';
    echo '</div>';
} 
    }
?>




</body>

</html>