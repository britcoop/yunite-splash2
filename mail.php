<?php 
$action=$_REQUEST['action']; 
if ($action=="")               /* send the submitted data */ 
    { 
    $email=$_REQUEST['email']; 
    if ($email=="")
        { 
        echo "All fields are required, please fill in<a href=\"\">your email</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="New email submitted on yunite.co"; 
        mail("b.cooperbc@gmail.com", $subject, $message, $from); 
        echo "Thank You!"; 
        } 
    }   
?> 