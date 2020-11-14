<?php
$nameErr = $emailErr = $subjectErr = $messageErr = $phoneNumberErr = "";
$name = $mail = $subject = $message = $phoneNumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $mail = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }
  $message = test_input($_POST["message"]);
  if (empty($_POST["message"])) {
    $messageErr = "Please fill this field";
  } else {
    $message = test_input($_POST["message"]);
  }

  $phoneNumber = $_POST['mobile'];

if(!empty($phoneNumber)) // phone number is not empty
{
    if(preg_match('/^\d{10}$/',$phoneNumber)) // phone number is valid
    {
      $phoneNumber = '0' . $phoneNumber;
    }
    else
    {
      $phoneNumberErr = 'Phone number invalid !';
    }
}
else 
{
  $phoneNumberErr = 'You must provid a phone number !';
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>