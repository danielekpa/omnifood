<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
        header("Location: http://www.webdesigncourse.co/omnifood/index.php?success=-1#form");
=======
        header("Location: https://danielekpa.github.io/omnifood/index.php?success=1#form");
>>>>>>> 39de071fe587fc9d8279c1c4f605c28b97c640b7
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "<YOUR EMAIL HERE>";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
<<<<<<< HEAD
    header("Location: http://www.webdesigncourse.co/omnifood/index.php?success=1#form");
=======
    header("Location: https://danielekpa.github.io/omnifood/index.php?success=1#form");
>>>>>>> 39de071fe587fc9d8279c1c4f605c28b97c640b7

?>