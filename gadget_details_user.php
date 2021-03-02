<?php 
	session_start();
	include('connection.php');
	include('user_index_header.php');
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<div class = "gadget">
			<?php
				if(isset($_GET['gadget_id'])) {
					$gadget_id = $_GET['gadget_id'];
					$query = "SELECT * FROM gadget WHERE gadget_id = '$gadget_id'";
					$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)) {
						$gadget_id = $row['gadget_id'];
						$gadget_model = $row['gadget_model'];
						$gadget_price = $row['gadget_price'];
						$gadget_image = $row['gadget_image'];
						$gadget_description = $row['gadget_description'];
						
						echo "
							<form method='POST' action='cart.php?action=addCart&gadget_id=$gadget_id'>
								<div class='gadget-box' style='padding: 20px;'>
									<h3 style='text-align: center; padding: 50px;'>$gadget_model</h3>
									<br/>
									<img style='padding-left: 500px;' src='gadget_images/$gadget_image' width='auto' height='auto'/>
									<br/><br/>
									<h3 style='padding-left: 870px;'><b>RM $gadget_price</b></h3>
									<br/>
									<p>Quantity: <input type='text' style='text-align: center;' name='gadget_quantity' value='1'></p>
									<br/>
									<p style='margin-left: 390px; margin-right: 390px;'>$gadget_description</p>
									<input type='submit' name='addCart' <button style='float:center; margin: 20px;' value='Add to Cart'</button></a>
									<input type='hidden' name='hidden_name' value='$gadget_model'>	
									<input type='hidden' name='hidden_price' value='$gadget_price'>
								</div>
							</form>
						";
					}
				}
			?>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>