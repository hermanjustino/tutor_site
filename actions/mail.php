<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $to = 'hermanjustino@gmail.com'; // Replace with your email address
    $subject = "$subject";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        $successMessage = "Thank you for your message. We will get back to you soon!";

    // Display success message
    echo "<h1>Success!</h1>";
    echo "<p>" . htmlspecialchars($successMessage) . "</p>";

    // Redirect to a specific webpage after a delay
    $redirectUrl = "file:///Users/hermanjustino/Desktop/projects/tutor_page/index.html#";
    $delay = 2; // Delay in seconds
    echo "<script>setTimeout(function() { window.location.href = '$redirectUrl'; }, $delay * 1000);</script>";

    exit();
    } else {
        echo 'Oops! Something went wrong. Please try again.';
    }
    
    
}
?>