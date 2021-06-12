<?php
session_start();
include('connection.php');
include('user_index_header.php');
$tx_id = $_SESSION["session"];
$order_id = $_SESSION["order_session"];
?>
<html>

<head>
    <title>Success | #hashtech Malaysia</title>
</head>

<body>
    <div class="thank-you">
        <h3>Dear <?php echo $_SESSION['session']; ?>,</h3>
        <p>Thank you for purchasing gadget from #hashtech Malaysia, however, your order <?php echo $order_id; ?> will be coming about 2 - 3 days.</p>
        <br />
        <p>Thank you!</p>
        <br />
        <p>Best Regards,</p>
        <h3>#hashtech Malaysia</h3>
    </div>
    <h3>Order Details</h3>
    <table border=1>

    </table>
</body>

</html>