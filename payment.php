<?php
    include('user_index_header.php');
    include('connection.php');
   /// include('hashtech.php');
    session_start();

    $order_id = $_SESSION["order_session"];
?>

<html>
    <head>
        <title>Payment | #hashtech Malaysia</title>
        <script>
          //  alert('Attention: This payment system are ONLY support Direct Bank-In Transfer method!');
        </script>
    </head>
    <body>
    <h1 style = "text-align: center; padding: 20px;">Online Payment</h1>
        <div class="container">
            <h3 style="text-align: center">1. Please select a bank for Direct Bank-In transfer method:</h3>
            <br/>
            <table border="1" style= "margin-left: 750px; border: none;">
                <tr>
                    <td><a target="blank" href = "https://www.cimbclicks.com.my/clicks/#/"><img src = "images/cimb.jpeg" style="width:200px; height:200px;"></a></td>
                    <td><a target="blank" href = "https://www.maybank2u.com.my/home/m2u/common/login.do"><img src = "images/maybank.jpg " style="width:200px; height:200px;"></a></td>
                </tr>
                <tr>
                    <td><a target="blank" href = "https://www2.pbebank.com/myIBK/apppbb/servlet/BxxxServlet?RDOName=BxxxAuth&MethodName=login"><img src = "images/publicbank.gif" style="width:200px; height:200px;"></a></td>
                    <td><a target="blank" href = "https://s.hongleongconnect.my/rib/app/fo/login"><img src = "images/hongleong.png" style="width:200px; height:200px;"></a></td>
                </tr>
            </table>
            <br/>
            <h3 style="text-align: center;">2. #hashtech bank account details</h3>
            <br/>
            <h4 style="text-align: center; font-weight: normal">a. CIMB Bank - hashtech Malaysia (1092836474)</h4>
            <h4 style="text-align: center; font-weight: normal">b. Maybank - hashtech Malaysia (1092836474)</h4>
            <h4 style="text-align: center; font-weight: normal">c. Hong Leong Bank - hashtech Malaysia (1092836474)</h4>
            <h4 style="text-align: center; font-weight: normal">d. Public Bank - hashtech Malaysia (1092836474)</h4>
            <br/>
            <form action="payment.php" method="POST" name="upload" style="margin-left: 10px;" enctype="multipart/form-data">
                <h3 style="text-align: center;">3. Upload proof of payment</h3>
                    <br/>
                    <div style="text-align: center;">
                        <h4>Your file <b>MUST</b> be in:</h4>
                        <br/>
                        <h4>1. File format: .jpg / .jpeg / .png / .pdf</h4> 
                        <h4>2. File Size: less than 1MB</h4>
                        <br/>
                        <input style="margin-left: 100px;"type="file" name="receipt">
                    </div>
                    <br/>
                    <input type="hidden" style="background: white; border: 2px solid black; margin-left: 850px; padding: 10px;"value="<?php echo $order_id ?>"> 
                    <br/><br/>
                    <button type="submit" style="text-align: center; margin-left: 750px;" name="upload">Upload</button>
            </form>
        </div>
    </body>
</html>

<?php
    include('footer.php');
    //select all receipt info from the database and set it to array variable called "$files" [Download files]
    $query = "SELECT * FROM proof_of_payment";
    $result = mysqli_query($connection, $query);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Uploads files
    if (isset($_POST['upload'])) { // if save button on the form is clicked

        // name of the uploaded file
        $filename = $_FILES['receipt']['name'];

        // destination of the file on the server
        $destination = "ProofOfPayment/" . $filename;

        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['receipt']['tmp_name'];
        $size = $_FILES['receipt']['size'];

        if (!in_array($extension, ['pdf', 'jpg', 'jpeg', 'png'])) {
            echo "Your file must be .pdf, .jpg, .jpeg or .png format";
        } 
        else if ($_FILES['receipt']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
            echo "File too large!";
        } 
        else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)){ 
                $sql = "INSERT INTO proof_of_payment (file_name, file_size, downloads, tx_id) VALUES ('$filename', '$size', 0, '$order_id')";
   
            $result = mysqli_query($connection,$sql);	
            if($result == false){			
                echo"<p>ERROR : can't $sql".$connection->error."</p></div>";
            }
            else {			
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully Upload Payment');
                window.location.href='payment_success.php';
                </script>");

           }
        }
    }

    
}
?>