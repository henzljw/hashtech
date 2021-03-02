<?php

    /* --------------------====================-------------------- */
    /*                             INDEX                            */
    /* --------------------====================-------------------- */
    /* 1. [connection.php] - Connection to database */
    /* 2. [admin_login.php] */
    /* 3. [user_account_register.php] */
    /* 4. [user_account_login.php] */
    /* 5. [gadget_add.php] */
    /* 6. [gadget_list.php] */
    /* 7. [gadget_list_delete.php] */
    /* --------------------====================-------------------- */
    

    /* 1. ---------- LINE START - [connection.php] - Connection to database ----------*/
    
    include('connection.php');
    
    /* 1. ---------- LINE END - [connection.php] - Connection to database ----------*/

    /* 2. ---------- LINE START - [admin_login.php] ----------*/
    
    if(isset($_POST['submit'])) {
        $admin_email_address = $_POST['admin_email_address'];
        $admin_password = $_POST['admin_password'];
        $query = "SELECT * FROM administrator WHERE admin_email_address = '$admin_email_address' and admin_password = '$admin_password'";
        $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $_SESSION['admin_email_address'] = $row['admin_email_address']; 
                header('location: admin_index.php');
            }
            else {
                $error_message = "Wrong either email address or password combination. Please try again.";
                header('location: admin_login.php');
            }
    }

    /* 2. ---------- LINE END - [admin_login.php] ----------*/

    /* 3. ---------- LINE START - [user_account_register.php] ----------*/
    
   

    /* 3. ---------- LINE END - [user_account_register.php] ----------*/

    /* 4. ---------- LINE START - [user_account_login.php] ----------*/

    //initialize the session
    

    /* 4. ---------- LINE END - [user_account_login.php] ----------*/

    /* 5. ---------- LINE START - [gadget_add.php] ----------*/

    /* 5. ---------- LINE END - [gadget_add.php] ----------*/

    /* 6. ---------- LINE START - [gadget_edit.php] ----------*/

    /* 6. ---------- LINE END - [gadget_edit.php] ----------*/
    /* gadget_list(delete) */

    if(isset($_GET["gadget_id"])) {
        $gadget_id = $_GET["gadget_id"];
        $query = "DELETE FROM gadget WHERE gadget_id = '$gadget_id'";
        mysqli_query($connection, $query);
        header('location: gadget_list_delete.php');
    }

    /* gadget_list(delete) */

    /* 4. ---------- LINE START - Server for payment_process.php ----------*/
    
    //select all receipt info from the database and set it to array variable called "$files" [Download files]
    $query = "SELECT * FROM proof_of_payment";
    $result = mysqli_query($connection, $query);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Uploads files
    if (isset($_POST['upload'])) { // if save button on the form is clicked

        // name of the uploaded file
        $filename = $_FILES['receipt']['name'];

        // destination of the file on the server
        $destination = 'ProofOfPayment/' . $filename;

        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['receipt']['tmp_name'];
        $size = $_FILES['receipt']['size'];

        if (!in_array($extension, ['pdf', 'jpg', 'jpeg', 'png'])) {
            echo "Your file must be .pdf, .jpg, .jpeg or .png format";
        } 
        elseif ($_FILES['receipt']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
            echo "File too large!";
        } 
        else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)) {
                $query = "INSERT INTO proof_of_payment (file_name, file_size, downloads) VALUES ('$filename', '$size', 0)";
                if (mysqli_query($connection, $query)) {
                    header("Location: payment_process.php");
                    exit;
                }
            } 
            else {
                echo "Failed to upload file.";
            }
        }
    }

    // Downloads files
    if (isset($_GET['file_id'])) {
        $id = $_GET['file_id'];

        // fetch file to download from database
        $query = "SELECT * FROM proof_of_payment WHERE file_id = $id";
        $result = mysqli_query($connection, $query);

        $file = mysqli_fetch_assoc($result);
        $filepath = 'ProofOfPayment/' . $file['file_name'];

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('ProofOfPayment/' . $file['file_name']));
            readfile('ProofOfPayment/' . $file['file_name']);

            // Now update downloads count
            $newCount = $file['downloads'] + 1;
            $updateQuery = "UPDATE proof_of_payment SET downloads=$newCount WHERE file_id=$id";
            mysqli_query($connection, $updateQuery);
            exit;
        }
    }
    
    /* 4. ---------- LINE END - Server for payment_process.php ----------*/
    /* 5. search */
    
    

?>