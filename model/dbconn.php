<?php

$conn = mysqli_connect("localhost","root","abhishek","Project2");

if(!$conn)
{
// die the connection
die("Connection failed:".mysqli_connect_error());
}

?>