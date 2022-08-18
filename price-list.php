<?php 
    $pagename = 'Price List';
    $pagelink = 'price-list';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './assets/include/page-head.php' ?>
    <style>
        @media (max-width: 768px) {
            .imgThum {
                height: 35vh;
            }
            .servTxtinfo {
                top: 10%;
            }
            .img .imgOverlay {
                height: 80vh;
            }
            .servbars .servbar {
                width: 75%;
            }
            .servName {
                margin: 0 0 0 -30px;
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
                <img src="./assets/stock/price-list.jpg" alt="Web Design">
            </div>
        </section>
        <!-- ===================== End Services Img Thumbnail ===================== -->
        <!-- ===================== Start Social Price List ===================== -->
        <section class="price_list section">
            <div class="container">
                <div class="sectionHeader">
                    <h1 class="heading">
                        Social Media
                    </h1>
                    <div class="fileDownload">
                        <a href="./assets/stock/social-media-packages.pdf" target="_blank" download class="btn">Download The Package</a>
                    </div>
                </div>
                <div class="price_box">
                    <div class="priceCaed basic">
                        <div class="pCardheader">
                            <h3>Basic</h3>
                        </div>
                        <div class="pCardbpdy">
                            <ul class="pricelist">
                                <li>
                                    <p class="text">POST DESIGN</p>
                                    <h2 class="text2">4 <span>DESIGNS</span></h2>
                                </li>
                                <li>
                                    <p class="text">Facebook ADS</p>
                                    <h2 class="text2">2 <span>ADS</span></p>
                                </li>
                                <li>
                                    <p class="text">PAGE MANAGEMENT</p>
                                    <h2 class="text2">COMPLETE <span>MANAGEMENT</span></h2>
                                </li>
                            </ul>
                        </div>
                        <div class="pricetag">
                            <h2>1800 <span>LE</span></h2>
                            <div class="other">
                                <p class="text">100 <span>USD</span></p>
                                <p class="text">95 <span>ERU</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="priceCaed premuim">
                        <div class="pCardheader">
                            <h3>Premuim</h3>
                        </div>
                        <div class="pCardbpdy">
                            <ul class="pricelist">
                                <li>
                                    <p class="text">POST DESIGN</p>
                                    <h2 class="text2">12 <span>DESIGNS</span></h2>
                                </li>
                                <li>
                                    <p class="text">Facebook ADS</p>
                                    <h2 class="text2">6 <span>ADS</span></h2>
                                </li>
                                <li>
                                    <p class="text">PAGE MANAGEMENT</p>
                                    <h2 class="text2">COMPLETE <span>MANAGEMENT</span></h2>
                                </li>
                            </ul>
                        </div>
                        <div class="pricetag">
                            <h2>3500 <span>LE</span></h2>
                            <div class="other">
                                <p class="text">195 <span>USD</span></p>
                                <p class="text">185 <span>ERU</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="priceCaed standerd">
                        <div class="pCardheader">
                            <h3>Standerd</h3>
                        </div>
                        <div class="pCardbpdy">
                            <ul class="pricelist">
                                <li>
                                    <p class="text">POST DESIGN</p>
                                    <h2 class="text2">8 <span>DESIGNS</span></h2>
                                </li>
                                <li>
                                    <p class="text">Facebook ADS</p>
                                    <h2 class="text2">4 <span>ADS</span></p>
                                </li>
                                <li>
                                    <p class="text">PAGE MANAGEMENT</p>
                                    <h2 class="text2">COMPLETE <span>MANAGEMENT</span></h2>
                                </li>
                            </ul>
                        </div>
                        <div class="pricetag">
                            <h2>2600 <span>LE</span></h2>
                            <div class="other">
                                <p class="text">145 <span>USD</span></p>
                                <p class="text">135 <span>ERU</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================== End Social Price List ===================== -->

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