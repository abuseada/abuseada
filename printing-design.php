<?php 
    $pagename = 'Printing Design';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './assets/include/page-head.php' ?>
</head>
<body>
    <!-- ============== LOADING PAGE ============== -->
    <?php include'./assets/include/loading_screen.php' ?>

    <!-- ============== Header ============== -->
    <?php include'./assets/include/pages-header.php'; ?>

    <!-- ============== Start Main Content ============== -->

    <main>
        <!-- ===================== Start Services Img Thumbnail ===================== -->
        <section class="imgThum">
        <div class="servTxtinfo">
                <h2 class="servName">
                    <?php echo $pagename; ?>
                </h2>
                <div class="servbars">
                    <span class="servbar bar1"></span>
                    <span class="servbar bar2"></span>
                </div>
                <div class="servLinks">
                    <p class="text logo">Abu Seada</p>
                    <p class="text">|</p>
                    <a href="./index.php" class="text servlink">Home</a>
                    <p class="text">|</p>
                    <a href="./printing-design.php" class="text servlink"><?php echo $pagename; ?></a>
                </div>
            </div>
            <div class="img">
                <div class="imgOverlay"></div>
                <img src="./assets/stock/services/printing-design.jpg" alt="Graphic Design">
            </div>
        </section>
        <!-- ===================== End Services Img Thumbnail ===================== -->
        <!-- ===================== Start Services Info ===================== -->
        <section class="serv_info section">
            <div class="container">
                <div class="servtittle">
                    <h2 class="servhead"><?php echo $pagename; ?> Service's From Abu Seada</h2>
                    <p class="servtext text">Your printing design in Abu Seada. Make your dream Design a reality with our flexible solutions.</p>
                    <p class="servText text">You can find solutions to your graphic design needs immediately or if you need continuous designs, you can get information about our monthly graphic design services.</p>
                </div>
                <div class="servContent">
                <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Business Card Design</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">Ready to print business card designs for your company. With different printing options suitable for your corporate identity, single-sided or double-sided.</p>
                    </div>
                    <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Flyer and Brochure Design</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">Creative flyer and brochure designs promoting your products and services.</p>
                    </div>
                    <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Catalog Design</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">Successful sales always start with fully prepared product catalogs. Contact us for your catalog design needs that best express your products and services.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================== End Services Info ===================== -->

            <!-- ===================== Portfolio ===================== -->
    <section class="portfolio section" id="portfolio">
        <div class="model">
            <div class="model-overlay"></div>
            <div class="slider-wrap">
            <div class="prev-btn navigatoion">
                <i class="uil uil-angle-left-b"></i>
            </div>
            <div class="images">
                <img class="showImage" src="./assets/stock/services/printing-design-projects/Abu-Seada-Flayer.png" alt="Abu Seada Flayer">
                <img src="./assets/stock/services/printing-design-projects/Abu-Seada-Card.png" alt="Abu Seada Card">
            </div>
            <div class="next-btn navigatoion">
                <i class="uil uil-angle-right-b"></i>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="portfolio-header">
                <div class="portfolio-title">
                    <h3 class="sub-heading">Portfolio</h3>
                    <h1 class="heading">Last Projects!</h1>
                </div>
            </div>
            <div class="portfolio-gallery">
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/printing-design-projects/Abu-Seada-Flayer.png" alt="Abu Seada Flayer">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/printing-design-projects/Abu-Seada-Card.png" alt="Abu Seada Card">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- ===================== Testimonials ===================== -->
        <?php include './assets/include/testimonials.php' ?>
        <!-- ===================== Float Icon In Side ===================== -->
        <?php include './assets/include/float_link.php' ?>
    </main>

    <!-- ============== End Main Content ============== -->
    
    <!-- ============== Footer ============== -->
    <?php include'./assets/include/footer.php' ?>

    <!-- Include Action btns -->
    <?php include './assets/include/action-btns.php' ?>
    
    <!-- Swiper File -->
    <?php include './assets/include/swiper.php' ?>
    
    <!-- JS File -->
    <script src="./assets/js/page-script.js"></script>
    <script src="//code.tidio.co/zitajcimkibkyzc735goktpbl2jp3zak.js" async></script>
</body>
</html>