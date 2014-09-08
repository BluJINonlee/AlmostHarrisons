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
        <br/>
        <br/>
        <br/>
        <div class="grid-container" id = "menu">
             <div class="grid-40" id="menu">
                 <h2>Stuffed Chicken Breast</h2>
                 <p><em>Chicken breast stuffed with fresh spinach, medley of mushrooms, red onion and parmesan. Served with a garlic cream sauce.</em></p>
                 <h2>Parmesan Encrusted Whitefish</h2>
                 <p><em>Fresh fillet of whitefish encrusted with parmesan reggiano cheese and served with a chive beurre blanc sauce.</em></p>
                 <h2>Eggplant Parmesan</h2>
                 <p><em>Tender slices of eggplant bread and baked with mozzarella cheese and homemade marinara over penne pasta</em></p>
             </div>
             <div class="grid-40 push-10">
                 <h2 class="center">What are you going to have?</h2>
                 <form id='RSVPForm' method='post' action='confirmation.php'>
                     <input type='hidden' name='GID' value='<?php echo $_REQUEST['GID'] ?>'/>
                     <input type='email' name='email' placeholder='email address' required='required'/>
                     <br/>
                     <select name='meal' required='required'>
                         <option value='' disabled='disabled' selected>Select Your Meal</option>
                         <option value='c'>Stuffed Chicken Breast</option>
                         <option value='f'>Parmesan Encrusted Whitefish</option>
                         <option value='v'>Eggplant Parmesan</option>
                     </select>
                     <br/>
                     <br/>
                     <br/>
                     <div class="grid-container">
                         <div class="grid-50"><input type='submit' class='button primary' href='#' value='Accept Invitation' /></div>
                         <div class="grid-50"><a class="button secondary" href='RSVP.php'>Cancel</a></div>
                     </div>
                 </form>
             </div>
        </div>
   <?php include_once "footer.php"; ?>
</body>

</html>


