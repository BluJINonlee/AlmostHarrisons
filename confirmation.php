



<?php
    if (!$_REQUEST) {
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
                echo "{$name} = {$value} <br/>";
            }
            $con = mysqli_connect("localhost","root","","toy");
            
            
            //check connection
            if(mysqli_connect_errno()){
                echo "Something went wrong. If the issue continues, email <a href='mailto:Josh@almostharrisons.com'>Josh@almostharrisons.com</a>.";
            } else {
                
                $sql = "UPDATE Guests SET meal='{$_POST['meal']}', email='{$_POST['email']}', response=true WHERE GID = {$_POST['GID']}";
                echo $sql;
                
                mysqli_autocommit($con, false);
                mysqli_query($con, $sql); 
                mysqli_commit($con);
                
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