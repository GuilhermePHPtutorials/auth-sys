<?php
$host = "localhost";
$dbname = "auth-sys";
$user = "root";
$password = "";
$conn = new PDO("mysql:host=$host; dbname=$dbname;", $user, $password);
// if ($conn == true) {
//     echo "it's fine";
// } else {
//     echo "connection is wrong";
// }
