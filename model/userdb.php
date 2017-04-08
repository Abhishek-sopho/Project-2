<?php

include "dbconn.php";

$name = $_POST["uname"];
$pass = $_POST["psw"];
$repass = $_POST["rpsw"];

if($pass !== $repass)
{
	<script>alert("Password do not match");</script>
	exit;
}
else
{


$sql = "INSERT INTO user (name,password) VALUES ('$name','$pass')";
$result = $conn->query($sql);

echo "success";

}


// header("Location: login.html");

?>

