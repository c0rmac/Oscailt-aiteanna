<?php
if ($_GET['randomId'] != "IA8H3az_LB7gOYHdnMu5MpVuiN7c3VP2in2bfy59dT7DtoDNqQ6LLgrxtqeU2kXk") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
