<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $subject = addslashes($_POST['subject']);
    $message = addslashes($_POST['message']);
    $to = "izephanthakarn@hotmail.com";

    $header = "From : " .$email . " \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to,$subject,$message,$header);


?>