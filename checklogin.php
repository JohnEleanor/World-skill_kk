<?php 
    session_start();
    require_once('config.php');

    $strSql = "SELECT * FROM tb_member WHERE EMail = ' ".$_POST["username"]." ' and Password = ' ".$_POST["password"]." '";
    ecoh($strSQL);