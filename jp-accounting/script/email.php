<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   empty($_POST['g-recaptcha-response'])   ||
   ! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
     echo "please re-checked your email address.";
     return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$captcha = strip_tags(htmlspecialchars($_POST['g-recaptcha-response']));

$secretKey = "6LdlrhoUAAAAAC7vIhycRzGq5nahrtfkVGIac7tx";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
  echo 'Please go back to check your reCaptcha';
  return false;
}

// Create the email and send the message
// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to = 'jp.acc55@hotmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers = "From: www.jp-accounting.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
sleep(3);
echo "<script>
alert('Send messages successful.');
history.go(-1);
</script>";
return true;
?>
