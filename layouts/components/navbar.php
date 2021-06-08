<!-- navbar.php -->
<!-- Navbar for hashtech's website -->
<!-- Engineered by heckerio -->

<?php

include("layouts/templates/htmlhead.php");
include("layouts/templates/body.php");

?>

<!doctype html>
<html lang="en">

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Gadget</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">More</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Search</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="index.php"><img src="assets/images/website-logo/hk.png" width="60" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="resources/auth/user-login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resources/auth/user-register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- NAVBAR END -->

</body>

</html>