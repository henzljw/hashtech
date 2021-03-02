<?php 
    /* Connection file */
	include("connection.php");
	include('header_admin_index.php');
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>User Account List | #hashtech Malaysia</title>
	</head>
	<body>
		<div class="main">
            <h2>User Account List</h2>
            <form name="showCategory" method="POST">
                <table border="1" width="500" align="center">
                    <tr align="center">
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Email Address</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                    </th>
                    <?php 
                        $result = mysqli_query($connection, 'SELECT * FROM user');
                        $count = mysqli_num_rows($result);
                        
                        while($row = mysqli_fetch_assoc($result)) {
							?>
                            <tr align='center'>
                                <td><?php echo $row['user_id']?></td>
                                <td><?php echo $row['user_name']?></td>
                                <td><?php echo $row['user_email_address']?></td>
                                <td><?php echo $row['phone_number']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['city']?></td>
                                <td><?php echo $row['date_of_birth']?></td>
                                <td><?php echo $row['gender']?></td>
                                <td><a href="user_list_delete.php?user_id=<?php echo $row['user_id']; ?>" onclick="return confirmation();">Delete</a></td>
                            </tr>
                    <?php } ?>
                </table>
                <p>Number of records: <?php echo $count; ?></p>
            </form>
		</div>
	</body>
</html>
<?php 
    if(isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        $query = "DELETE FROM user WHERE user_id = '$user_id'";
		mysqli_query($connection, $query);
	}
?>