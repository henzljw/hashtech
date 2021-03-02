<?php
    include('connection.php');
    
    if(!isset($_GET["code"])){
      exit("Cannot find page");
    }

    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($connection, "SELECT user_email_address FROM password_reset WHERE code = '$code'");
    if(mysqli_num_rows($getEmailQuery)== 0){
      exit("Cannot find page");
    }

    if(isset($_POST["user_password"])){
      $password = $_POST["user_password"];

      $row = mysqli_fetch_array($getEmailQuery);
      $email_address = $row["user_email_address"];

      $query = mysqli_query($connection, "UPDATE user SET user_password = '$password' WHERE user_email_address = '$email_address'");

      if($query){
        $query = mysqli_query($connection, "DELETE FROM password_reset WHERE code = '$code' ");
        exit("<script>alert('Password Updated!');document.location='user_login.php'</script>");
      }
      else{
        exit("<script>alert('Something went wrong...');document.location='user_login.php'</script>");
      }
    }

?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Password Reset | #hashtech Malaysia</title>
</head>

<body id="page-top">
  

  <!-- Login -->
  <section class="page-section" id="reset" style="">
        
        <form method="POST">
            <input type="password" name="user_password" placeholder = "New Password">
            <button type = "submit" name="reset-password-submit">Reset Password</button>
        </form>
  </section>

   

<?php include('footer.php'); ?>
</body>

</html>
