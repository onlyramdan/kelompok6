<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname ="legalinaja";
    $connect = mysqli_connect($hostname,$user,$password,$dbname) or die('connection failed');
?>