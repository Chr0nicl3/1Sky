<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="input.css">
<link rel="stylesheet" type="text/css" href="table.css">

<head>
<title>Safe Pull</title>
</head>

<body class="index">

<!--header starts-->
<div id="top_border">
<div id="index_header">
<a href="index" class="title">
Safe Pull
</a>
<div id="head_name">
Hi, <span><?php
session_start();
$x=$_SESSION['name'];
echo "$x";
?>
</span>
</div>
</div>
</div>
<!--header ends-->

<!-- table-->
<div id="plan_head">
Choose Your Plan
</div>
<br>
<table id="customers">
  <tr>
    <th></th>
    <th>Free</th>
    <th>Pro</th>
  </tr>
  <tr>
    <td>Storage</td>
    <td>2 GB</td>
    <td>100 GB</td>
  </tr>
  <tr class="alt">
    <td>Downloads</td>
    <td>10 per/Day</td>
    <td>Unlimited</td>
  </tr>
  <tr>
    <td>Cost</td>
    <td>Free</td>
    <td>$1.49 per/month</td>
  </tr>
  <tr class="alt">
    <td>Select Your Plan</td>
    <form action="register_final" method="POST">
    <td><input type="radio" name="plan" value="free"></td>
    <td><input type="radio" name="plan" value="pro"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="Register"></td>
    </form>
    <td></td>
  </tr>
</table>

</body>
</html>
