<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "2027ikaawoan@tjhsst.edu";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $full_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $full_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
