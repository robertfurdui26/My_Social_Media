<?php

session_start();

require 'db.php';




if (isset($_POST['save_profile'])) {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $uploadDir = "upload/";
        $uploadPath = $uploadDir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadPath)) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $profile_name = $_POST["profile_name"];
            $Email = $_POST["Email"];
            $Address = $_POST["Address"];
            $Phone = $_POST["Phone"];
            

            $image = $uploadPath;

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);


            $sql = "INSERT INTO user_profile (username,password,profile_name,image, Email,Address,Phone ) VALUES ('$username','$hashed_password','$profile_name',  '$image','$Email','$Address','$Phone')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['message'] = "Înregistrare reușită!!";
                header("Location: login.php");
                exit();
            } else {
                echo "Eroare: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Eroare la încărcarea imaginii.";
        }
    } else {
        echo "Eroare: nu a fost selectată nicio imagine sau a apărut o problemă la încărcare.";
    }
}





?>