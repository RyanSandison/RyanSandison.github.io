<?php

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailTo = "contact@ryansandisonphotography.co.uk";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers );
    header("Location: ../pages/Contact.php?mailsend");
}
?>
