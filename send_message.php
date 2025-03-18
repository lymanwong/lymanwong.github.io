<?php

$feedback = ""; // Initialize the variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define recipient email
    $to = "lymanwong@gmail.com";

    // Get form fields with validation
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['sender_email']) ? trim($_POST['sender_email']) : "";
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : "";
    $message = isset($_POST['message']) ? trim($_POST['message']) : "";

    // Check if required fields are empty
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Error: All fields are required.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format.";
        exit;
    }

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thanks for your email!";
    } else {
        echo "Error: Unable to send email.";
    }
}

?>
