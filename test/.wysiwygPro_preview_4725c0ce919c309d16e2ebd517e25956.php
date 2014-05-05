<?php
if ($_GET['randomId'] != "097P5HsFTHRZZ2Ng72C5gfvNe5BHM17Xby4Xmd1zCKx6LrM8CBQn2r5jPW6zCPoe") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
