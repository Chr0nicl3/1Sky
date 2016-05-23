<?php

session_start();

$server="localhost";
$user="root";
$password="";
$db="safe_pull";

$id = $_POST["id"];
$first = $_POST["f_name"];
$last = $_POST["l_name"];
$mob = $_POST["number"];
$pass1 = $_POST["paswd"];
$pass2 = $_POST["confirm"];

$_SESSION['name']=$first;
$_SESSION['id']=$id;

$salt = "SeCuRiTy.FiRsT";
$hash = md5($salt.$pass1);

$con = mysqli_connect($server,$user,$password,$db);

$sql = "SELECT id FROM users ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);


if(!$con){
	die("connect Failed".mysqli_connect_error());
}

foreach ($row as $email) {
	if ($id==$email) {
		header("location: ../register_incom");
	}
}

if(empty($id)||empty($first)||empty($last)||empty($mob)||empty($pass1)||empty($pass2)){
	header("location: ../register_incom");
}

elseif($pass1!=$pass2){
	header("location: ../register_incom");
}

elseif (!filter_var($id,FILTER_VALIDATE_EMAIL)){
	header("location: ../register_incom");
}

elseif (!preg_match("/^[0-9]{10,10}$/",$mob)) {
	header("location: ../register_incom");
}

elseif (!preg_match("/^[a-zA-Z ]*$/",$first) || !preg_match("/^[a-zA-Z ]*$/",$last)) {
  header("location: ../register_incom");
}

elseif (!preg_match("/^[^ ]{8,21}$/",$pass1)) {
  header("location: ../register_incom");
}

else{
	$sql = mysqli_query($con,"INSERT INTO `safe_pull`.`users` (`f_name`, `l_name`, `id`, `number`, `paswd`) VALUES ('$first', '$last', '$id', '$mob', '$hash')");
	$sql = mysqli_query($con,"CREATE TABLE `$db`.`$id` (`id` INT NOT NULL AUTO_INCREMENT, `files` VARCHAR(50) NOT NULL , `description` VARCHAR(500) NOT NULL , `time` VARCHAR(20) NOT NULL , PRIMARY KEY(`id`)) ENGINE = InnoDB");
	mkdir("../users/$id");
	header("Location: ../welcome");
}

?>
