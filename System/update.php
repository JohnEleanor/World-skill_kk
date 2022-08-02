<?php
require_once('config.php');




$sql = "UPDATE `tb_products` SET 
`idProducts`='{$_POST['idProducts']}',
`Name`='{$_POST['Name']}',
`Price`='{$_POST['Price']}',
`Summary Info`='{$_POST['Info']}',
`PostOn` = '{$_POST['PostOn']}' WHERE idProducts = '{$_POST['idProducts']}'";

echo $sql;
// print_r($_POST);

$query = mysqli_query($conn, $sql);
if ($query){
    echo "<script>alert('Update ข้อมูลสำเร็จ')</script>";
    header('Refresh:0 ../products.php');
}else{
    echo "<script>alert('Update ข้อมูลไม่สำเร็จ')</script>"; 
    header('Refresh:0 ../products.php');
}


?>