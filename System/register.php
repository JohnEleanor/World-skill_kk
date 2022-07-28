<?php

require_once 'config.php';

    if(isset($_POST['btnInsert'])){ 

        if ($_POST['confirm-password'] != $_POST['password']){
            echo "<script type = text/javascript>alert('รหัสผ่านไม่ตรงกัน');</script>";
            header('Location ../register.php');
        }else{

            $sql = "INSERT INTO tb_member (`Name`, `LastName`, `EMail`, `Mobile`, `Address`, `Province`, `District`, `SubDistrict`, `ZipCode`, `Password`, `Status`, `FarmersGroup`) value ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['address']."','".$_POST['province']."','".$_POST['district']."','".$_POST['subdistrict']."', '".$_POST['zipcode']."', '".$_POST['password']."', '".$_POST['type']."', '".$_POST['Group']."')";
            // echo($sql);
            $query = mysqli_query($conn, $sql);
            if ($query){
                echo "<br>เพิ่มข้อมูลสำเร็จ";
                echo "<script type = text/javascript>alert('ลงทำเบีนนทำเสร็จ');</script>";
                header('Refresh:0 ../login.php');
            }else{
                echo "<br>เพิ่มข้อมูลไม่สำเร็จ";
                echo "<script type = text/javascript>alert('เพิ่มข้อมูลไม่สำเร็จ');</script>";
                header('Refresh:0 ../index.php');
            }

        }
    }
?>