<?php
    session_start();

    $id = $_SESSION['id'];
    $file = $_GET['file'];

    $db="safe_pull";
    $db_host="localhost";
    $db_user="root";
    $db_pass="";

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db);

    $sql = mysqli_query($con , "DELETE FROM `files` WHERE `files`.`name` = '$file'");
    $sql = mysqli_query($con , "DELETE FROM `$id` WHERE `$id`.`name` = '$file'");

    unlink("../users/$id/$file");
    header("location: user_files");
?>
