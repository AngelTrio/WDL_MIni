<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	    <?php include("header.php")?>
</head>
<body>
<script>
function checkForm(form)
  {
    // validation fails if the input is blank
    if(form.inputfield.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.inputfield.value)) {
      alert("Error: Input contains invalid email!");
      form.inputfield.focus();
      return false;
    }
    var er = /^[a-zA-Z]/
    if(!er.test(form.name.value)) {
      alert("Error: Name contains invalid characters");
      form.inputfield.focus();
      return false
    }
   return alert("Thank You For Visiting Our page. We will respond to your queries soon")
  }
</script>
<?php include("nav.php")?>
	<div class="container" class="content">
		<h1>Connect With Us</h1>
		<p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us.</p>
		<div class="contact-box">
			<div class="contact-left">
				<h3>Send your request</h3>
				<form onsubmit="return checkForm(this);" id="loginForm">
					<div class="input-row">
						<div class="input-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name">	
						</div>
						<div class="input-group">
							<label for="mobile">Phone</label>
							<input type="text" name="mobile" id="number" required>	
						</div>	
					</div>
					<div class="input-row">
						<div class="input-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="inputfield">
						</div>
						<div class="input-group">
							<label>Subject</label>
							<input type="text" required>	
						</div>	
					</div>
					<label>Message</label>
					<textarea rows="5" placeholder="Your Message" required></textarea>
					<button type="submit" class="registerbtn" id="submit-btn loginButton">SEND</button>
				</form>
			</div>			
		</div>
	</div>
</div>
</div>
<?php include("login.php")?>
<?php include("footer.php")?>
</html>