<?php
require './connection.php';
$user= $_POST["user"];
$pass= $_POST["pass"];
$sql="INSERT INTO `users` (`id`, `user`, `pass`) VALUES (NULL, '$user', '$pass')";

if (mysqli_query($conn, $sql)) {
header("Location: ./view.php", true, 301);
} else {
    echo "Error adding record: " . mysqli_error($conn);
}
$conn->close();





?>