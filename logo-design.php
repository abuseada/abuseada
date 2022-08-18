<?php 
    $pagename = 'Logo Design';
    $pagelink = 'logo-design';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './assets/include/page-head.php' ?>
    <style>
        .servQout {
            font-size: 2rem;
            color: var(--heading-color);
        }
    </style>
</head>
<body>
    <!-- ============== Header ============== -->
    <?php include'./assets/include/pages-header.php'; ?>

    <!-- ============== LOADING PAGE ============== -->
    <div id="bgLoading">
        <div class="loading-container">
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
    <div class="overlay"></div>

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
                <div class="servLinks soMedlinks">
                    <p class="text logo">Abu Seada</p>
                    <p class="text">|</p>
                    <a href="http://localhost/abuseada/" class="text servlink">Home</a>
                    <p class="text">|</p>
                    <a href="<?php echo $pagelink ?>" class="text servlink"><?php echo $pagename; ?></a>
                </div>
            </div>
            <div class="img">
                <div class="imgOverlay"></div>
                <img src="./assets/stock/services/logo-design.jpg" alt="Graphic Design">
            </div>
        </section>
        <!-- ===================== End Services Img Thumbnail ===================== -->
        <!-- ===================== Start Services Info ===================== -->
        <section class="serv_info section">
            <div class="container">
                <div class="servtittle">
                    <h2 class="servhead somedTitle">Business <?php echo $pagename; ?> Services</h2>
                    <p class="servtext text">A logo prepared with the right theoretical rules expresses your brand in the best way without forcing you in any environment and material.</p>
                    <p class="servText text">Amaze people with your designs. Contact us now.</p>
                </div>
                <div class="servContent">
                    <div class="servInfo">
                        <h1 class="servQout">
                            Why Choose <?php echo $pagename; ?> Services From Abu Seada?
                        </h1>
                        <p class="text">Think about some of the iconic brands you remember – the moment you see their logo, the entire brand or company name as well as their history comes into mind. This is how powerful a logo can be. Our experienced logo designers know how to make the perfect mix of symbols, calligraphy, design art and other aesthetic graphical elements to create such an effective logo. The logo evokes emotions and sensations related to your brand and helps build recall to ultimately grow your customer base.</p>

                        <p class="text secText">With over 5 years of experience in the field and some of the best creative professionals within the industry, we can deliver high quality and unique business logo design services for all your needs. As a trusted logo design company, we have served over thousands of clients worldwide till date.</p>
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
                <img class="showImage" src="./assets/stock/services/logo-design-projects/Logo-01.png" alt="IL GIGANTE Logo">
                <img src="./assets/stock/services/logo-design-projects/Logo-02.png" alt="Tala Caffe Logo">
                <img src="./assets/stock/services/logo-design-projects/Logo-04.png" alt="Curvelt Logo">
                <img src="./assets/stock/services/logo-design-projects/Logo-07.png" alt="Fatma Mokhtar Logo">
                <img src="./assets/stock/services/logo-design-projects/Logo-08.png" alt="Traning Group Logo">
                <img src="./assets/stock/services/logo-design-projects/Logo-09.png" alt="Horus Logo">
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
                        <img src="./assets/stock/services/logo-design-projects/Logo-01.png" alt="IL GIGANTE Logo">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/logo-design-projects/Logo-02.png" alt="Tala Caffe Logo">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/logo-design-projects/Logo-04.png" alt="Curvelt Logo">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/logo-design-projects/Logo-07.png" alt="Fatma Mokhtar Logo">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/logo-design-projects/Logo-08.png" alt="Traning Group Logo">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/logo-design-projects/Logo-09.png" alt="Horus Logo">
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