<?php 

if(isset($_POST['submit'])){
    
	$to = "lowejodiann@ymail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['sms'];


    $headers = "From:" . $from;
    mail($to,$from,$subject,$message,$headers);
  
 
     header('Location: thank-you.php');
  
}
?>