<?php
    include('connection.php');
?>
<html>
    <head>

    </head>
    <body>
        <div id='product'>
            <h3><a href='gadget_details.php?gadget_id=$gadget_id'>$gadget_model</a></h3>
            <img src='gadget_images/$gadget_image' width='180' height='180'/>
            <p><b> RM $gadget_price </b></p>
        </div>
    </body>
</html>