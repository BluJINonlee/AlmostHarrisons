<?php

if ($_POST){
    echo "I've received something!";
    foreach ($_POST as $key => $value){
        echo "$key = $value";
    }
} else {
    echo "Nothing was passed!";
}

?>