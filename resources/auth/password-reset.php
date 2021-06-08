<!-- password-reset.php -->
<!-- Password reset for hashtech's website -->
<!-- Engineered by heckerio -->

<?php

include("../../layouts/templates/htmlhead.php");
include("../../layouts/templates/body.php");

?>

<html>

<head>
    <title>Password Reset | hashtech</title>
    <link rel="stylesheet" type="text/css" href="../../assets/styles/auth/password-reset.css">
</head>

<body class="text-center">
    <div class="container">
        <form class="form-passwordReset">
            <a href="../index.php"><img class="mb-4" src="../../assets/images/website-logo/hk.png" alt="" width="72" height="72"></a>
            <br />
            <h1 class="h3 mb-3 font-weight-normal">Password Reset</h1>
            <p class="text-center">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link
                that will allow you to choose a new one.
            </p>
            <br />
            <input type="email" id="inputEmail" class="form-control form-control-sm" placeholder="Email address" required autofocus>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Email Password Reset Link</button>
            <br />
            <h4 class="font-weight-normal">OR</h4>
            <br />
            <a href="user-login.php" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
            <br />
            <a href="user-register.php" class="btn btn-lg btn-primary btn-block" role="button">Register</a>
            <br />
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
</body>

</html>