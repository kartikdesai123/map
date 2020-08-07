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
                        <!-- Map end -->
                        <div class="absolute-main-search-input">
                            <div class="container">
                                <div class="main-search-input fl-wrap" >
                                    
                                    <div class="main-search-input-item location" id="autocomplete-container" style="width:100%">
                                        <input type="text" placeholder="Location" id="autocomplete" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <button class="main-search-button">Search</button>
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