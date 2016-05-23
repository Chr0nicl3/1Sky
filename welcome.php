<?php
session_start();
$x=$_SESSION['name'];
?>

<html>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/input.css">

<head>
<title>1Sky</title>
</head>

<body class="index">

<!--login form & header starts-->
<div id="top_border">
<div id="index_header">
<a href="index" class="title">
1Sky
</a>
</div>
<form action="files/login" method="POST" class="login">
Email :
<input type="text" name="id" placeholder="Email id">
Password :
<input type="password" name="paswd" placeholder="Password" autocomplete="off">
<input type="submit" value="Submit">
</form>
</div>
<!--login form & header ends-->

<div id="welcome_head1">
SocialVault Accounts
</div>

<div id="welcome_head2">
Hello <span>
<?php
echo "$x,";
?>
</span>
</div>

<p class="welcome">
Welcome to the Social Network of Files.
<br><br>
<font size="3px">
Login with your Email-id and Password.
</font>
<br>
</p>
</body>
</html>

<?php
session_unset();
session_destroy();
?>
