<?php
$receiving_email_address = 'vigneshvars2001@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $success = mail($receiving_email_address, "Contact Form Submission", $email_message);

    if ($success) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error sending email. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>

