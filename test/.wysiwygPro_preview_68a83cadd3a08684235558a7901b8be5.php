<?php
if ($_GET['randomId'] != "PjIMmfnj1ev_lZui8IhRC3HysILL9lT0BJsDUQOjOlLgLiYkDnXJ8fuU9S2nbLAQ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
