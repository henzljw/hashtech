<?php
    include('connection.php');
    include('user_index_header.php');
    session_start();

        $user_name = $_SESSION["session"];
        $tx_id = uniqid();
        $tx_date = date('Y-m-d');
        $query = "SELECT * FROM user WHERE user_name='$user_name'";
   
		$resu=$connection->query($query);

		if(empty(mysqli_num_rows($resu))){
			echo "session lost ERROR : $query". $connection->error;
		}else{
			while($row=mysqli_fetch_assoc($resu)){
                
				$user_id 				= $row['user_id'];
				$user_name 				= $row['user_name'];
				$user_email_address 	= $row['user_email_address'];
				$city 					= $row['city'];
				$phone_number 			= $row['phone_number'];
				$address 				= $row['address'];	
				$date_of_birth 			= $row['date_of_birth'];
			}
		}
?>
<html>
    <head>
        <title>Check Out | #hashtech Malaysia</title>
    </head>
    <body>
        
            <form action="checkout.php" method="post" enctype="multipart/form-data">
				<table align="center" width="750">
						<tr align="center">
							<td colspan="6"><h2>Shipping Details</h2></td>
						</tr>
						<tr>
							<td align="right">User Name:</td>
							<td><input type="text" name="user_name" value="<?php echo $user_name;?>" required/></td>
						</tr>
						<tr>
							<td align="right">Email Address:</td>
							<td><input type="text" name="user_email_address" value="<?php echo $user_email_address;?>" required/></td>
						</tr>
						<tr>
							<td align="right">City:</td>
							<td><input type="text" name= "city" value="<?php echo $city;?>"/></td>
						</tr>
						<tr>
							<td align="right">Phone number:</td>
							<td><input type="text" name="phone_number" value="<?php echo $phone_number;?>"/></td>
						</tr>
						<tr>
							<td align="right">Address</td>
							<td><input type="text" name="address" value="<?php echo $address;?>"/></td>
						</tr>
                        <tr>
							<td align="right">Postcode</td>
							<td><input type="text" name="poscode" /></td>
						</tr>
                        <tr>
							<td align="right">State</td>
							<td><input type="text" name="state" value="<?php echo $address;?>"/></td>
						</tr>
						<tr>
							<td><input type="hidden" name="user_id" value="<?php echo $user_id;?>" required/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="checkOut" value="Check Out" /></td>
					</tr>
					
					
   
					</table>
				
				</form>
    </body>
</html>
<?php
if(isset($_POST['checkOut'])){

        $user_name              = $_POST["user_name"];
        $user_email_address     = $_POST["user_email_address"];
        $city                   = $_POST["city"];
        $phone_number           = $_POST["phone_number"];
        $address                = $_POST["address"];
        $poscode                = $_POST["poscode"];
        $state                  = $_POST["state"];
        $user_id                = $_POST["user_id"];


        echo $user_name . $user_email_address . $city . $address . $poscode . $state . $user_id;
        
        
        $sql = "insert into order_history(user_name, user_email_address, address, city, poscode, state, phone_number, tx_id, tx_date)
                values('$user_name', '$user_email_address', '$address', '$city', '$poscode','$state', '$phone_number', '$tx_id', '$tx_date')";
        
                $result = mysqli_query($connection,$sql);		
        if($result == false){			
            echo"<p>ERROR : can't $sql".$connection->error."</p></div>";
        }
        else {			
			echo "<div class ='box container'>			
				<p>Adding Process Was Successfully Executed</p>			
            ";
            header('location: payment.php');
            $_SESSION["order_session"] = $tx_id;


        }
    }
?>