<?php

session_start();

require 'db.php';




if (isset($_POST['log'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_profile WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];

            header("Location: page_home.php");
            exit();
        } else {
            $_SESSION['message'] = "Parola Incorecta!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "User Name Incorect!";
        header("Location: login.php");
        exit();
    }

    $conn->close();
}





?>