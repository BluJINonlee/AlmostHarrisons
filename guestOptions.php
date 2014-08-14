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
    <?php include_once "HTMLhead.php"; ?>
</head>

<body>
  
    <?php include_once "header.php";?>
           <div class="grid-container">
                <div class="grid-100 center">
                    <h1>Yay!</h1>
                    <h2>We're so excited that you have decided to come. Please take a couple seconds to let us know what you would like to have at the reception, and email, just in case we need to contact you.</h2>
                </div>
            </div>
           <div class="grid-container">
                <div class="grid-50">
                    <h2>This is where the Menu Goes!</h2>
                    <br/>
                </div>
                <div class="grid-50"
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
                        <div class="grid-container">
                            <div class="grid-50"><input type='submit' class='button primary' href='#' value='Accept Invitation' /></div>
                            <div class="grid-50"><a class="button secondary" href='RSVP.php'>cancel</a></div>
                        </div>
                    </form>
                </div>
           </div>
   <?php include_once "footer.php"; ?>
</body>

</html>


