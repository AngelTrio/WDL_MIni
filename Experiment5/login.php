<!DOCTYPE html>
<html>
<head>
    <title>The Login Form</title>
    <?php include("header.php") ?>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php include("nav.php") ?>
    <div class="wrap">
        <form class="login-form" action="">
            <div class="form-header">
                <h3>Login Form</h3>
            
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" class="form-input" placeholder="email@example.com">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" placeholder="password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit">Login</button>
            </div>
            <div class="form-footer">
            Don't have an account? <a href="register.php">Sign Up</a>
            </div>
        </form>
    </div><!--/.wrap-->
<?php include("footer.php")?>
</body>
</html>