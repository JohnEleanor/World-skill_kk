<?php 
    session_start();
    require_once('config.php');

    echo $_POST["username"];
    echo $_POST["password"];

    $strSql = "SELECT * FROM tb_member WHERE EMail = '".$_POST["username"]."' and Password = '".$_POST["password"]."'";
    $query = mysqli_query($conn, $strSql);
    $result = mysqli_fetch_array($query);

    if($result){ //STATUS เป็นจริง

        $_SESSION["IDMember"] = $result["IDMember"];
        $_SESSION["Status"] = $result["Status"];
        $_SESSION["Name"] = $result["Name"];
        
        header('location:dashboard.php');
    }else{ // STATUS ไม่เป็นจริง
        header('location:index.php');
    }
    
    mysqli_close($conn);
