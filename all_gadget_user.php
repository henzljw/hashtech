<?php 
    session_start();
    include('connection.php');
    include('user_index_header.php');
?>
<html>
    <head>
        <title>Gadget | #hashtech Malaysia</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <div class="gadget" style="padding: 20px;">
            <h2 style="text-align: center">Gadget</h2>
            <div class = "all-gadget" style="padding: 20px;">
                <?php
                    $query = "SELECT * FROM gadget";
                    $result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $gadget_id = $row['gadget_id'];
                        $gadget_model = $row['gadget_model'];
                        $gadget_price = $row['gadget_price'];
                        $gadget_image = $row['gadget_image'];
                        
                        echo "
                            <form method='POST' action='cart.php?action=addCart&gadget_id=$gadget_id'>
                                <div class='gadget-box' style='padding: 20px; margin-left: 800px; margin-right: 790px; border: 2px solid black;'>
                                    <h3>$gadget_model</h3>
                                    <br/>
                                    <a href='gadget_details_user.php?gadget_id=$gadget_id'><img src='gadget_images/$gadget_image' width='180' height='180'/></a>
                                    <br/><br/>
                                    <h4 style='text-align: left; font-size: 14px;'><b>RM $gadget_price</b>
                                    <input type='submit' name='addCart' <button style='float:center; margin: 20px;' value='Add to Cart'</button></a>
									<input type='hidden' name='hidden_name' value='$gadget_model'>	
                                    <input type='hidden' name='hidden_price' value='$gadget_price'>
                                    <input type='hidden' style='text-align: center;' name='gadget_quantity' value='1'>
                                </div>
                            </form>
                            <br/>
                        ";
                    }
                ?>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>           