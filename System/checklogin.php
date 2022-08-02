<?php 
    session_start();
    require_once 'config.php';


    $strSql = "SELECT * FROM tb_member WHERE EMail = '{$_POST["username"]}' AND Password = '{$_POST["password"]}' ";
    $query = mysqli_query($conn, $strSql);
    $result = mysqli_fetch_array($query);

    echo $strSql;
    if($result){ 

        $_SESSION["IDMember"] = $result["IDMember"];
        $_SESSION["Status"] = $result["Status"];
        $_SESSION["Name"] = $result["Name"];
        
        header('Refresh:0 ../dashboard.php');
        echo "<script type =text/javascript>alert('ยินดีต้อนรับ: {$_SESSION["Name"]}');</script>"; 

    }else{ 
        echo "<script type =text/javascript>alert('รหัสผ่านไม่ถูกต้อง');</script>";
        header('Refresh:0 ../login.php');
    }
    
    mysqli_close($conn);


?>