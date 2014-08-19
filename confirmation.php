



<?php
    if (!$_POST) {
        header('Location: RSVP.php');
        die();
    }
    
?>

<html>
    <head>
    <title>Confirmation | Almost Harrison</title>
     <?php include_once "HTMLhead.php" ?>
    </head>
    <body>
        <?php include_once "header.php"; ?>
        
        <div class="grid-container">
            <div class="grid-100 center pushedDown">
                <h1>We are so excited that you are joining us!</h1>
                <h2>You are all set. We'll see you on the big day.</h2>
                <h3>Please keep in mind, that if you cannot not attend for any reason, please return to the page, and decline the invitation so that we have an accurate count. :)</h3>
            </div>
        </div>
        
        <?php
            foreach($_POST as $name => $value){
                echo "{$name} = ".sanitize($value)."<br/>";
            }
            //$con = mysqli_connect("localhost","root","","toy");
            
            include_once "connectDatabase.php";
            
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
            include_once "footer.php";
        ?>
        
        
        
    </body>



</html>