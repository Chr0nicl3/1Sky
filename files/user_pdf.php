<?php
    session_start();

    $db="safe_pull";
    $db_host="localhost";
    $db_user="root";
    $db_pass="";

    $id = $_SESSION['id'];

    $files = scandir("../users/$id");
    $count = count($files);

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db);
    /*It's all MAGIC. */
    $c = 2;
    $i=0;
    for ($c; $c < $count; $c++) {
        $ext = pathinfo($files[$c], PATHINFO_EXTENSION);
        if ($ext == "pdf") {
          //echo "$files[$c]";
          $_SESSION["pdf[$i]"] = $files[$c];
          $sql = mysqli_query($con , "SELECT `time` FROM `$db`.`files` WHERE `name`='$files[$c]'");
          $row = mysqli_fetch_array($sql);
          $_SESSION["date[$i]"]=$row[0];
          $i++;
        }
        else {
          continue;
        }
    }
    $_SESSION['p'] = ($i-1);
    header("location: ../list_pdf");
?>
