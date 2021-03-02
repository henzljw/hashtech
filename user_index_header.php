<?php
    include('connection.php');
    $_SESSION['cart'] = array();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <div class="header">
            <a href="all_gadget_user.php" style="padding-left: 600px;">Gadget</a>
            <a href="#">More</a>
            <a href="user_index.php" class="logo"><img src = "images/logo.png" width="100" height="100"></a> 
            <a href="user_profile.php">Manage profile</a>
            <a href="cart.php">Cart [ <?php echo(count($_SESSION['cart'])); ?> ]</a>
		    <a href="index.php?logout='1'">Logout</a>
        </div>
    </body>
</html>