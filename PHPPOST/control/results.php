<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";
$name=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["fname"];
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

}
?>