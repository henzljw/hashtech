<!-- user-register.php -->
<!-- User Account Registration for hashtech's website -->
<!-- Engineered by heckerio -->

<?php

include("../../layouts/templates/htmlhead.php");
include("../../layouts/templates/body.php");

// include("connection.php");
// include('header.php');
// session_start();

// if (isset($_POST['register'])) {

//     // receive all input values from the form
//     $user_name = $_POST['user_name'];
//     $user_email_address = $_POST['user_email_address'];
//     $user_password = $_POST['user_password'];
//     $confirm_password = $_POST['confirm_password'];
//     $phone_number = $_POST['phone_number'];
//     $city = $_POST['city'];
//     $address = $_POST['address'];
//     $gender = $_POST['gender'];
//     $date_of_birth = $_POST['date_of_birth'];
//     $user_name_err = $user_email_address_err = $phone_number_err = $city_err = $address_err = $user_password_err = $confirm_password_err = "";

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {

//         // Validate username
//         if (empty($_POST["user_name"])) {
//             $user_name_err = "Please enter a username.";
//         }

//         // Validate email address
//         if (empty($_POST["user_email_address"])) {
//             $user_email_address_err = "Please enter your email address.";
//         }

//         // Validate password
//         if (empty($_POST["user_password"])) {
//             $user_password_err = "Please enter a password.";
//         } else if (strlen($_POST["user_password"]) < 6) {
//             $user_password_err = "Password must have at least 6 characters.";
//         } else {
//             $user_password = trim($_POST["user_password"]);
//         }

//         // Validate confirm password
//         if (empty($_POST["confirm_password"])) {
//             $confirm_password_err = "Please confirm password.";
//         } else {
//             $confirm_password = trim($_POST["confirm_password"]);
//             if (empty($user_password_err) && ($user_password != $confirm_password)) {
//                 $confirm_password_err = "Password did not match.";
//             }
//         }

//         // Validate city
//         if (empty($_POST["city"])) {
//             $city_err = "Please enter your city.";
//         }

//         // Validate address
//         if (empty($_POST["address"])) {
//             $address_err = "Please enter your address.";
//         }

//         // Validate username
//         if (empty($_POST["phone_number"])) {
//             $phone_number_err = "Please enter your phone number.";
//         }

//         // Check input errors before inserting in database
//         if (empty($user_name_err) && empty($user_email_address_err) && empty($user_password_err) && empty($confirm_password_err) && empty($city_err) && empty($address_err) && empty($phone_number_err)) {

//             // Prepare an insert statement
//             $query = "INSERT INTO user (user_name, user_email_address, user_password, phone_number, city, address, gender, date_of_birth) VALUES ('$user_name', '$user_email_address', '$user_password', '$phone_number', '$city', '$address', '$gender', '$date_of_birth')";
//             $result = mysqli_query($connection, $query);
//             $_SESSION['cart'] = array();
//             $_SESSION['user_name'] = $_POST['user_name'];
//             $_SESSION['address'] = $_POST['address'];
//             // Redirect to login page
//             echo "<script>
//                 alert('Your #hashtech account has been created!!');
//                 window.location.href='user_login.php';
//                 </script>";
//         } else {
//             echo "Something went wrong. Please try again later.";
//         }
//     }

//     // Close connection
//     mysqli_close($connection);
// }
?>
<html>

<head>
    <title>Register | hashtech</title>
    <link rel="stylesheet" type="text/css" href="../../assets/styles/auth/user-register.css">
</head>

<body class="text-center">
    <div class="container">
        <form class="form-register">
            <a href="../index.php"><img class="mb-4" src="../../assets/images/website-logo/hk.png" alt="" width="72" height="72"></a>
            <br />
            <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            <br />
            <input type="name" id="inputUserName" class="form-control form-control-sm" placeholder="User Name" required autofocus>
            <br />
            <input type="email" id="inputEmail" class="form-control form-control-sm" placeholder="Email address" required autofocus>
            <br />
            <input type="password" id="inputPassword" class="form-control form-control-sm" placeholder="Password" required autofocus>
            <br />
            <input type="password" id="inputConfirmPassword" class="form-control form-control-sm" placeholder="Confirm Password" required>
            <br />
            <p class="text-center">By clicking register, I agree to <a href="#">#hashtech Privacy Policy</a></p>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <br />
            <h4 class="font-weight-normal">OR</h4>
            <br />
            <a href="user-login.php" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
            <br />
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
</body>





<!-- <body>
    <div class="register">
        <h1 style="text-align: center; padding: 20px;">Register</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <?php if (isset($message)) {
                echo $message;
                if ($message != '') ?>
                <div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>
            <?php } ?>
            <div class="input-group <?php echo (!empty($user_name_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="user_name" class="form-control" placeholder="Your Full Name" value="<?php if (isset($user_name)) {
                                                                                                                    echo $user_name;
                                                                                                                } ?>" required>
                <span class="help_block"><?php if (isset($user_name_err)) echo $user_name_err; ?></span>
            </div>
            <div class="input-group <?php echo (!empty($user_email_address_err)) ? 'has-error' : ''; ?>">
                <input type="email" name="user_email_address" class="form-control" placeholder="Email address" value="<?php if (isset($user_email_address)) {
                                                                                                                            echo $user_email_address;
                                                                                                                        } ?>" required>
                <span class="help_block"><?php if (isset($user_email_address_err)) echo $user_email_address_err; ?></span>
            </div>
            <div class="input-group <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="phone_number" class="form-control" placeholder="Mobile Phone number" value="<?php if (isset($phone_number)) {
                                                                                                                            echo $phone_number;
                                                                                                                        } ?>" required>
                <span class="help_block"><?php if (isset($phone_number_err)) echo $phone_number_err; ?></span>
            </div>
            <div class="input-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="address" class="form-control" placeholder="Home / Office address" value="<?php if (isset($address)) {
                                                                                                                        echo $address;
                                                                                                                    } ?>" required>
                <span class="help_block"><?php if (isset($address_err)) echo $address_err; ?></span>
            </div>
            <div class="input-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="city" class="form-control" placeholder="City" value="<?php if (isset($city)) {
                                                                                                    echo $city;
                                                                                                } ?>" required>
                <span class="help_block"><?php if (isset($city_err)) echo $city_err; ?></span>
            </div>
            <div class="input-group">
                <input type="date" name="date_of_birth" class="form-control" value="<?php if (isset($date_of_birth)) {
                                                                                        echo $date_of_birth;
                                                                                    } ?>">
            </div>
            <div class="input-group">
                <h5 style='font-weight: lighter; margin-left: 700px;'>Gender:
                    <select name='gender' style='padding-top: 8px; padding-bottom: 8px; padding-right: 340px; border-radius: 5px; background-color: white;'>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                </h5>
            </div>
            <div class="input-group <?php echo (!empty($user_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="user_password" class="form-control" placeholder="Password (Minimum of 6 characters with number and letter)" value="<?php if (isset($user_password)) {
                                                                                                                                                                    echo $user_password;
                                                                                                                                                                } ?>" required>
                <span class="help_block"><?php if (isset($user_password_err)) echo $user_password_err; ?></span>
            </div>
            <div class="input-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" value="<?php if (isset($confirm_password)) {
                                                                                                                                echo $confirm_password;
                                                                                                                            } ?>" required>
                <span class="help_block"><?php if (isset($confirm_password_err)) echo $confirm_password_err; ?></span>
            </div>
            <div class="input-group">
                <p class="text-center">#hashtech user? <a href="user_login.php" id="userlogin">Login here</a></p>
                <br />
                <p class="text-center">By clicking sign up, I agree to <a href="#">#hashtech Privacy Policy</a></p>
                <br />
                <button type="submit" name="register" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                <br /><br />
                <button type="reset" name="register" class=" btn btn-block mybtn btn-primary tx-tfm">Reset</button>
            </div>
        </form>
    </div>
<?php include('footer.php'); ?> -->
<!-- </body> -->

</html>