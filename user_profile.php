<?php 	
	session_start();
	include("connection.php"); 
	include('user_index_header.php');

		$user_name = $_SESSION["session"];

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
			
		<form action="user_profile.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2><?php echo  $_SESSION['session']; ?>'s User Profile</h2></td>
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
							<td align="right">Date of Birth:</td>
							<td><input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>" required/></td>
						</tr>
						<tr>
							<td align="right">Customer City:</td>
							<td><input type="text" name= "city" value="<?php echo $city;?>"/></td>
						</tr>
						<tr>
							<td align="right">Customer Contact:</td>
							<td><input type="text" name="phone_number" value="<?php echo $phone_number;?>"/></td>
						</tr>
						<tr>
							<td align="right">Customer Address</td>
							<td><input type="text" name="address" value="<?php echo $address;?>"/></td>
						</tr>
						<tr>
							<td><input type="hidden" name="user_id" value="<?php echo $user_id;?>" required/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="update" value="Update Account" /></td>
					</tr>
					
					
   
					</table>
				
				</form>
<?php 
if(isset($_POST['update'])){
	
	$user_id 				= $_POST['user_id'];
	$user_name 				= $_POST['user_name'];
	$user_email_address 	= $_POST['user_email_address'];
	$city 					= $_POST['city'];
	$phone_number 			= $_POST['phone_number'];
	$address 				= $_POST['address'];	
	$date_of_birth 			= $_POST['date_of_birth'];	

	$update_c = "update user set user_name ='$user_name', user_email_address='$user_email_address', city='$city', 
				phone_number='$phone_number',address='$address' where user_id='$user_id'";

	$result   = mysqli_query($connection,$update_c);
	
	if($result == false){
			echo "<p>ERROR : can't $sql".$conn->error."</p></div>";
		} else{
			echo "<script>alert('Your account successfully Updated')</script>";
			echo "<script>window.open('user_profile.php','_self')</script>";
			$_SESSION["session"] = $user_name;
	
	}
}
?>
