
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

<!-- below partitions-->
<div id="content">
<div id="right">
<div id="form_text_1">
Not a Member? Create an Account.<br>
</div>
<br><br><br><br><br>
<div id="form_text_2">
It's Free. Believe Us.
</div>
<br>
<form action="files/register_verify" method="POST" class="register">
<!--First Name :
<br>-->
<input type="text" name="f_name" placeholder="First Name" style="text-transform: capitalize;">
<!--<br>
Last Name :
<br> -->
<input type="text" name="l_name" placeholder="Last Name" style="text-transform: capitalize;">
<br><br>
<!--Email id :
<br>-->
<input type="text" name="id" placeholder="Email-id" style="width: 463px">
<br><br>
<!--Contact Number :
<br>-->
<input type="text" name="number" placeholder="Contact Number" style="width: 463px">
<br>
<!--Password :
<br>-->
<p id="fail_login">
*Password Must Contain 8-21 Characters Except BLANK SPACES.
</p>
<br>
<input type="password" name="paswd" placeholder="Create Password" style="width: 463px">
<br><br>
<!--Confirm Password :
<br>-->
<input type="password" name="confirm" placeholder="Confirm Password" style="width: 463px">
<br><br>
<input type="submit" value="Register">
</form>
</div>

</div>
</body>
</html>
