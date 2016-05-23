<?php
session_start();
$x=$_SESSION['name'];
if(!$x)
{
	header("location: login_fail");
}
?>

<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/input.css">
<link rel="stylesheet" type="text/css" href="css/dropdown.css">
<link rel="stylesheet" type="text/css" href="css/table.css">

<head>
<title>1Sky</title>
</head>

<body class="index">

<!--header starts-->
<div id="top_border">
<div id="index_header">
<a href="#" class="title">
1Sky
</a>
<div id="head_name">
<ul id="drop-nav">
<li>Hi, </li>
<li>
<a href="#">
<?php
echo "  $x";
?>
</a>
<ul>
<li><a href="logout">Log out</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<!--header ends-->

<!--below partirions-->
<div id="right_home">
Select Files to Upload
<br>
<br>
<!--upload form-->
<form action="files/upload" method="POST" enctype= "multipart/form-data" class="upload">
	<!--Browse Files -->
	<input type="file" name="files[]" multiple >
	<br><br><br>
	<!--Description-->
	<textarea name="describe" placeholder="Descrition of File(s)."></textarea>
	<br><br><br><br>
	<input type="submit" value="Upload">
</form>
<!--form ends-->
</div>

<div >
	<table id="left_menu">
	  <tr>
	    <td ><a href="files/user_files"><img src="files/images/upload_icon.png" width=20px height=20px> All Uploads</a></td>
		</tr>
		<tr>
			<td ><a href="files/user_images"><img src="files/images/img_icon.png" width=20px height=20px> Images</a></td>
		</tr>
		<tr>
			<td ><a href="files/user_pdf"><img src="files/images/pdf_icon.png" width=20px height=20px> PDFs</a></td>
		</tr>
	</table>
</div>

</body>
</html>
