<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name    = strip_tags(trim($_POST["name"]));
  $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  // Replace with your real email address
  $to = "kamaueunice254@gmail.com";
  $headers = "From: $name <$email>";

  $body = "You have received a new message:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Subject: $subject\n";
  $body .= "Message:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }

} else {
  echo "Invalid request method.";
}
?>
