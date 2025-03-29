<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Email content
    $subject = "Confirmation Email";
    $message = "Thank you for your submission!";
    $headers = "From: no-reply@yourdomain.com";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "Confirmation email sent.";
    } else {
        echo "Failed to send confirmation email.";
    }
}
?>
