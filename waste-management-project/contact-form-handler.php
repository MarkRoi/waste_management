<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $messege = $_POST['messege'];

    $email_from = 'wastehub77@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Messege: $message.\n";

    $to = "wastehub77@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers . = "Reply-To: $visitor_email \r\n";

    mail($to,$mail_subject,$email_body,$headers);

    header("Location: Home.html");

    


?>