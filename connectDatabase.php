<?php

$con = mysqli_connect("localhost", "root", "", "toy");

            //Check for connection error
            if(mysqli_connect_error()) {
                echo "Something went wrong with the connection";
            }
?>