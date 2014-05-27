<?php
    if (!$_REQUEST) {
        header('Location: RSVP.php');   
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RSVP | Almost Harrisons</title>
    <link rel="shortcut icon" type="img/png" href="assets/img/favicon.ico" />
  
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Bad+Script|Josefin+Slab|Qwigley' rel='stylesheet' type='text/css'>
</head>

<body>
            <h2>So <?php echo $_GET['firstName'];?>, what's it gonna be? You comin'?</h2>
            </div>
        
            <div class="grid-50"><a class="primary button" href="guestOptions.php?GID=<?php echo $_GET['GID'];?>&firstName=<?php echo $_GET['firstName'];?>">Accept</a></div>
            <div class="grid-50"><a class="secondary button" href="lame.php?GID=<?php echo $_GET['GID'];?>">Decline</a></div>
        </div>

<bo
    