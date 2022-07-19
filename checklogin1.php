<?php 

session_start();
require_once('config.php');
$_POST['EMail'] = "a";
$_POST['Password'] = "aa";

$gg = "SELECT * FROM tb_member WHERE EMail = '".$_POST['EMail']."' AND Password = '".$_POST['Password']."'";
$query = mysqli_query($conn, $gg);
$result = mysqli_fetch_array($query);

echo $gg;
if ($result) {
   echo "OK"; 
   // header('');
   
}else {
   echo "Not OK";
   echo "<script type = text/javascript>alert('รหัสผ่านไม่ถูกต้อง')</script>";
   // header('Refresh:0 url = checklogin1.php');
}


?>