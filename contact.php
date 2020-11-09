<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
   
    $mailTo = "bossmanhoy@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    
    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
    
    
    
}



/* i might have to check out mmtuts tutorial for "php error handling" as he didnt include it within the youtube video as it was in his last video!  */





