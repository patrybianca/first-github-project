<?php
	//message vars 
	if(isset($_POST['submit'])){
    $to = "patriciabirovescub@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
   // $subject2 = "Copy of your form submission";

    $message = $name . " " . "\n". $subject . " wrote the following:" . "\n\n" . $_POST['message'];
   // $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
   // $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent, Thank you" . $name . ", we will contact you soon";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>