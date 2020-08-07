<?php
if($_POST){
    setcookie("post_latitude", $_POST['latitude'], time() + (86400 * 30), "/");
    setcookie("post_longitude",  $_POST['longitude'], time() + (86400 * 30), "/");
    setcookie("post_item_Location", $_POST['item_Location'], time() + (86400 * 30), "/");
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <?php
        include('include/header.php');
    ?>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <?php
                include('include/body_header.php');
            ?>
            <!-- wrapper -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    <!-- home-map-->
                    <div class="home-map fl-wrap">
                        <!-- Map -->
                        <div class="map-container fw-map">
                            <div id="map-main">
                            </div>
                        </div>
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lng" id="lng">
                        <input type="hidden" name="location" id="location">

                        <!-- Map end -->
                        <div class="absolute-main-search-input">
                            <div class="container">
                                <div class="main-search-input fl-wrap" >
                                    
                                    <div class="main-search-input-item location" id="autocomplete-container" style="width:100%">
                                        <input type="text" placeholder="Location" id="autocomplete" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <button class="main-search-button" id="btn-main" >Back</button>
                                </div>
                            </div>
                        </div>
                        <!-- home-map end-->
                    </div>
                    <!-- section end -->
                   
                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->

            <?php 
                if($_COOKIE['post_latitude']){?>
                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2>First Page Post</h2>
                                <div class="section-subtitle">First Page Post</div>
                                <span class="section-separator"></span>
                                <p>Latitude : <?php print_r($_COOKIE['post_latitude']); ?></p>
                                <p>Longitude : <?php print_r($_COOKIE['post_longitude']); ?></p>
                                <p>Location : <?php print_r($_COOKIE['post_item_Location']); ?></p>
                            </div>
                            
                            
                        </div>
                    </section>
                <?php } ?>

            <?php
                include('include/body_footer.php');
            ?>
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <?php
            include('include/footer.php');
        ?>
    </body>
</html>