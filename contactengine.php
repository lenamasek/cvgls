<?php

$EmailFrom = "contact@cvgls.com";
$EmailTo = "contact@cvgls.com";
$Subject = "Regarding CVGLS";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<p>Your message was received. Thank you!</p>";
}
else{
  echo "<p>There was an error with your message. Please try again.</p>";
}
?>