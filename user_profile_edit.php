<?php 	
    include("connection.php"); 
    session_start();
?>
			       
	<form action="user_profile_edit.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Update your Account</h2></td>
						</tr>
						<?php
                            $user_id = $_SESSION['user_id'];       
                            $query = "SELECT * FROM user WHERE user_id = '$user_id'";
                            $result = mysqli_query($connection, $query); 
                            
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td align='right'>Customer Name:</td>";
                                    echo "<td><input type='text' name='user_name' value=".$row['user_name']." required/></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td align='right'>Customer Email:</td>";
                                    echo "<td><input type='text' name='user_email_address' value=".$row['user_email_address']." required/></td>";
                                    echo "</tr>";    
                                    echo "<tr>";
                                    echo "<td align='right'>Customer Password:</td>";
                                    echo "<td><input type='password' name='user_password' value=".$row['user_password']." required/></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td align='right'>Customer City:</td>";
                                    echo "<td><input type='text' name= 'city' value=".$row['city']."/></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td align='right'>Customer Contact:</td>";
                                    echo "<td><input type='text' name='phone_number' value=".$row['phone_number']."/></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td align='right'>Customer Address:</td>";
                                    echo "<td><input type='text' name='address' value=".$row['address']."/></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                        <tr align='center'>
						<td colspan='6'><input type='submit' name='update' value='Update Account' /></td>
					</tr>";
					</table>
				
				</form>
		
                        
	
<?php 
	if(isset($_POST['update'])){
        $user_id = $_GET['user_id'];
		$user_name = $_POST['user_name'];
		$user_email_address = $_POST['user_email_address'];
		$user_password = $_POST['user_password'];
		$city = $_POST['city'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
		
		$update_c = "update user set user_name='$user_name', user_email_address='$user_email_address', user_password='$user_password',city='$city', phone_number='$phone_number',address='$address' where user_id='$user_id'";
	
		$run_update = mysqli_query($connection, $update_c); 
		
		if($run_update){
		
		echo "<script>alert('Your account successfully Updated')</script>";
		echo "<script>window.open('user_account.php','_self')</script>";
		
		}
	}
