<?php

require "dbconn.php";
session_start();

if(isset($_POST['submit'])){
    $password =$_POST['psw'];
    $name = $_POST['uname'];
    //echo $password;
    $sel = "select * from user where name = '$name' ";
    $run = mysqli_query($dbconnect,$sel);
    $row = mysqli_fetch_array($run);
    $pass = $row['password'];
    $id=$row['id'];
    
    $count = mysqli_num_rows($run);
    if($password==$pass){
        $_SESSION['id']=$id;
        //echo "<script>alert('dfevgs')</script>";
        echo "<script>window.open('../public/store.php','_self')</script>";
    }
    else{
        echo "<script>alert('username or password incorrect!!!')</script>";
        echo "<script>window.open('../public/login.php','_self')</script>";
        //exit();
    }
}

/*$name = $_POST["uname"];

$sql = "SELECT * FROM user WHERE name = '$name'";
//$result = $dbconnect->query($sql);
$run=mysqli_query($dbconnect,$sql);
$row = mysqli_fetch_array($run);
$password = $row['password'];
$count = mysqli_num_rows($run);

        // if we found user, check password
        if ($count == 1)
        {
            // first (and only) row
            //$row = $result[0];
            session_start();

            // compare hash of user's input against hash that's in database
            if ($_POST["psw"] == $password))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to portfolio
                header("Location: ../public/store.php");
            }
            else
            {
                echo "sdf";
            }
        }
        else echo "werr";


*/

?>

