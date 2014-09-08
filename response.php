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
    
    <?php include_once "HTMLhead.php";?>
</head>

<body>
    
<?php include_once "header.php"; ?><br/><br/><br/>
<div class="grid-container">
    <div class="grid-100 center"><h2>So <?php echo $_GET['firstName'];?>, what's it gonna be?</h2></div>
</div>
<br/><br/><br/>
<div id="grid-container">
    <div class="grid-10 push-30"><a class="primary button" href="guestOptions.php?GID=<?php echo $_GET['GID'];?>&firstName=<?php echo $_GET['firstName'];?>">Accept</a></div>
    <div class="grid-10 push-50"><a class="secondary button" href="lame.php?GID=<?php echo $_GET['GID'];?>">Decline</a></div>
</div>
<?php include_once "footer.php"; ?>
</body>
</html>
    