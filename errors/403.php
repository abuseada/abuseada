<?php 
    $pagename = 'Page Not Found';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pagename; ?></title>

    <!-- Scroll Reveal Library -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Swiper File -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css"/>

    <!-- logo In the browser Tab -->
    <link rel="shortcut icon" type="image/png" href="../assets/stock/Abu Sead Logo.png">
    
    <!-- Style files -->
    <link rel="stylesheet" href="../assets/css/page_style.css">
    <link rel="stylesheet" href="error.css">

    <!-- Icon Font Library -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="">
    <section class="error section">
        <div class="errorData">
            <div class="pageHead">
                <h1 class="hpageHead">Page Not Found</h1>
            </div>
            <div class="errorGif">
                <img src="../assets/stock/error 404.gif" alt="Error 404">
            </div>
            <div class="pageTitle">
                <p class="text">The requested URL Or Page was not found on this server.</p>
                <p class="text link"><a href="http://localhost/abuseada" class="link">Go Home <i class="uil uil-arrow-circle-right"></i></a></p>
            </div>
        </div>
    </section>
</body>
</html>