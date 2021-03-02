<?php 
    include('connection.php');
    include('user_index_header.php');
    session_start();
	if (isset($_POST["addCart"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"gadget_id");
            if (!in_array($_GET["gadget_id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'gadget_id' => $_GET["gadget_id"],
                    'gadget_model' => $_POST["hidden_name"],
                    'gadget_price' => $_POST["hidden_price"],
                    'gadget_quantity' => $_POST["gadget_quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'gadget_id' => $_GET["gadget_id"],
                'gadget_model' => $_POST["gadget_model"],
                'gadget_price' => $_POST["gadget_price"],
                'gadget_quantity' => $_POST["gadget_quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["gadget_id"] == $_GET["gadget_id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                    include('footer.php');
                }
            }
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart | #hashtech Malaysia</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
            * {
                font-family: 'Titillium Web', sans-serif;
            }
            .product{
                border: 1px solid #eaeaec;
                margin: -1px 19px 3px -1px;
                padding: 10px;
                text-align: center;
                background-color: #efefef;
            }
            table, th, tr{
                text-align: center;
            }
            .title2{
                text-align: center;
                color: #66afe9;
                background-color: #efefef;
                padding: 2%;
            }
            h2{
                text-align: center;
                color: #66afe9;
                background-color: #efefef;
                padding: 2%;
            }
            table th{
                background-color: #efefef;
            }
        </style>
    </head>
    <body>

        <div class="container" style="width: 65%">
            <div style="clear: both"></div>
            <h3 class="title2">Shopping Cart</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                    <th width="30%">Gadget Model</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>
                
                <?php
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value["gadget_model"]; ?></td>
                                <td><?php echo $value['gadget_quantity']; ?></td>
                                <td>RM <?php echo $value["gadget_price"]; ?></td>
                                <td>
                                    RM <?php echo number_format($value["gadget_quantity"] * $value["gadget_price"], 2) ?></td>
                                <td><a href="cart.php?action=delete&gadget_id=<?php echo $value["gadget_id"]; ?>"><span
                                            class="text-danger">Remove Item</span></a></td>
                            </tr>
                            <?php
                                $total = $total + ($value["gadget_quantity"] * $value["gadget_price"]);
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <th align="right">RM <?php echo number_format($total, 2); ?></th>
                                <td></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
        <form action="cart.php" method="POST">
            <tr align="center">
                <td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
                <td><input type="submit" name="continue" value="Continue Shopping" /></td>
                <td><button name="cart"><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
            </tr>
        </form>
        <?php include('footer.php'); ?>
        <?php } ?>
    </body>
</html>