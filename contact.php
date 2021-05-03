<!DOCTYPE html>
<?php error_reporting(0); ?>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "JRawlsk120";
$dbname = "forms";
?>

<!-- PHP Database Connection Starts-->
<?php $name = $email = $company = $comments = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO feedback (Name,Email,Company,Comments) VALUES (:name, :email, :company, :comments)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':comments', $comments);

        $name = clean($_POST["name"]);
        $email = clean($_POST["email"]);
        $company = clean($_POST["subject"]);
        $comments = clean($_POST["comments"]);
        $stmt->execute();

        echo "<div style='color:navy;'><h2>We Have Received Following Message From You:</h2>";
        echo "Your Name: " . $name;
        echo "<br>";
        echo "Your Email Address: " . $email;
        echo "<br>";
        echo "Your Company: " . $company;
        echo "<br>";
        echo "Your Comments: " . $comments;
        echo "<br>";
        echo "<h2>We will get back to you as soon as possible.</h2></div>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function clean($userInput)
{
    $userInput = trim($userInput);
    $userInput = stripslashes($userInput);
    $userInput = htmlspecialchars($userInput);
    return $userInput;
}

$conn = null;
?>

<!-- PHP Database Connection Ends-->

<html lang="en">
<!--   
    __   __ ____  ____ ____
    | \ | / ___| / ___/ ___|
    |  \| \___ \| |  | |
    | |\  |___| | |__| |___
    |_| \_|____/ \____\____| 
Newton Square Counseling Center
                Worcester, MA -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="www.newtonsquarecounselingcenter.com" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/touch/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Newton Square Counseling Center">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-title" content="Newton Square Counseling Center">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#ffffff">
    <!-- humans.txt-->
    <link type="text/plain" rel="author" href="http://domain/humans.txt" />
    <!-- Website Title -->
    <title>Newton Square Counseling Center</title>
    <!-- bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS Typography Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <!-- CSS Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/preloader.css" rel="stylesheet">
    <link href="css/typography.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/sliders.css" rel="stylesheet">
    <link href="/css/mediaqueries.css" rel="stylesheet">
    <!--End of CSS Styles -->
    <link rel="stylesheet" href="dist/style.css">
    <script src="dist/all.js"></script>
    <!--End of CSS Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-188601839-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-188601839-1');
    </script>
    <!-- Gobal Site Tag Ends-->

    <style>
        .bg-primary {
            background-image: url() !important;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="loader" id="preloader">
        <div class="wrap">
            <div class="loading">
                <div class="bounceball"></div>
                <div class="text">Loading...</div>
            </div>
        </div>
    </div>
    <!-- end of preloader -->
    <!-- end of preloader -->
    <!-- Navbar Starts-->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Top left Logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html">
            <div class="brand-title">Newton Square</div>
            <div class="brand-subtitle">Counseling Center</div>
        </a>

        <!-- Image Logo - Fallback graphic Logo
        <a class="navbar-brand logo-image" href="sitemap.html"><img src="svg\logo.svg" alt="alternative"></a> 
        -->

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <!-- end of mobile menu toggle button -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="team.html">TEAM</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="services.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="#"><span class="item-text">TREATMENT &
                                CONSULTATION</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">REHABILITATION</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">HEALTHCARE
                                COVERAGE</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">QUALIFICATIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">INSURANCE &
                                BILLING</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="resources.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">RESOURCES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="#"><span class="item-text">HIPAA
                                COMPLIENCE</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">ASSESABILITY</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">EMERGENCY
                                CONTACTS</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">COVID-19
                                RESOURCES</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="#"><span class="item-text">FAQs</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS
                                CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>

                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY
                                POLICY </span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="contact.html">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>Contact Us</h1>

                            <p class="p-large">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts
                                of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/email.svg" alt="A graphic image of a envolope.">
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <br><!-- contact form content -->
    <!-- contact form content -->
    <form name="contact" method="POST" data-netlify="true">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Contact Form</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                    <div class="contact-wrap w-100 p-md-5 p-4">
                                        <h3 class="mb-4">Get in touch</h3>
                                        <div id="form-message-warning" class="mb-4">
                                        </div>

                                        <div id="form-message-success" class="mb-4">

                                        </div>

                                        <!--Contact Form starts-->
                                        <form method="POST" action=method="POST" id="contactForm" class="contactForm" name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <!--Vistor name-->
                                                        <label class="label" for="name">Full Name</label>
                                                        <input id="name" class="form-control" type="text" name="name" placeholder="Full Name" required>
                                                        <p>
                                                            <?php if (isset($name_error)) echo $name_error; ?></p>
                                                    </div>
                                                </div>



                                                <!-- Vistor Emails-->
                                                <label class="label" for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                <p><?php if (isset($email_error)) echo $email_error; ?></p>

                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                            <!--Vistor Subject-->
                                            <label for="subject" id="subject" class="label" for="subject">Subject</label>
                                            <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <!--Vistor Message -->
                                            <label class="label" for="#">Message</label>

                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>

                                            <p><?php if (isset($message_error)) echo $message_error; ?></p>
                                            <input type="submit" name="submit" value="Send Message" class="btn btn-outline-dark">

                                            <div class="submitting"></div>
                                            <?php
                                            if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
                                                $to = 'metapixels@outlook.com'; // edit here
                                                $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                                                if (mail($to, $subject, $body)) {
                                                    echo '<p style="color: green">Message sent</p>';
                                                } else {
                                                    echo '<p>Error occurred, please try again later</p>';
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <div class=" col-md-12">
                                        <div class="form-group">



                                        </div>
                                    </div>
                                </div>
    </form>
    </div>
    </div>
    <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
        <div class="info-wrap bg-primary w-100 p-md-5 p-4">

            <h3>Contact Heading</h3>

            <p class="mb-4">Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eleifend mi in nulla posuere sollicitudin. </p>
            <p class="mb-4">We're open for any questions or additional information. Our Coordinator will process your information within 1-2 business day.</p>
            <div class="dbox w-100 d-flex align-items-start">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="text pl-3">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 Worchester MA 10016</p>
                </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="text pl-3">
                    <p><span></span> <a href="tel://1234567920">
                            (123)523-5598</a></p>
                </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3">
                    <p><span></span> <a href="mailto:info@yoursite.com">info@NSCC-Info.com</a>
                    </p>
                </div>

            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                </div>
                <div class="text pl-3">
                    <p><span></span> <a href="#">NSCC-Info.org</a></p>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </section>


    <br />
    <br />

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <!-- <a class="logo-image" href="index.html"><img src="svg\logo02.svg" alt="alternative"></a> -->
            <!-- NSCC Logo Image Alt-->
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>NSCC</h4>
                        <p> The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-4">

                </div>
                <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Additional Resources</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-circle"></i>
                                <div class="media-body">Further Information
                                    <a class="turquoise" href="contact.html">Contact Us</a>
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle"></i>
                                <div class="media-body">Read our <a class="turquoise" href="privacy-policy.html">Privacy
                                        Policy</a>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle"></i>
                                <div class="media-body">Site Navigation <a class="turquoise" href="sitemap.html">Site Map</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#">Newton Square Counseling Center,
                            2020.</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Google Analytics -->
    <script src="dist/all.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-188601839-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-188601839-1');
    </script>
    <!-- Gobal Site Tag Ends-->
    <!-- Google Analytics: Test Script -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-188601839-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End of Google Analytics-->
    <!-- End of Google Analytics-->
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js">
        import 'bootstrap';
        import 'bootstrap/js/dist/util';
        import 'bootstrap/js/dist/alert';
    </script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
    <script async src="/app/js/index.js"></script>
    <script src="js/main.js"></script>
    <!-- build:js scripts/main.min.js -->
    <script async src="gulpfile.js"></script>
    <!-- gulp build-->
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }).catch(function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        }
    </script>
    <!-- Serviceworker Script-->
    <!--End of Scripts -->
</body>

</html>