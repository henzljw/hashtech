<?php
    include('connection.php');
    include('header.php');
    include('hashtech.php');
?>
<html>
    <head>
        <title>Admin Account Login | #hashtech Malaysia</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="admin-login">
            <div class="row">
			    <div class="col-md-5 mx-auto">
			        <div id="login">
                        <h2 style="text-align: center; margin: 20px;"><b>Admin Account Login</b></h2>    
                        <form action="admin_login.php" method="POST">
                            <div class="input-group">
                                <input type="email" name="admin_email_address"  class="form-control" id="email" placeholder="Admin email address">
                            </div>
                            <div class="input-group">
                                <input type="password" name="admin_password" id="password"  class="form-control" placeholder="Password">
                            </div>
                            <div class="btn-login">
                                <button type="submit" name="submit" value="login" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                            </div>
                            <br/>
                            <div class="form-group">
                                <p class="text-center">#hashtech user? <a href="user_login.php" id="adminLogin">Login here</a></p>
                            </div>
                        </form>
                    </div>
			    </div>
			</div>
		</div> 
        <?php include('footer.php'); ?>
    </body>
</head>  