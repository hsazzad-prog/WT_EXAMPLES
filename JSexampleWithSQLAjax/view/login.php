<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>
</head>
<body>

<div class="header">
  <h1>Welcome To my Site</h1>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
</div>
<h2>Login</h2>


<p id="mytext"></p>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">
    <input type="text" id="username" name="username" placeholder="Enter your username" >
    <input type="password" id="password" name="password" placeholder="Enter your password" >
    <input type="radio" name="colors" id="red">Red<br>
  <input type="radio" name="colors" id="blue">Blue<br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer">
<h3> my footer </h3>

</div>
</body>
</html>