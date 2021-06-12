<?php include 'hashtech.php';
include 'header_admin_index.php'; ?>
<html>

<head>
    <title>Proof of Payment | #hashtech Malaysia</title>
    <style>
    </style>
</head>

<body>
    <div class="main">
        <h2>Transaction Record</h2>
        <br />
        <table id="admin">
            <thead>
                <th>File ID</th>
                <th>File Name</th>
                <th>File Size (in MB)</th>
                <th>Tx_ID</th>
                <th>Downloads</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach ($files as $file) : ?>
                    <tr>
                        <td><?php echo $file['file_id']; ?></td>
                        <td><?php echo $file['file_name']; ?></td>
                        <td><?php echo floor($file['file_size'] / 1000) . ' KB'; ?></td>
                        <td><?php echo $file['tx_id']; ?></td>
                        <td><?php echo $file['downloads']; ?></td>
                        <td><a href="payment_list.php?file_id=<?php echo $file['file_id'] ?>">Download</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>