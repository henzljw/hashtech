<?php
session_start();
include('connection.php');
include('user_index_header.php');
$user_name = $_SESSION["session"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>#hashtech Malaysia: Online Shopping for gadget</title>

</head>

<body>
    <?php
    echo
    '<div class="welcome" style="text-align: center; padding-top: 50px;">
				Welcome ' . $_SESSION['session'] . '
			</div>';
    ?>
    <div class="container" style="border: none; margin-bottom: 20px;">
        <br />
        <div class="search">
            <form method="get" action="user_index.php" enctype="multipart/form-data">
                <input style="margin: -100px; padding: 10px; width: 1100px; background-color: white; border: 2px solid black" type="text" name="gadget_search" placeholder="Search any gadget at here..." />
                <a href="search_result.php"><input type="submit" name="search" value="Search" style="margin-left: 40px; margin-right: 10px; padding: 10px; background-color: white; border: 2px solid black" /></a>
            </form>
            <br />
            <?php
            if (isset($_GET['search'])) {
                $gadget_search = $_GET['gadget_search'];
                $query = "SELECT * from gadget WHERE gadget_model like '%$gadget_search%'";
                $result = mysqli_query($connection, $query);
                if ($row = mysqli_fetch_array($result)) {
                    $gadget_id = $row['gadget_id'];
                    $gadget_model = $row['gadget_model'];
                    $gadget_price = $row['gadget_price'];
                    $gadget_image = $row['gadget_image'];

                    echo "
                                <h2 style='text-align: center; margin-left: -500px;'>Search Result</h2>
                                <br/>
                                <div class='gadget-box' style='margin-left: -100px; border: 2px solid black; padding: 40px; margin-right: 1260px;'>
                                    <h3>$gadget_model</h3>
                                    <br/>
                                    <a href='gadget_details_user.php?gadget_id=$gadget_id'><img src='gadget_images/$gadget_image' width='150' height='180'/></a>
                                    <br/><br/>
                                    <p style='text-align: left; font-size: 14px;'><b>RM $gadget_price</b>
                                </div>
                            ";
                } else {
                    echo "
                                <h3 style='text-align: center; margin-left: -500px;'>Search Result</h3>
                                <br/>
                                <h4 style='text-align: center; margin-left: -500px; font-weight: normal;'>No result found!</h4>";
                }
            }
            ?>
        </div>
        <br />
        <div class="about-us" style="margin: 20px;">
            <h2 style="text-align: center;">About Us</h2>
            <br />
            <p style="text-align: center; margin-left: 390px; margin-right: 390px;">
                #hashtech Malaysia is an online gadget shopping website that was created by Law JunWei and Puteri Nurhanis Shamimi Mahzlan to help Malaysian have an easier and more convenient online shopping experience.
                At #hashtech Malaysia, we put our customer as our main priority and we believe there is a better friendlier, and more convenient way when it come to online shopping for gadgets.
                We hope by creating this website, we help all Malaysians all around Malaysia.
            </p>
            <br /><br />
            <img src='images/puteri.jpeg' width="200" height="250" style="margin-left: 700px">
            <img src='images/henry.jpg' width="200" height="250" style="margin-left: 50px">
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
<script>
    function showResult(str) {
        if (str.length == 0) {
            document.getElementById("livesearch").innerHTML = "";
            document.getElementById("livesearch").style.border = "0px";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "livesearch.php?q=" + str, true);
        xmlhttp.send();
    }
</script>