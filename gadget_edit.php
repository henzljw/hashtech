<?php
    /* Connection file */
    include("connection.php");
    session_start();
    $_SESSION['id'] = $_GET['gadget_id'];
    echo $_SESSION['id'];
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Edit Gadget | #hashtech Malaysia</title>
	</head>
	<body>
		<div class="main">
            <h2>Edit Gadget</h2>
            <form name="addGadget" method="POST" action="gadget_edit(1).php">
                <label>Gadget Model: </label>
                <input type="text" name="gadget_model" required>
                <br/><br/>
                <label>Gadget Price: </label>
                <input type="text" name="gadget_price" required>
                <br/><br/>
                <label>Gadget Description: </label>
                <br/>
                <textarea name="gadget_description" rows="10" cols="60" required><?php $gadget_description; ?></textarea>
                <br/><br/>
                <label>Gadget Image: </label>
                <input type="file" name="imgs"/><?php echo $gadget_image ?>
                <br/><br/>
                <input type="submit" name="savegadget" value="Submit">
            </form>
		</div>
	</body>
</html>
<script>
    window.alert("<?php echo "$gadget_brands" ?> <?php echo "$gadget_model" ?> "+" is saved inside the database.");
</script>