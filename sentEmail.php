<?php

if (isset($_POST['submit'])) {
    $mailto = "gungwahada1@gmail.com";

    // Getting client data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subjectToUs = "Halo Gungwah, Ada Pesan Dari Client";
    $subjectToClient = "Confirmation: Message was submitted successfully | Gungwahada1";

    // Email body sent to us
    $messageToUs = "Client Name: " . $name . "\n"
        . "Message: " . "\n" . $message;

    // Email body sent to client
    $messageToClient = "Dear" . $name . "\n"
    . "Thank you for contacting me. I will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . "\n" . $message . "\n\n"
    . "Regards," . "\n" . "- Gungwahada1";

    $headerToUs = "From: " . $email;
    $headerToClient = "From: " . $mailto;

    $resultToUs = mail($mailto, $subjectToUs, $messageToUs, $headerToUs);
    $resultToClient = mail($email, $subjectToClient, $messageToClient, $headerToClient);

    // Checking if email sent successfully
    if ($resultToUs && $resultToClient) {
        $success = "Your Message was sent Successfully!";
    } else {
        $failed = "Sorry! Message was not sent, Please try again.";
    }
}

?>