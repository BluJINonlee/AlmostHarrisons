<?php
    if(!$_REQUEST){
     header('Location: RSVP.php');
        die();
    }

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RSVP | Almost Harrisons</title>
</head>

<body>
  
    <?php
       if ($_REQUEST) {
           echo "<h1></h1>
        <form id='RSVPForm' method='post' action='confirmation.php'>
            <input type='hidden' name='GID' value='".$_REQUEST['GID']."'/>
            <input type='email' name='email' placeholder='email address' required='required'/>
            <br/>
            <select name='meal'>
                <option value='null' disabled='disabled' selected>Select Your Meal</option>
                <option value='chicken'>Chicken</option>
                <option value='fish'>Fish</option>
                <option value='vegetarian'>Vegetarian</option>
            </select>
            <br/>

            <input type='submit' class='button primary' href='#' value='Accept Invitation' /><a href='RSVP.php'>cancel</a>";
       }else{
        echo "<h2>No information was received. Please return to the RSVP page <a href='RSVP.php'>here</a>";
       }
    
    ?>

    </form>
   
</body>

</html>


