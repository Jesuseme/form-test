<?php

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);

        return $data;
    }

    $name = $emailFrom = $subject = $message = $phone = $date = $time = $service = " ";
 

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        if (empty($_POST['name'])){
            $name = " ";
        } else {$name = test_input( $_POST['name']);
            echo $name ."\n\n"; }
        
        if (empty($_POST['email'])) {
            $emailFrom = " ";
        } else {$emailFrom = test_input($_POST['email']) ;
            echo $emailFrom ."\n\n"; }
        
        if (empty($_POST['subject'])) {
            $subject = " ";
        } else { $subject = test_input($_POST['subject']) ;
            echo $subject ."\n\n";}

        if (empty($_POST['message'])) {
            $message = " ";
        } else {$message = test_input($_POST['message']) ;
            echo $message ."\n\n"; }

        if (empty($_POST['phone'])) {
            $phone = " ";
        } else {$phone = test_input($_POST['phone']) ;
            echo $phone. "\n\n"; }

        if (empty($_POST['date'])) {
            $date = " ";
        }   else {$date = test_input($_POST['date']) ;
            echo $date ."\n\n"; }     
        
        if (empty($_POST['time'])) {
           $time = " ";
        } else { $time = test_input($_POST['time']) ;
            echo $time. "\n"; }

        if (empty($_POST['service'])) {
            $service = " ";
        } else {$service = test_input($_POST['service']) ;
            echo $service. "\n\n"; }

         

        $mailTo = "jesuseme@sepbravtech.com";
        $headers = "From: ". $emailFrom;
        $txt = "You have recieved and email from  ". $name. ".\n\n" . $message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsent");


    } 
?>
