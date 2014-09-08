



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
            <div class="grid-100">
                <h1 class="center">We are so excited that you are joining us!</h1>
                <h2 class="center">You are all set. We'll see you on the big day!!!</h2>
                <h2 class="center">In preparing for the big day, please keep a few things in mind:</h2>
            </div>
        </div>
        <br/>
        <br/>
        <div class="grid-container">
            <div class="grid-60 push-20" id="reminders">
                <h3>
                <ul>
                    <li>Each person invited must RSVP separately. That is, for example, if you and your spouse were invited via a single invitation, each person, individually, must RSVP through the RSVP portion of the website.</li>
                    <li>There are no "plus ones"; Every one has been invited personally by name.</li>
                    <li>This is an <em><strong>adult only</strong></em> wedding. So please be sure to make accomodations for the little ones!</li>
                    <li>If you are coming from out of town, or just would like to stay near the wedding venue, a special-rate wedding block can be reserved <u><a href="http://www.countryinns.com/harrisondouglas">HERE</a></u>.</li>
                    <li>If you cannot not attend for any reason, please return to the page, and decline the invitation so that we have an accurate count. :)</li>
                    <li>Remember that the wedding is invitation only. No extra guest will be admitted.</li>
                </ul>
                </h3>
                
            </div>
        </div>
        <br/>
        <h2 class="center">If there are any questions or concerns, please feel free to email me at <u><a href="mailto:joshua@almostharrisons.com">Joshua@almostharrisons.com</a></u></h2>
        <div class="center">
            <h3>Now that that is done, have you taken a look at our <h1><a href="registry.php">REGISTRY!?</a></h1></h3>
        </div>
        <?php
            foreach($_POST as $name => $value){
                //echo "{$name} = ".sanitize($value)."<br/>";
            }
            //$con = mysqli_connect("localhost","root","","toy");
            
            include_once "connectDatabase.php";
            
            //sanitize date
            include_once "sanitize.php";
            
            $email = sanitize($_POST['email']);
            
            //check connection
            if(mysqli_connect_errno()){
               // echo "Something went wrong. If the issue continues, email <a href='mailto:Josh@almostharrisons.com'>Josh@almostharrisons.com</a>.";
            } else {
                
                $sql = "UPDATE Guests SET meal='{$_POST['meal']}', email='$email', response=true WHERE GID = {$_POST['GID']}";
                //echo $sql;
                
                mysqli_autocommit($con, false);
                mysqli_query($con, $sql); 
                
                
                if (mysqli_error($con)){
                   // echo mysqli_error($con);   
                } else {
                    mysqli_commit($con);
                   // echo  "Success!";
                }
            }
            include_once "footer.php";
        ?>
        
        
        
    </body>



</html>