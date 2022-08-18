<?php 
    $pagename = 'Web Design';
    $pagelink = 'web-design';
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
                    <a href="<?php echo $pagelink  ?>.php" class="text servlink"><?php echo $pagename; ?></a>
                </div>
            </div>
            <div class="img">
                <div class="imgOverlay"></div>
                <img src="./assets/stock/services/web-design.jpg" alt="Web Design">
            </div>
        </section>
        <!-- ===================== End Services Img Thumbnail ===================== -->
        <!-- ===================== Start Services Info ===================== -->
        <section class="serv_info section">
            <div class="container">
                <div class="servtittle">
                    <h2 class="servhead"><?php echo $pagename; ?> Service's From Abu Seada</h2>
                    <p class="servtext text">Your website design in Abu Seada. Make your dream website a reality with our flexible solutions.</p>
                    <p class="servText text">You can find instant solutions to your web design needs or if you need continuous web design, you can get information about our monthly services.</p>
                </div>
                <div class="servContent">
                    <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Custom UI & UX Design</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">Design tools: AdobeXD. Development tools: Html, Css Vue.js, and Jquery. Ask for references and more details.</p>
                    </div>
                    <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Web Development</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">PHP or HTML Core web development with latest development tools. Web development services and robust web projects.</p>
                    </div>
                    <div class="servInfolist">
                        <h3><i class="uil uil-angle-double-right"></i></h3>
                        <h3 class="servheading">Responsive Design</h3>
                    </div>
                    <div class="servInfodetails">
                        <p class="text"><i class="uil uil-corner-up-right-alt"></i></p>
                        <p class="text">Creates dynamic changes to the appearance of a website, depending on the screen size and orientation of the device.</p>
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
                <img class="showImage" src="./assets/stock/services/web-design-projects/My WebSite.png" alt="Abu Seada Website">
                <img src="./assets/stock/services/web-design-projects/web-mockup-V1-front.jpg" alt="Abu Seada Web Site v2">
                <img src="./assets/stock/services/web-design-projects/Curvilt-WebSite.png" alt="Curvilt WebSite">
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
                        <img src="./assets/stock/services/web-design-projects/My WebSite.png" alt="Abu Seada Website">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/web-design-projects/web-mockup-V1-front.jpg" alt="Abu Seada Web Site v2">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/web-design-projects/Curvilt-WebSite.png" alt="Curvilt WebSite">
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