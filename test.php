<?php



$server = 'localhost';
$user = 'root';
$password = '';
$database_name = 'book_db';
$connection = '';

$connection = new mysqli_connect($server,$user, $password, $database_name);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "<script>console.log('Connected to the database')</script>";
}





?>