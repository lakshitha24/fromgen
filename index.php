<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'template/header_main.php';?>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Wellcome to From Gen</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form action="function/login-check.php" method="POST" class="form-signin">
                <input type="text" name="username" class="form-control" placeholder="User name" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="signup.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

<?php include 'template/footer_script_main.php';?>
</body>
</html>