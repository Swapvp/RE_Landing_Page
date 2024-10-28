<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$name = $_REQUEST['fname'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];

$request = $_SERVER['REQUEST_METHOD'];

if ($request !== 'POST') {
    http_response_code(405);
    echo 'Method Not Allowed';
    echo '</br>';
    echo "<a href='index.php'>Go Back</a>";
    die;
}

if ($_REQUEST['mobile'] == '') {
    echo 'Please enter valid mobile number';
    echo '</br>';
    echo "<a href='index.php'>Go Back</a>";
    die;
}

if (strlen($_REQUEST['mobile']) !== 10) {
    echo 'Please enter valid mobile number';
    echo '</br>';
    echo "<a href='index.php'>Go Back</a>";
    die;
}



require_once 'send_leads.php';

$postData = new PostData();

if ((!isset($_COOKIE['formfilled'])) && isset($_REQUEST['mobile'])) {

    $mailsent = $postData->callback();
    setcookie('formfilled', 'yes');
} else {
    $mailsent = false;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />


<head>

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>The Altitude| Thank You</title>
    <link rel="icon" href="images/Favicon.webp" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    <link href="css/style.css" rel="stylesheet">


    <meta content="Thank You" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="http://" property="og:url" />

</head>

<body class="site com-sppagebuilder view-page no-layout no-task itemid-550 en-gb ltr  sticky-header layout-fluid">
    <!-- Google Tag Manager (noscript) -->
   
    <!-- End Google Tag Manager (noscript) -->
    <div class="body-innerwrapper">

        <header class="normal-header">
            <div class="">
                <div class="col-md-1">
                    <div class="logo-wrapper">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/VDV-The-Altitude-Tardeo-Logo.webp" class="img-responsive logo-color">
                        </a>
                    </div>
                </div>

                <div class="col-md-10 ">
                    <div class="nav-wrapper">
                        <nav class="nav-links">
                            <a href="index.php">Overview</a>
                            <a href="index.php">Configurations</a>
                            <a href="index.php">amenities</a>
                            <a href="index.php">The Altitude</a>
                            <a href="index.php"> Plans</a>
                            <a href="index.php">Connectivity</a>
                            <a href="index.php">Videos</a>
                            <a href="index.php">Contact</a>


                          
                        </nav>
                    </div>


                </div>
                <div class="col-md-1 ">
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="burger-menu hide-in-desktop">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

            </div>
        </header>


        <section id="sp-main-body">
            <div class="">
                <div id="sp-component" class="col-sm-12 col-md-12">
                    <div class="sppb-row-container">


                        <section style="min-height: 328px;">
                            <div>
                                <div class="wrap" style="margin:100px auto;padding:15px;height:auto !important;">


                                    <?php
                                if (!$mailsent) {
                                    ?>

                                    <span class="msgicon" aria-hidden="true"><i class="fa fa-times"
                                            aria-hidden="true"></i></span>
                                    <h2 class="oops">Oops!</h2>
                                    <h3 class="oops-subtitle" style="text-align:center;">
                                        Sorry for the inconvenience! Mail could not be sent.<br />
                                        Please try again after some time.
                                    </h3>
                                    <a href="index.php" style="text-decoration: none;">
                                        <h2 class="go-home"><span class="" aria-hidden="true"><i
                                                    class="fa fa-arrow-left" aria-hidden="true"></i></span> GO
                                            BACK TO HOME</h2>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <span class="msgicon" aria-hidden="true"><i class="fa fa-check"
                                            aria-hidden="true"></i></span>
                                    <h2 class="oops">You're all set!</h2>
                                    <h3 class="oops-greet" style="text-align:center;">Greetings from The Altitide</h3>
                                    <h3 class="oops-subtitle" style="text-align:center;">
                                        Thank you for expressing interest on our website.<br />
                                        Our expert will get in touch with you shortly.
                                    </h3>
                                    <a href="index.php" style="text-decoration: none;">
                                        <h2 class="go-home"><span class="" aria-hidden="true"><i
                                                    class="fa fa-arrow-left" aria-hidden="true"></i></span> GO
                                            BACK TO HOME</h2>
                                    </a>

                                    <?php
                                }
                                ?>


                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </section>
        <br clear="all" />

        <footer>
            <div class="footer">
                <div class="wrapper-1400">
                 
                    <div class="adress">
                        <p>
                            SITE ADDRESS : THE ALTITUDE TARDEO
                        </p>

                        <p>MahaRERA Registration No. :<span class="org">RERA A520000195403</span>
                           
                        </p>

                        <p>
                            COPYRIGHT © 2024 ALL RIGHTS RESERVED.
                        </p>
                    </div>
                </div>
              
               
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/popout.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>

    <script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 75) {
            $(".normal-header").addClass("fixHeader");
        } else {
            $(".normal-header").removeClass("fixHeader");
        }
    });
    </script>


</body>


</html>