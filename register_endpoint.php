<?php
session_start();

require 'db.php';



if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM user_profile WHERE username='$username'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        $_SESSION['message'] = "Utilizatorul există deja!";
        header("Location: signUp.php");
        exit();
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO user_profile (username, password) VALUES ('$username', '$hashed_password')";
        if ($conn->query($insert_query) === TRUE) {
            $_SESSION['message'] = "Înregistrarea a fost realizată cu succes!";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['message'] = "Eroare la înregistrare: " . $conn->error;
            header("Location: signUp.php");
            exit();
        }
    }
    $conn->close();
}
?>