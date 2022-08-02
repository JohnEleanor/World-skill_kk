<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "db_collaborativefarming"; 

$conn = mysqli_connect($host,$user,$password,$db);

if (!$conn) {
    echo "can not connect DB ";
}
?>