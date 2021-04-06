function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }

  if (document.getElementById("red").checked == false &&  document.getElementById("blue").checked == false)
  {
    document.getElementById("mytext").innerHTML="Please select any radio button";
    return false;
  }
}