<?php

require "dbconn.php";

$email = $_POST["email"];
$name = $_POST["uname"];
$pass = $_POST["psw"];
$repass = $_POST["rpsw"];

if($pass != $repass)
{
	<script>alert("Password do not match")</script>
	header("Location: ../public/register.php");
	
}
else
{


$sql = "INSERT INTO user (email,name,password) VALUES ('$email','$name','$pass')";

$run=mysqli_query($dbconnect,$sql);

}





header("Location: ../public/store.php");

?>

