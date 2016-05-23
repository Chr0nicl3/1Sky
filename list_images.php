<?php
session_start();
$x=$_SESSION['name'];
$c=$_SESSION['i'];
$id = $_SESSION['id'];
?>

<html>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/input.css">
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="css/dropdown.css">

<head>
<title>1Sky</title>
</head>

<body >

<!--header starts-->
<div id="top_border">
<div id="index_header">
<a href="user" class="title">
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

<div >
	<table id="left_menu" style="margin-left:20px;">
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


<!-- file list -->
<div id="list">
<?php
    echo"
    <table id='customers'>
    <tr>
      <th>Name</th>
      <th style='text-align:center;'>Modified</th>
      <th></th>
      <th>Options</th>";
			if ($c==-1) {
				echo"
	          <tr>
	            <td style='text-align:left;width:450px;'>Nothing to Show.</td>
							<td></td>
							<td></td>
							<td></td>
	          </tr>";
			}
			else {
		    for ($i=0; $i <= $c; $i++) {
		      $file[$i] = $_SESSION["images[$i]"];
					$date = $_SESSION["date[$i]"];
		      echo"
		          <tr>
		            <td style='text-align:left;width:450px;'>$file[$i]</td>
		            <td style='text-align:center;width:250px;'>$date</td>
		            <td style='text-align:right;width:10px;'>
		            <form method=GET action='files/delete_img'>
		            <input type='hidden' name='file' value='$file[$i]'>
		            <input type='image' title='Delete' src='files/images/delete_icon.png' width=30px height=30px>
		            </form>
		            </td>
					<td style='text-align:right;width:10px;'>
						<a href='users/$id/$file[$i]'>
						<img title='Download' alt='Download' src='files/images/download_icon.png' width=30px height=30px>
						</a>
					</td>
		          </tr>";
		    }
			}
?>
</div>

<!-- file list end-->

</body>
</html>
