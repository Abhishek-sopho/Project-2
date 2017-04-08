<?php

require "dbconn.php";

$sql = "SELECT * FROM user WHERE name = $_POST['uname']";
$result = $conn->query($sql);

        // if we found user, check password
        if (count($result) == 1)
        {
            // first (and only) row
            $row = $result[0];
            session_start();

            // compare hash of user's input against hash that's in database
            if ($_POST["psw"] === $row["password"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to portfolio
                header("Location: ../public/store.php");
            }
        }




?>

