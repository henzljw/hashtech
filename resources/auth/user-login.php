<!-- user-login.php -->
<!-- User Account Login for hashtech's website -->
<!-- Engineered by heckerio -->

<?php

include("../../layouts/templates/htmlhead.php");
include("../../layouts/templates/body.php");
// include "components/navbar.php";

// session_start();
// include('header.php');
// include('connection.php');

// if (isset($_POST['login'])) {

//     $user_name = $_POST['user_name'];
//     $user_password = $_POST['user_password'];

//     if ($user_name == "" || $user_password == "") {
//         echo "
//             <div class ='box container'>
//             <p>Either username or password field is empty.</p>
//             <a href='user_login.php'>Go back</a>
//             </div>";
//     } else {
//         $sqllogin = "SELECT * FROM user WHERE user_name = '$user_name' and user_password = '$user_password'"
//             or die("Could not execute the select query.");



//         $result = mysqli_query($connection, $sqllogin);

//         $data = mysqli_fetch_assoc($result);

//         if ($user_name == "root@hashtech.com" && $user_password == "admin") {
//             $_SESSION["session"] = $user_name;
//             header("location: admin_index.php");
//         } else if ($user_name == $data["user_name"] && $user_password == $data["user_password"]) {
//             $_SESSION["session"] = $user_name;
//             $_SESSION['cart'] = array();
//             header("location: user_index.php");
//         } else {
//             echo "
//                     <script>
//                         alert('Invalid User Name or Password. Please try again...');
//                     </script>";
//         }
//     }
// }

?>
<html>

<head>
    <title>Login | hashtech</title>
    <link rel="stylesheet" type="text/css" href="../../assets/styles/auth/user-login.css">
</head>

<body class="text-center">
    <div class="container">
        <form class="form-signin">
            <a href="../index.php"><img class="mb-4" src="../../assets/images/website-logo/hk.png" alt="" width="72" height="72"></a>
            <br />
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <br />
            <input type="email" id="inputEmail" class="form-control form-control-sm" placeholder="Email address" required autofocus>
            <br />
            <input type="password" id="inputPassword" class="form-control form-control-sm" placeholder="Password" required>
            <!-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div> -->
            <br />
            <a href="password-reset.php">Forget your Password?</a>
            <br /><br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <br />
            <h4 class="font-weight-normal">OR</h4>
            <br />
            <a href="user-register.php" class="btn btn-lg btn-primary btn-block" role="button">Register</a>
            <br />
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
</body>


<body>
    <!-- <div class="login">
        <h1 style="text-align: center;">Login</h1>
        <form action="user_login.php" method="POST" class="center">
            <div id="center" class="input-group">
                <input type="text" name="user_name" class="form-control" placeholder="User Name" value="<?php if (isset($user_name)) {
                                                                                                            echo $user_name;
                                                                                                        } ?>" required>
            </div>
            <div id="center" class="input-group">
                <input type="password" name="user_password" class="form-control" placeholder="Password" value="<?php if (isset($user_password)) {
                                                                                                                    echo $user_password;
                                                                                                                } ?>" required>
            </div>
            <br />
            <div class="input-group">
                <p class="text-center"><a href="forgot_password.php">Forgot your Password?</a></p>
            </div>
            <br />
            <div class="btn-login">
                <button style="position: center; text-align: center; margin-left: 755px;" type="submit" name="login" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
            </div>
            <br />
            <div class="form-group">
                <p class="text-center">Don't have account? <a href="user_register.php" id="usersignup">Sign up here</a></p>
            </div>
        </form>
    </div> -->
    <!-- <?php include('footer.php'); ?> -->
</body>
</head>