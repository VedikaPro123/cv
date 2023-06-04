<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "adv.sanildabhade@gmail.com"; // Replace with your email address
  $subject = "New Form Submission";
  $message = "Name: " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n";
  $message .= "Email: " . $_POST['emailid'] . "\n";
  $message .= "Contact: " . $_POST['contact'] . "\n";
  $message .= "Message: " . $_POST['subject'];

  // Send email
  mail($to, $subject, $message);
}
?>
