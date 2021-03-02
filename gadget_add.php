<?php
    /* Connection file */
	include("connection.php");
	include('header_admin_index.php');

	$query = "SELECT * FROM gadget";
    $result = mysqli_query($connection, $query);
    $img = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['add'])) {
        $fileName = $_FILES['img']['name'];
        $destination = 'gadget_images/' . $fileName;
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        //receive all input values from the form
        $gadget_model = $_POST['gadget_model'];
        $gadget_price = $_POST['gadget_price'];
        $gadget_description = $_POST['gadget_description'];

        $img = $_FILES['img']['tmp_name'];
        $size = $_FILES['img']['size'];

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            echo "Your file must be .jpg, .jpeg or .png format";
        } 
        elseif ($_FILES['img']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
            echo "File too large!";
        } 
        else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($img, $destination)) {
                $query = "INSERT INTO gadget (gadget_model, gadget_price, gadget_description, gadget_image) VALUES ('$gadget_model', '$gadget_price', '$gadget_description', '$fileName')";
                if (mysqli_query($connection, $query)) {
                    header("Location: gadget_add.php");
                    exit;
                }
            } 
            else {
                echo "Failed to upload file.";
            }
        }
    }
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Add Gadget | #hashtech Malaysia</title>
		<style>
			label {
				font-size: 12px;
			}
			form {
				border: 1px solid black;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<div class="main">
            <h2>Add / Insert Gadget</h2>
            <form name="addGadget" method="POST" action="gadget_add.php" enctype="multipart/form-data">
                <label>Gadget Model: </label>
				<br/>
                <input type="text" name="gadget_model" required> 
                <br/><br/>
                <label>Gadget Price: </label>
				<br/>
				<label>RM </label>
                <input type="text" name="gadget_price" placeholder="format: XXXX.XX // XXXX"required>
                <br/><br/>
                <label>Gadget Description: </label>
                <br/>
                <textarea name="gadget_description" rows="10" cols="70" required></textarea>
                <br/><br/>
                <label>Gadget Image: </label>
                <input type="file" name="img">
				<br/><br/>
                <button type="submit" name="add">Submit</button>
            </form>
		</div>
	</body>
</html>