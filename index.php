<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="" />
    <title>ANNA MONICA</title>
    <link href="css/bootstrap.min.css" rel=stylesheet>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="modules/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="modules/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="modules/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="preload" href="CenturyGothic-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link href="modules/swiper/swiper.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


     <!-- FAVICON FILES -->
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/favicon/fav.png" rel="apple-touch-icon">
  <link href="images/favicon/fav.png" rel="shortcut icon">

</head>

<body>


<?php
// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get form data
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $phone = $_POST["userPhone"];
    $subject = $_POST["userSubject"];
    $message = $_POST["userMessage"];

    // Validate form data (you can add your own validation logic here)

    // Set up the recipient email address
    $recipient = "beautyshack111@gmail.com";

    // Set up the email headers
    $headers = "From: annamonicabeautyshack.com <$recipient>\r\n";
    $headers .= "Reply-To: $recipient\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email body
    $body = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th>Contact Number</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$subject</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
        </body>
      </html>
    ";

    // Attempt to send the email
    if (mail($recipient, "New Contact Form Submission", $body, $headers)) {
        echo '<script>alert("Thanks for your inquiry. We will contact you shortly.");</script>';
    } else {
        echo '<script>alert("Email sending failed, Try again");</script>';
    }
}
?>






    <div id="fredia-page-loading" class="fredia-pageloading">
        <div class="loader-container">
            <div class="loader">
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="fredia-header-navbar">
            <div class="fredia-navbar-container">
                <div class="fredia-navigation-wrap fredia-start-header start-style">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-expand-md navbar-light">
                                    <!-- Logo -->
                                    <a class="navbar-brand" href="index">
                                        <img id="myImage-logo" src="images/logo-white.png" alt="">
                                    </a>
                                    <!-- Menu -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation"> <span
                                            class="navbar-toggler-icon"></span> </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active"> <a class="nav-link"
                                                    href="index">Home</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a id="about-nav"
                                                    class="nav-link" href="index#about">About</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a
                                                    class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    href="">Services</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="makeup">Makeup</a>
                                                    <a class="dropdown-item" href="hairtreatment">Hair
                                                        treatments</a>
                                                    <a class="dropdown-item" href="Skintreatments">Skin
                                                        treatments</a>
                                                </div>

                                            </li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link"
                                                    href="gallery">Gallery</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                 <a id="contact-a-nav" class="nav-link" href="index#contact">Contact</a>
                                                 </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Slider -->
    <div class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="images/banner-01.jpg">
                        <div class="container">
                            <div class="row justify-content-left">
                                <div class="col-md-7">
                                    <div class="caption left">
                                        <!-- <h1>Discover your unique beauty with our transformative makeup and beauty
                                            services</h1> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="images/banner-02.jpg"></div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="images/banner-03.jpg"></div>
                </div>
            </div>
            <!-- slider setting -->

            <div class="swiper-pagination top botm"></div>

        </div>
    </div>


    <!-- About -->
    <div class="section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="abt">Hi, I'm Annamonica</h2>
                    <p>With a career spanning over 16 years, we are a team of highly skilled and passionate makeup
                        artists. We are dedicated to providing exceptional services for bridal makeup, celebrity makeup,
                        and more.
                    </p>
                    <p>Since 2008, we have been committed to enhancing the natural beauty of our clients. We understand
                        the significance of your special day, whether it's your wedding or a high-profile event. We work
                        closely with you to create a flawless and personalized look that perfectly reflects your style
                        and enhances your features. This leaves you feeling confident and radiant.
                    </p>
                    <p>Our expertise extends beyond bridal makeup. We also specialize in celebrity makeup and editorial
                        shoots, ensuring our clients look their finest for any occasion. With a keen eye for detail and
                        a deep understanding of different styles, we tailor our makeup artistry to suit your unique
                        personality and the specific requirements of each event.
                    </p>
                    <p>At our beauty salon, we offer a wide range of luxurious treatments designed to pamper you from
                        head to toe. From rejuvenating facials to expert hair styling and flawless manicures, our
                        experienced team is dedicated to providing personalized services that enhance your natural
                        beauty. We also help you relax and unwind.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="fredia-about-img animate-box" data-animate-effect="fadeInUp">
                        <div class="img"> <img src="images/about.jpg" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- General Services -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="abt">Our services</h2>
                </div>
            </div>
            <div class="row services">
                <div class="col-md-4 mb-15">
                    <a href="makeup">
                        <div class="item animate-box" data-animate-effect="fadeInUp">
                            <div class="position-re o-hidden"> <img src="images/makeup.jpg" alt=""> </div>
                            <div class="con">
                                <a href="makeup">
                                    <button class="cta">
                                        <span class="hover-underline-animation"> Makeup</span>
                                        <svg viewBox="0 0 46 16" height="10" width="30"
                                            xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                                            <path transform="translate(30)"
                                                d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                                data-name="Path 10" id="Path_10"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-15">
                    <a href="hairtreatment">
                        <div class="item animate-box" data-animate-effect="fadeInUp">
                            <div class="position-re o-hidden"> <img src="images/hair.jpg" alt=""> </div>
                            <div class="con">
                                <a href="hairtreatment">
                                    <button class="cta">
                                        <span class="hover-underline-animation">Hair treatments</span>
                                        <svg viewBox="0 0 46 16" height="10" width="30"
                                            xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                                            <path transform="translate(30)"
                                                d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                                data-name="Path 10" id="Path_10"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-15">
                    <a href="Skintreatments">
                        <div class="item animate-box" data-animate-effect="fadeInUp">
                            <div class="position-re o-hidden"> <img src="images/skina.jpg" alt=""> </div>
                            <div class="con">
                                <a href="Skintreatments">
                                    <button class="cta">
                                        <span class="hover-underline-animation">Skin treatments</span>
                                        <svg viewBox="0 0 46 16" height="10" width="30"
                                            xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                                            <path transform="translate(30)"
                                                d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                                data-name="Path 10" id="Path_10"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Project -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="abt">Featured Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/11-01.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/11-01.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/14-01.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/14-01.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/19-01.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/19-01.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/2.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/2.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/6-01.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/6-01.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                            <a href="images/thumbanail/PG-01.jpg" title="Title" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/thumbanail/PG-01.jpg"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                </div>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testiominals -->
    <div class="testimonials section-padding bg-img bg-fixed" data-background="images/banner2.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"> <span>Kind words...</span>
                    <h1>What Client Say</h1>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12">
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"Anna Monica and her team were phenomenal for my sister-in-law's wedding. The transformation
                            was stunning, and their work exceeded all expectations. Highly recommend!"</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Hiba</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"Beauty Shack beauty parlour deserves a five-star rating for their excellent service. Anna
                            Monica mam and her team are truly amazing and friendly. The ambience is soothing, and the
                            overall experience was excellent."</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Neshma Abdurahman </h6>
                            </div>
                        </div>
                    </div>
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"Beauty Shack made my wedding day unforgettable. Anna Monica's makeup was breathtaking. Thank
                            you, Anna, for your exceptional artistry."</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Naja</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"I confidently chose Beauty Shack for my engagement makeup and I was beyond thrilled with the
                            outcome. Anna Aunty's skills are exceptional, and her warm personality improved the
                            experience. I highly recommend Beauty Shack for its fantastic work.."</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Krishna Priya </h6>
                            </div>
                        </div>
                    </div>
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"Anna Monica and her team were phenomenal for my sister-in-law's wedding. The transformation
                            was stunning, and their work exceeded all expectations. Highly recommend!
                            "</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Aysha Hiba</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item-box"> <span class="quote">
                            <img src="images/quot.png" alt="">
                        </span>
                        <p>"I confidently chose Beauty Shack for my engagement makeup and I was beyond thrilled with the
                            outcome. Anna Aunty's skills are exceptional, and her warm personality improved the
                            experience. I highly recommend Beauty Shack for its fantastic work.."</p>
                        <div class="info">
                            <div class="cont">
                                <h6>Nena Fathima</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="section-padding" id="contact">
        <div class="container">
            <h3 class="h3contact">Get in touch</h3>
            <div class="row">

                <div class="col-md-6 appointment">
                    <h3>Quick appointment</h3>
                    <div>
                        <p>Getting married or interested in getting glam? <br> Find out whether I'm available, enquire
                            today!
                        </p>
                        <p><b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                                    </path>
                                </svg></b><a href="tel:+91 95398 55557"> +91 95398 55557</a></p>
                        <p><b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M2 5.5V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5ZM0 10H5V12H0V10ZM0 15H8V17H0V15Z">
                                    </path>
                                </svg></b> <a href="emailto:beautyshack111@gmail.com">beautyshack111@gmail.com</a></p>
                        <p><b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                                    </path>
                                </svg></b> <a target="_blank" href="https://goo.gl/maps/9rwXQngeRVaaGGmU9">11th Cross Road, Near Alibaba Restaurant, MIG Housing Society, <br>
                                Panampilly Nagar, Kochi, Kerala-682036</a></p>
                        <p><b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                                    </path>
                                </svg></b> Mon-Sat: 9am - 7pm, Sunday: Bridal Work Only</p>
                        <p><b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z">
                                    </path>
                                </svg></b> Service Available All Over The World</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <h3>Contact us</h3>
                    <form method="post" class="contact__form">
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="userName" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="userEmail" type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="userPhone" type="text" placeholder="Number" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="userSubject" type="text" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea  name="userMessage" id="message" cols="30" rows="4" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="send" value="SEND" class="button-a"> SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-section">
                <div class="row cnt-a">
                    <div class="col-md-4">
                        <h6>Address</h6>
                        <p>11th Cross Rd, near Alibaba restaurant,
                            <br> MIG Housing Society,
                            Panampilly Nagar,<br>
                            Kochi, Kerala 682036

                        </p>

                    </div>
                    <div class="col-md-4">
                        <h6>Contact</h6>
                        <p>
                            <a href="tel:+91 9539855557">+91 95398 55557</a>
                            <br><a href="mailto:beautyshack111@gmail.com"> beautyshack111@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h6>Social links</h6>
                        <p>
                            <a href="https://www.instagram.com/annamonica.makeupartist/?hl=en">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"
                                        fill="rgba(204,204,204,1)"></path>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/annamonica.makeupartist/">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"
                                        fill="rgba(204,204,204,1)"></path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z"
                                        fill="rgba(204,204,204,1)"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>© 2023.Powered by <a href="https://dostudio.co.in/">DO Studio</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- toTop -->
    <a href="tel:+9388808454" class="totop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path
                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"
                fill="rgba(255,255,255,1)"></path>
        </svg>
    </a>
    <!-- jQuery -->
    <script src="js/plugins/jquery-3.5.1.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="js/plugins/jquery.isotope.v3.0.2.js"></script>
    <script src="js/plugins/modernizr-2.6.2.min.js"></script>
    <script src="js/plugins/jquery.waypoints.min.js"></script>
    <script src="modules/owl-carousel/owl.carousel.min.js"></script>
    <script src="modules/swiper/swiper.min.js"></script>
    <script src="modules/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="modules/masonry/masonry.pkgd.min.js"></script>
    <script src="js/script.js"></script>
</body>



</html>