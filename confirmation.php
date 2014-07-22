



<?php
    if (!$_POST) {
        header('Location: RSVP.php');
        die();
    }
    
?>

<html>
    <head>
    
    
    </head>
    <body>
        <?php

            foreach($_POST as $name => $value){
                echo "{$name} = ".sanitize($value)."<br/>";
            }
            $con = mysqli_connect("localhost","root","","toy");
            
            //sanitize date
            function sanitize($input) {
                $input = trim($input);
                $input = stripslashes($input);
                $input = htmlspecialchars($input);
                return $input;
            }
            
            $email = sanitize($_POST['email']);
            
            //check connection
            if(mysqli_connect_errno()){
                echo "Something went wrong. If the issue continues, email <a href='mailto:Josh@almostharrisons.com'>Josh@almostharrisons.com</a>.";
            } else {
                
                $sql = "UPDATE Guests SET meal='{$_POST['meal']}', email='$email', response=true WHERE GID = {$_POST['GID']}";
                echo $sql;
                
                mysqli_autocommit($con, false);
                mysqli_query($con, $sql); 
                
                
                if (mysqli_error($con)){
                    echo mysqli_error($con);   
                } else {
                    mysqli_commit($con);
                    echo  "Success!";
                }
            }
        ?>
        
        
        
    </body>



</html>