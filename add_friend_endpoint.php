<?php
session_start();

require 'db.php';




if (isset($_POST["add_friend"])) {
  $id = $_POST["id"];
$_SESSION["friends"][] = $id;
header("Location: friend.php");
exit();
}


?>