<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "db_farm"; 

$conn = mysqli_connect($host,$user,$password,$db);
mysqli_query($conn, "SET CHARACTER SET 'uft8'");
mysqli_query($conn, "SET SESSION collation_connection = 'uft8_unicode_ci'");

if (!$conn) {
    echo "can not connect DB ";
}
?>