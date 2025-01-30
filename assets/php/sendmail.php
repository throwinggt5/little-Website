<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the fields (Basic validation)
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "<script>
                alert('All fields are required.');
                window.location.href = '../../contact-us.html';
              </script>";
        exit;
    }

    // Email settings
    $to = "Ouardi.mouncif@the-golden-services.com"; 
    $subject = "New Contact Form Submission from $name";
    $body = "
        <strong>Name:</strong> $name <br>
        <strong>Email:</strong> $email <br>
        <strong>Phone:</strong> $phone <br>
        <strong>Message:</strong> <p>$message</p>
    ";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n"; // sender's email address

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Thank you for contacting us. We will get back to you soon!');
                window.location.href = '../../contact-us.html';
              </script>";
    } else {
        echo "<script>
                alert('There was an error sending your message. Please try again.');
                window.location.href = '../../contact-us.html';
              </script>";
    }
} else {
    echo "<script>
            alert('Invalid request.');
            window.location.href = '../../contact-us.html';
          </script>";
}
?>
