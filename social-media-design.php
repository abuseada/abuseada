<?php 
    $pagename = 'Social Media Design';
    $pagelink = 'social-media-design';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './assets/include/page-head.php' ?>
    <style>
        .somedTitle {
            font-size: 2rem;
            color: var(--heading-color);
            margin-left: 20px;
        }

        .somedTitle::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 60%;
            background-color: var(--main-color-2);
            margin-right: 25px;
        }

        .servQout {
            font-size: 2rem;
            color: var(--heading-color);
        }
        
        @media(max-width: 768px) {
            .soMedlinks {
                width: 85vw;
            }
        }
    </style>
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
                <img src="./assets/stock/services/graphic-design.jpg" alt="Graphic Design">
            </div>
        </section>
        <!-- ===================== End Services Img Thumbnail ===================== -->
        <!-- ===================== Start Services Info ===================== -->
        <section class="serv_info section">
            <div class="container">
                <div class="servtittle">
                    <h2 class="servhead somedTitle">Get Noticed On <?php echo $pagename; ?> With The Help Of Our Designs And Graphics</h2>
                    <p class="servtext text">Our experienced specialists will work with you to create stunning graphic designs that you can use for your social media profiles.</p>
                    <p class="servText text">Amaze people with your designs. Contact us now.</p>
                </div>
                <div class="servContent">
                    <div class="servInfo">
                        <h1 class="servQout">
                            <?php echo $pagename; ?> Services
                        </h1>
                        <div class="servTitle">
                            <p class="text">Social media is more popular than ever and we will help your business to get the most out of your online presence. You're a busy businessman, owner or a new to business while you know social media is important, you just don't have the time to put in. Branded social media images will help your business through different things like, increase website traffic, increase visibility, and increase that "Awesome" factor necessary to grow a business.</p>
                        </div>
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
                <img class="showImage" src="./assets/stock/services/social-media-projects/25 إبريل عيد تحرير سيناء copy.png" alt="25 إبريل عيد تحرير سيناء">
                <img src="./assets/stock/services/social-media-projects/5 أسباب مهمين.png" alt="5 أسباب مهمين">
                <img src="./assets/stock/services/social-media-projects/Snapy-3.jpg" alt="Snapy-3">
                <img src="./assets/stock/services/social-media-projects/العاشر من رمضان.png" alt="العاشر من رمضان">
                <img src="./assets/stock/services/social-media-projects/سنة الهجرية الجديدة كريم السادات.png" alt="سنة الهجرية الجديدة كريم السادات">
                <img src="./assets/stock/services/social-media-projects/عام-هجري-سعيد.jpg" alt="عام-هجري-سعيد">
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
                        <img src="./assets/stock/services/social-media-projects/25 إبريل عيد تحرير سيناء copy.png" alt="25 إبريل عيد تحرير سيناء">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/social-media-projects/5 أسباب مهمين.png" alt="5 أسباب مهمين">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/social-media-projects/Snapy-3.jpg" alt="Snapy-3">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/social-media-projects/العاشر من رمضان.png" alt="العاشر من رمضان">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/social-media-projects/سنة الهجرية الجديدة كريم السادات.png" alt="سنة الهجرية الجديدة كريم السادات">
                        <div class="prt-overlay">
                            <span class="prt-icon zoom-icon" style="--i: 0s">
                                <i class="uil uil-search-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mix prt-card">
                    <div class="prt-image">
                        <img src="./assets/stock/services/social-media-projects/عام-هجري-سعيد.jpg" alt="عام-هجري-سعيد">
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