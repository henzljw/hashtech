<!-- index.php -->
<!-- Main Page of hashtech's website -->
<!-- Engineered by heckerio -->

<?php

include("layouts/templates/htmlhead.php");
include("layouts/components/navbar.php");
// include('connection.php');
// include('header.php');
?>
<html>

<head>
    <title>hashtech</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    <link rel="stylesheet" type="js" href="script/script.js">
</head>

<body>

    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/carousel/zenfone8.png" alt="" style="width: 500px; height: 700px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/carousel/rog5.png" alt="" style="width: 500px; height: 700px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/carousel/pixel4a.jpg" alt="" style="width: 500px; height: 700px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- CAROUSELL END -->

    <!-- CONTAINER -->
    <div class="container">

        <!-- TOP SELLING -->
        <div class="center">
            <div class="title" style="text-align: center;">
                <h2>TOP SELLING PRODUCTS</h2>
                <p>Explore the top trending products here.</p>
            </div>
        </div>
        <!-- TOP SELLING END -->

    </div>
    <!-- CONTAINER END -->


    <!-- NEWSLETTER -->
    <div class="newsletter">
        <form action="">
            <div class="container">
                <h2>NEWSLETTER SIGN UP</h2>
                <p>Subscribe to know our latest update.</p>
            </div>
            <div class="container" style="margin-top: 50px;">
                <div class="input-group mb-3">
                    <input type="email-address" class="form-control" placeholder="Your email address" aria-label="Your email address" aria-describedby="basic-addon">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- NEWSLETTER END -->

    <!-- <div class="container" style="border: none; margin-bottom: 20px;">
        <br />
        <div class="search">
            <form method="get" action="index.php" enctype="multipart/form-data">
                <input style="margin: -100px; padding: 10px; width: 1100px; background-color: white; border: 2px solid black" type="text" name="gadget_search" placeholder="Search any gadget at here..." />
                <a href="search_result.php"><input type="submit" name="search" value="Search" style="margin-left: 40px; margin-right: 10px; padding: 10px; background-color: white; border: 2px solid black" /></a>
            </form>
            <br />
            <?php
            // if (isset($_GET['search'])) {
            //     $gadget_search = $_GET['gadget_search'];
            //     $query = "SELECT * from gadget WHERE gadget_model like '%$gadget_search%'";
            //     $result = mysqli_query($connection, $query);
            //     if ($row = mysqli_fetch_array($result)) {
            //         $gadget_id = $row['gadget_id'];
            //         $gadget_model = $row['gadget_model'];
            //         $gadget_price = $row['gadget_price'];
            //         $gadget_image = $row['gadget_image'];

            //         echo "
            //                     <h2 style='text-align: center; margin-left: -500px;'>Search Result</h2>
            //                     <br/>
            //                     <div class='gadget-box' style='margin-left: -100px; border: 2px solid black; padding: 40px; margin-right: 1260px;'>
            //                         <h3>$gadget_model</h3>
            //                         <br/>
            //                         <a href='gadget_details.php?gadget_id=$gadget_id'><img src='gadget_images/$gadget_image' width='150' height='180'/></a>
            //                         <br/><br/>
            //                         <p style='text-align: left; font-size: 14px;'><b>RM $gadget_price</b>
            //                     </div>
            //                 ";
            //     } else {
            //         echo "
            //                     <h3 style='text-align: center; margin-left: -500px;'>Search Result</h3>
            //                     <br/>
            //                     <h4 style='text-align: center; margin-left: -500px; font-weight: normal;'>No result found!</h4>";
            //     }
            // }
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
    <?php include 'footer.php'; ?> -->
</body>

<?php

include("layouts/components/footer.php");

?>

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