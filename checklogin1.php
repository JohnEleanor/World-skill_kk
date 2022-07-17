<?php 

session_start();
require_once('config.php');

$_POST["EMail"] = 'a';
$_POST["Password"] = 'a';

$gg = "SELECT * FROM tb_member WHERE EMail = '".$_POST["EMail"]."' AND Password = '".$_POST['Password']."'";
$query = mysqli_query($conn,$gg);
$result = mysqli_fetch_array($query);

if ($result) {
   echo $result['IDMember'];


   $_SESSION['IDMember'] = $result['IDMember'];
   $_SESSION['Name'] = $result['Name'];
   $_SESSION['Status'] = $result['Status'];


   echo "ok";
   // header('location: dashboard.php');
   
}else{
   echo "not ok";
   // header('Refresh:0; url= login.php');
   echo "<script type = text/javascript>alert('รหัสผ่านไม่ถูกต้อง')</script>";
}

?>