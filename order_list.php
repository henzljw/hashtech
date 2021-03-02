<?php
    include('connection.php');
    include('header_admin_index.php');
    session_start();
?>
<html>
    <head>
        <title>Order List| #hashtech Malaysia</title>
    </head>
    <body>
    <div class="main">
            <h2>Order List</h2>
            <form name="showCategory" method="POST">
                <table border="1" width="500" align="center">
                    <tr align="center">
                        <th>Order ID</th>
                        <th>Gadget Model</th>
                        <th>Gadget Price</th>
                        <th>Gadget Description</th>
                        <th>Gadget Image</th>
                        <th>Action</th>
                    </th>
                    <?php 
                        mysqli_select_db($connection, 'hashtech'); 
                        $result = mysqli_query($connection, 'SELECT * FROM gadget');
                        $count = mysqli_num_rows($result);
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr align='center'>
                                <td><?php echo $row['gadget_id']?></td>
                                <td><?php echo $row['gadget_model']?></td>
                                <td><?php echo $row['gadget_price']?></td>
                                <td><?php echo $row['gadget_description']?></td>
                                <td><?php echo $row['gadget_image']?></td>
								<td><a href="gadget_edit.php?gadget_id=<?php echo $row['gadget_id']; ?>" onclick="return confirmation();">Edit</a></td>
                                <td><a href="gadget_list_delete.php?gadget_id=<?php echo $row['gadget_id']; ?>" onclick="return confirmation();">Delete</a></td>
                            </tr>
                    <?php } ?>
                </table>
                <p>Number of records: <?php echo $count; ?></p>
            </form>
		</div>
    </body>
</html>
<?php
		// write the codes to select the available orders
		$sql = "select * from order_history by ID desc";
		$result = mysqli_query($connection, $sql);
		$count = mysqli_num_rows($result);
		//$row2 = mysqli_fetch_assoc($result);
		
		// first set of vars
		/*$vid = $row2["v_id"];
		$vname = $row2["v_name"];
		$fname = $row2["first_name"];
		$lname = $row2["last_name"];
		$txid = $row2["tx_id"];
		$txdate = $row2["tx_date"];
		$pickup_d = $row2["t_pickup"];
		$return_d = $row2["t_return"];
		$duration = $row2["t_rentduration"];
		$paystatus = $row2["t_pay_status"];
		$fullname = $fname . " " . $lname;*/
		

		// if no records are found
		if(mysqli_num_rows($result) == 0) {
		?>
			<div><p>No Records Found</p></div>
		<?php
		} 
			
		else{
			// if got records found use looping to display the results
			while($row = mysqli_fetch_assoc($result)) {
				$vid = $row["v_id"];
				$fullname = $row["fullname"];
				$email = $row["email"];
				$add = $row["t_dest_address"];
				$date = $row["t_pickup"];
				$id = $row["tx_id"];
				$duration = $row["t_rentduration"];
				$datew3 = date('Y-m-d', strtotime($date."+$duration days"));
				
				$result_cust = mysqli_query($conn, "select * from crs_customer where email='$email'");
				$row_cust = mysqli_fetch_assoc($result_cust);
		?>
			<div class="box3 col-sm-12">
				<h2><?php echo $row["v_name"]; ?></h2>
				<h5><span class="glyphicon glyphicon-time"></span> Order by <?php echo $fullname; ?>, <?php echo $row["tx_date"]; ?>. <span class="label
				<?php if ($row["t_pay_status"] == "Accepted") { echo " label-success"; }
				else if ($row["t_pay_status"] == "Rejected") { echo " label-danger"; } 
				else { echo " label-warning"; } ?>"><?php echo $row["t_pay_status"]; ?></span></h5>
				<br>
				<!--<button type="button" class="btn btn-info" onclick="showdetails()">View Order</button>-->
				<h4>Order details</h4>
				<br>
				<div id="ordertoggle">
					<div>
						<p>Tx ID: <?php echo $id; ?></p>
						<p>Tx Date: <?php echo $row["tx_date"]; ?></p>
						<p>Customer ID: <a href="member_list2.php?id=<?php echo $row_cust["ID"]; ?>"><?php echo $row_cust["ID"]; ?></a></p>
						<p>Customer Name: <?php echo $fullname; ?></p>
						<p>Email: <?php echo $email; ?></p>
						<p>Vehicle ID: <a href="admin_car_list2.php?id=<?php echo $row["v_id"]; ?>"><?php echo $row["v_id"]; ?></a></p>
						<p>Vehicle Name: <?php echo $row["v_name"]; ?></p>
						<p>Location: <?php echo $add; ?></p>
						<p>Pickup Date: <?php echo $date; ?></p>
						<p>Return Date: <?php echo $datew3 ?></p>
						<p>Duration: <?php echo $duration; ?> day/s</p>
						<p>Status: <?php echo $row["t_pay_status"]; ?></p>
						<a href="order_list.php?grp_id=<?php echo $id ?>" name="acc" id="acc" ><button type="button" class="btn btn-success btn-sm">Accept</button></a>
						<a href="order_list.php?grps_id=<?php echo $id ?>" name="rej" id="rej" ><button type="button" class="btn btn-danger btn-sm">Reject</button></a>
					</div>
				
				</div>
				<br>
			</div>
			
		<?php 
		} 
		}
		?>
		