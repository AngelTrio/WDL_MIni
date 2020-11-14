<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<title>Contact Us</title>
	<?php include("header.php") ?>
</head>
<body>
 <?php include("nav.php") ?>
 <style>
	.navbar-fixed {
    top: 0;
    z-index: 100;
  position: fixed;
    width: 100%;
}
html, body {
	height: 1000px;
}
.error {color: #FF0000;}
</style>
<?php include("contact2.php") ?>
<div class="container" class="content">
		<h1>Connect With Us</h1>
		<p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us.</p>
		<div class="contact-box">
			<div class="contact-left">
				<h3>Send your request</h3>
				<?php foreach ($errors as $error): ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php endforeach ?>
				<form method="POST" action="">
					<div class="input-row">
						<div class="input-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name">
							<span class="error"><?php echo $nameErr;?></span>	
						</div>
						<div class="input-group">
							<label for="mobile">Phone</label>
							<input type="text" name="mobile" id="number">
							<span class="error"><?php echo $phoneNumberErr;?></span>	
						</div>	
					</div>
					<div class="input-row">
						<div class="input-group">
							<label for="email">Email</label>
							<input type="text" name="email" id="inputfield">
							<span class="error"><?php echo $emailErr;?></span>
						</div>
						<div class="input-group">
							<label>Subject</label>
							<input type="text" name="subject">
							<span class="error"><?php echo $subjectErr;?></span>	
						</div>	
					</div>
					<label>Message</label>
					<textarea rows="5" placeholder="Your Message" name="message"></textarea>
					<span class="error"><?php echo $messageErr;?></span><br>
					<button type="submit" name="submit" class="registerbtn" id="submit-btn loginButton">SEND</button>
				</form>
			</div>			
		</div>
	</div>
</div>
</div>
<?php include("footer.php")?>
</body>
</html>