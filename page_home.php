<?php
session_start();

if ( !isset( $_SESSION[ 'id' ] ) || !isset( $_SESSION[ 'username' ] ) ) {
    header( 'Location: home.php' );
    exit();
}

require 'db.php';

$id = $_SESSION[ 'id' ];
$sql = "SELECT image, profile_name FROM user_profile WHERE id = $id";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    $row = $result->fetch_assoc();
    $profile_name = $row[ 'profile_name' ];
    $image_path = $row[ 'image' ];
} else {

    $profile_name = 'Nume Profil';
    $image_path = 'default_image.jpg';
}

?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='pageH.css'>
    <title>Home</title>
</head>

<body>
    <?php include( 'message.php' );
?>

    <section>
        <!-- Codul pentru bara de navigare -->
        <nav class='navbar navbar-expand-lg bg-dark'>
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
                    <ul class='navbar-nav  me-auto mb-2  '>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-white' href='#' role='button'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                My Profile
                            </a>
                            <ul class='dropdown-menu dropdown-menu-start mt-2'>
                                <li class='profile'>
                                    <div class='container'>
                                        <div class='card'>
                                            <div class='card-header'>
                                                <h1><?php echo $profile_name;
                                                 ?></h1>
                                            </div>
                                            <div class='userImg'>
                                                <img src="<?php echo $image_path; ?>" alt='User Image'>
                                            </div>
                                        </div>
                                <li class='prieteni'><a class=' nav-link text-white' aria-current='false'
                                        href='friend.php'>My Friends
                                    </a></li>
                                <li class='optiuni'><a class='nav-link text-white' aria-current=" false"
                                        href='workspace.php'>Workspace</a>
                                </li>
                </div>

                </li>

                </ul>

                </li>
                </ul>
                <ul class='navbar-nav mx-auto addF'>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='add_new_friend.php'>Add New Friend</a>
                    </li>
                </ul>

                <ul class='navbar-nav mx-auto addF'>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='add_new_friend.php'>View Teachers</a>
                    </li>
                </ul>


                <ul class='navbar-nav mx-auto addF'>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='add_new_friend.php'>Be Student</a>
                    </li>
                </ul>


                <?php
}
?>

                <form class='d-flex'>
                    <?php
if ( isset( $_SESSION[ 'id' ] ) && isset( $_SESSION[ 'username' ] ) ) {
    ?>

                    <a href='login.php' class='btn btn-outline-danger log'>Log Out</a>

                    <?php
} else {
    ?>
                    <a class='btn btn-outline-success ' href='login.php'>Log In</a>
                    <?php
}
?>
                </form>
            </div>
            </div>
        </nav>
    </section>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'>
    </script>
</body>

</html>