<?php
    session_start();
    include('connection.php');
        $gadget_model = $_POST['gadget_model'];
        $gadget_price = $_POST['gadget_price'];
        $gadget_description = $_POST['gadget_description'];
        $gadget_image = addslashes($_FILES['imgs']['tmp_name']);
        $namepic = addslashes($_FILES['imgs']['name']);
        $image = file_get_contents($gadget_image);
        $image = base64_encode($gadget_image);

        $query = mysqli_query($connection, "UPDATE gadget SET gadget_model = '$gadget_model', gadget_price = '$gadget_price', 
        gadget_description = '$gadget_description' WHERE gadget_id = ". $_SESSION['id']);
        //header('location: gadget_edit.php');
    
?>