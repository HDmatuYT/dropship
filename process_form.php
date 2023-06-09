<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Do something with the form data (e.g., send an email)
  // Replace the email address below with your own email address
  $to = 'mathiasmandel55@gmail.com';
  $subject = 'New Contact Form Submission';
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message\n";

  // Send the email
  mail($to, $subject, $email_content);

  // Redirect the user to a thank you page
  header('Location: thank_you.html');
  exit;
}
?>
