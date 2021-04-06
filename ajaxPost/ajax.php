<!DOCTYPE html>
<html>
<body>

<h2>AJAX</h2>

<button type="button" onclick="MyAjaxFunc()">Request data</button>

<p id="demo"></p>
 
<script>
function MyAjaxFunc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("demo").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/ajaxPost/get_demo.php", true);
 
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=henry&lname=Ford");



 
}
</script>

</body>
</html>
