<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";

try {
    $ilnk = mysqli_conect($host,$user,$pass,$db);
    mysqli_query($link, "SET NAMES utf8");
} catch (Exception $e){
    echo $E "Error no:" .mysqil_errno($link);
}

