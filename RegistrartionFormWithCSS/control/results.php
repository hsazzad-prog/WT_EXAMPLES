<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($name) || (strlen($name)<3))
{
    $validatename= "you must enter name";

}
else
{
    $validatename= "your name is ".$name;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}
if(!isset($_REQUEST["vehicle1"])&&!isset($_REQUEST["vehicle2"])&&!isset($_REQUEST["vehicle3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["vehicle1"]))
   {
       $v1= $_REQUEST["vehicle1"];
   }
   if(isset($_REQUEST["vehicle2"]))
   { 
       $v2= $_REQUEST["vehicle2"];
   }
   if(isset($_REQUEST["vehicle3"]))
   {
    $v3= $_REQUEST["vehicle3"];
   }
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}
$target_dir = "files/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>