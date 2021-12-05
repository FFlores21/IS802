<?php
$servername = "localhost";
$database = "db_elis(2.0)";
$username = "root";
$password = "";

$bd_correos = "correos";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>