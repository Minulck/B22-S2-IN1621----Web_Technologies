<?php
function sendThankYouEmail($to, $contact_name) {
    $subject = "Thank you for your wholesale inquiry";
    $message = "Dear $contact_name,\n\nThank you for your interest in our wholesale program. We have received your inquiry and will get back to you shortly.\n\nBest regards,\nYour Company Name";
    $headers = "From: coffe.email@gmail.com";

    return mail($to, $subject, $message, $headers);
}
?>
