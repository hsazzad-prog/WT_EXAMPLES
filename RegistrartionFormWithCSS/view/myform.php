<?php include "../control/results.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
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


<div class="middlecolumn ">
<h1>Registration form </h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
<div class="registrationBox">
Enter your first name: <input type="text" name="fname"> <?php echo $validatename; ?>
<br>
<br>
Enter your email: <input type="text" name="email"> <?php echo $validateemail; ?>
<br><br>

you options are
<br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 I have a bike<br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
I have a car<br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
 I have a boat<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>

<p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br>
  <?php echo $validateradio; ?>
<br>
<input type="file" name="filetoupload">
<br>
<br>
</div>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">

</form>

 </div>
  

 <div class="footer">
<h3> my footer </h3>
</div>

</body>
</html>
