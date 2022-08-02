<?php
require_once('config.php');
session_start();
echo $_GET['Del'];


    $sql = "DELETE FROM `tb_products` WHERE idProducts = '".$_GET['Del']."'";
    $query = mysqli_query($conn, $sql);

    if ($query){
        echo "<script>alert('ลบข้อมูลสำเร็จ')</script>";
        header('Refresh:0 ../products.php');
    }else{
        echo "<script>alert('ลบข้อมูลไม่สำเร็จ')</script>";
        header('Refresh:0 ../products.php');
    }


?>