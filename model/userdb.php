<?php

//require "dbconn.php";

$dbconnect = mysqli_connect("localhost","root","abhishek","Project2");
if($dbconnect)
{

echo "hi";
}

$email = $_POST["email"];
$name = $_POST["uname"];
$pass = $_POST["psw"];
$repass = $_POST["rpsw"];


if($pass != $repass)
{
	
	echo "<script>alert('Password do not match')</script>" ;
	header("Location: ../public/register.php");
	exit();
	
}
else
{


$sql = "INSERT INTO user (email,name,password) VALUES ('$email','$name','$pass')";

$run=mysqli_query($dbconnect,$sql);

}





header("Location: ../public/store.php");

?>

