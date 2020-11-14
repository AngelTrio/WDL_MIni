<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/register.css">
<?php include("header.php") ?>
<style>
.error {color: #FF0000;}
</style>
<?php include 'registration.php'; ?>
</head>
<body>
<?php include("nav.php")?>
<form id="contact-form" method="post" name="form" action="">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname">
    <span class="error"><?php echo $fnameErr;?></span><br><br>

    <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname">
    <span class="error"><?php echo $lnameErr;?></span><br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
    <span class="error"><?php echo $emailErr;?></span><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw">

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirm_password" id="psw-repeat">
    <span class="error"><?php echo $passwordErr;?></span><br><br>
    <label><b>Gender:</b><pre> </pre></label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
  <span class="error"><?php echo $genderErr;?></span> 
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php include("footer.php")?>
</body>
</html>
