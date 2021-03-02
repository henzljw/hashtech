<?php 
    /* Connection file */
	include("connection.php");
	include('header_admin_index.php');
?>
<html>
    <head>
        <title>Gadget List | #hashtech Malaysia</title>
    </head>
    <body>
        <div class="main">
            <h2>Gadget List</h2>
                <form name="showCategory" method="POST">
                    <table border="1" width="500" align="center">
                        <tr align="center">
                            <th>Gadget ID</th>
                            <th>Gadget Model</th>
                            <th>Gadget Price</th>
                            <th>Gadget Description</th>
                            <th>Gadget Image</th>
                            <th>Action</th>
                        </th>
                        <?php 
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
    if(isset($_GET["gadget_id"])) {
        $gadget_id = $_GET["gadget_id"];
        $query = "DELETE FROM gadget WHERE gadget_id = '$gadget_id'";
        mysqli_query($connection, $query);
    }
?>