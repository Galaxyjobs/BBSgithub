<?php 
    $server="localhost";
    $username="root";
    $password="1520872091Fsh";
    $database="forum";
    $coon=new mysqli($server,$username,$password,$database);
    if($coon->connect_error)
    {
        die("连接失败!".$coon->connect_error);
    }
?>