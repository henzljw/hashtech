<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	require 'connection.php';

	// Instantiation and passing `true` enables exceptions


if(isset($_POST["user_email_address"])){

  $emailTo = $_POST["user_email_address"];
  $code  = uniqid(true);
  $query = mysqli_query($connection, "INSERT INTO password_reset(code, user_email_address) VALUES('$code', '$emailTo')");

  if(!$query){
    exit("Error");
  }

  $mail = new PHPMailer(true);

  try {

      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'noreplyhashtech@gmail.com';                     // SMTP username
      $mail->Password   = '0172482672hashtech';                               // SMTP password
      $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 465;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('noreplyhashtech@gmail.com', 'hashtech');
      $mail->addAddress("$emailTo");
      $mail->addReplyTo('noreply@hashtech.com', 'no reply');

      // Content
      $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/password_reset.php?code=$code";
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Password-Reset from #hashtech Malaysia';
      $mail->Body    = "<p>Hi Mr. / Ms.,</p><p>You have requested for a password reset so please click this <a href= $url>link</a> to complete this application.</p><br/><p>Thank you!</p><br/><p>Best Regards,</p><p>Developer Team from #hashtech Malaysia</p>";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo "<script>alert('Check your email!');document.location='index.php'</script>";
  } catch (Exception $e) {
    echo "<script>alert('Gmail server down..');document.location='index.php'</script> {$mail->ErrorInfo}";
  }
  exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<head>
  <title>Password Reset | #hashtech Malaysia</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="css/agency.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Login -->
  <section class="page-section" id="login" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="color: #212121">Password Reset</h2>
          <h6 style="color: #212121">An email will be sent to you for you to reset your password.</h6>
		      <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <form method="post">
            <div class="row">
              <div class="col-md-12">
				<div class="form-group">
                  <input class="form-control" type="email" name="user_email_address" placeholder="Email Address *" required="required" data-validation-required-message="Please enter your email address." autocomplete="off">
                  <p class="help-block text-danger"></p>
                </div>      
              </div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input type="submit" name="reset-request-submit" class="btn btn-primary btn-xl text-uppercase" value="Receive new password by email" />
              </div>
            </div>
          </form>
           
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>

</html>
