<?php
if ($_GET['randomId'] != "_SCPqVZjb5JwGxXkq_OhwzwfBI7o8QC1hyu55nNxxAriSTl2ZKRKTFGcytYRJVhD") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
