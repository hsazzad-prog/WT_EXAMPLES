<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="pagetwo.php"> MY Profile</a></h5>


<h5>Do you want to go to <a href="pageone.php"> GO back</a></h5>


<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>


 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/JSexampleWithSQLAjax/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>



<label>find detail of user</label>

  <input type="text" id="uname" >
  <button onclick="showmyuser()">Search</button>

<p id="mytext"></p>



</body>
</html>

<?php


?>   


