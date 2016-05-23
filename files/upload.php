<?php

session_start();

$server="localhost";
$user="root";
$password="";
$db="safe_pull";

$con = mysqli_connect($server,$user,$password,$db);

if (!$con) {
  die(mysqli_error($con));
}

$id=$_SESSION['id'];
$description = $_POST['describe'];
date_default_timezone_set("Asia/Calcutta");
$date = date("d-m-Y h:i:s");  //date & time format used -> dd/mm/yyy hh:mm:ss am/pm

$count=0;
$f=0;
foreach($_FILES['files']['name'] as $files){
  $count++;
}
//echo $count;

$target_path = "../users/$id/";

foreach (array_combine($_FILES['files']['name'],$_FILES['files']['tmp_name']) as $file=>$tmp)
{
    $target_path = $target_path . basename( $file);

    if(move_uploaded_file($tmp, $target_path))
    {
      $sql = "INSERT INTO `$db`.`$id`(`files` , `description` , `time`) VALUES ('$file' , '$description' , '$date')";
      if(!mysqli_query($con , $sql)){
        die('Connection Failed on 1'.mysqli_error($con));
      }
      $sql = "INSERT INTO `$db`.`files` (`name` , `description` , `owner` , `time`) VALUES ('$file' , '$description' , '$id' , '$date')";
      if(!mysqli_query($con , $sql)){
        die('Connection Failed on 2 '.mysqli_error($con));
      }
      $target_path = "../users/$id/";
      $f++;
      $percent = ($f/$count)*100;
      echo "<progress value='$percent' max='100'></progress>";
    }

    else
    {
        echo "There was an error uploading the file, please try again!";
    }

}
echo "
        <script>
            alert('File(s) Uploaded Successfully');
            window.location = '../user.php';
        </script>
     "
?>
