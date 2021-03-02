<?php 
    include('connection.php');
    include('header.php');

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
                            <div class='gadget-box' style='padding: 20px; margin-left: 800px; margin-right: 790px; border: 2px solid black'>
                                <h3>$gadget_model</h3>
                                <br/>
                                <a href='gadget_details.php?gadget_id=$gadget_id'><img src='gadget_images/$gadget_image' width='180' height='180'/></a>
                                <br/><br/>
                                <h4 style='text-align: left; font-size: 14px;'><b>RM $gadget_price</b>
                            </div>
                            <br/>
                        ";
                    }
                ?>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>