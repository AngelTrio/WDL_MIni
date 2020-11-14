<?php include('server.php') ?>
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
        <form class="login-form" method="POST" action="">
            <div class="form-header">
                <h2>Login Form</h2> 
                <?php foreach ($errors as $error): ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php endforeach ?>   
            </div>

            <!--Email Input-->
            <div class="form-group">
                <input type="text" class="form-input" name="email" placeholder="email@example.com">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" name="login" type="submit">Login</button>
            </div>
            <div class="form-footer">
            Don't have an account? <a href="register.php">Sign Up</a>
            </div>
        </form>
    </div><!--/.wrap-->
<?php include("footer.php")?>
</body>
</html>