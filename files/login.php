<?php

session_start();

$db="safe_pull";
$db_host="localhost";
$db_user="root";
$db_pass="";

$email = $_POST["id"];
$pass = $_POST["paswd"];

$salt = "SeCuRiTy.FiRsT";
$hash = md5($salt.$pass);

$con = mysqli_connect($db_host,$db_user,$db_pass,$db);

if (!$con)
{
	echo "Connection Failed: " . mysqli_connect_error();
}

elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
	header("location: ../login_fail");
}


else
{
	$sql = "SELECT id,paswd,f_name,l_name FROM users WHERE id='$email' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$_SESSION['name'] = $row["f_name"];
	$_SESSION['id'] = $row["id"];

	if($email==$row["id"] && $hash==$row["paswd"])
	{
		header("location: ../user");
	}
	else
	{
		header("location: ../login_fail");
	}
}
?>
