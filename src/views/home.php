<?php
require_once('./src/bootstrap.php');
use App\Repositories\PackageRepository;
$repo = new PackageRepository();
$all_data = $repo->all();

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Brolion Airway | Brolion Tour Package Booking | Brolion Holidays Booking</title>
    <meta name="description"
        content="Book cheapest Holidays packages from Brolion Tourism Pvt Ltd, and Get 30% Each Booking your Tour Packages ">
    <meta name="keywords"
        content="Holidays Packages, Tour Package Booking, Cheapest Holidays Packages Booking, Book your Holidays Trips, ">
    <meta name="robots" content="index, follow, noodp">
    <meta name="page-topic" content=" BrolionTourism Pvt Ltd">
    <meta name="Copyright" content="BrolionTourism">
    <link rel="canonical" href="http://www.BrolionTourism.com">
    <meta name="googlebot" content="index, follow">
    <meta name="YahooSeeker" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta name="allow-search" content="yes">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="favicon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/slick.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/slick-theme.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="css/slicknav.css">

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K6R385M4');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6R385M4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section id="header">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        <div class="logo">
                            <img src="images/logo.png" alt="" class="ing-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <!--<a href="#" class="btn deal" data-toggle="modal" data-target="#exampleModal-1">Last Minute-->
                            <!--    Deal</a>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="head-cnt">
                            <ul>
                                </a>
                                <li>
                                    <i>
                                        <img src="images/call-ico.png" alt="">
                                    </i>
                                    <a href="tel:+917566000147">+91-7566000147</a>
                                </li>
                                <li>
                                    <i>
                                        <img src="images/msg-ico.png" alt="">
                                    </i>
                                    <a href="mailto:booknow@broliontourism.com
">booknow@broliontourism.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id="banner">
        <div class="banner-warp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="banner-text">
                            <img src="images/sale-ico.png" alt="" class="img-fluid upto">
                            <h1>Famous Holiday Packages</h1>
                            <h4>Lowest Price Guaranteed</h4>
                            <h3 style="color:#fff;">Get Multiple Itineraries & Personalised Suggestions</h3>
                            <h3 style="color:#fff;">from our Experts</h3>
                            <ul class="destination">
                                <?php foreach ($all_data as $dest) { ?>
                                    <li><?php echo $dest['destination']['name'] ?></li>

                                <?php } ?>


                            </ul>
                            <ul class="trusted">
                                <li>
                                    <i class="fa fa-check"></i> Best Priced Packages within your budget
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Friendly Customer Support
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> 100% Money Safe Guarantee
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Secure & Safe Online Transactions
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="free-quotes">
                            <div class="get-free" id="Get-Free-Quote">Get Free Quote</div>
                            <div class="get-free-qoute">
                                <form method="POST" name="indexform" action="/packages/contact">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="*Name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="*Mobile No."
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="date" class="form-control"
                                            placeholder="Travel Date (DD/MM/YY)" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="person" id="person" required>
                                            <option value="">No. of Person</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>10+</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="package" id="package" required>
                                            <option value="">Select Package</option>
                                            <?php foreach ($all_data as $dest) {

                                                foreach ($dest['packages'] as $pack) { ?>
                                                    <option value="<?php echo $pack['title'] ?>"><?php echo $pack['title'] ?>
                                                    </option>


                                                <?php } ?>



                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-enq " name="submit"
                                            value="Send request">Send Enquiry</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-1.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>10+ Years
                                            <br>
                                            of Travel Experience
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-2.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>2,50,000+
                                            <br>
                                            Counting Happy Customers
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-3.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>50+team
                                            <br>
                                            Staff & Ground experts
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-4.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>24x7
                                            <br>
                                            Online Support
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-5.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>Ministry Of
                                            <br>
                                            Tourism
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt-cmpny">
                                        <figure>
                                            <img src="images/icon-6.png" alt="" class="img-fluid">
                                        </figure>
                                        <h6>Special Discounts
                                            <br>
                                            for Groups
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="top-packages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="h1-global">Let us help you to plan your perfect Holiday</h1>
                </div>
            </div>
            <div class="row">
                <?php foreach ($all_data as $dest) {
                    foreach ($dest['packages'] as $pack) {
                        ?>
                        <div class="col-md-4">
                            <div class="packages">
                                <figure>
                                    <div class="overlay"></div>
                                    <img src="images/packages/<?php echo $pack['image'] ?>" alt="" class="img-fluid">
                                    <div class="tag">30% OFF</div>
                                    <div class="budget">
                                        <img src="images/popular.png" alt="" class="img-fluid">
                                    </div>
                                    <!-- <div class="all-free">
                                        <img src="images/all-free.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="special-honymoon">
                                        <p>
                                            wine bottle, bed of roses + a candle light
                                            dinner with honeymoon cake
                                        </p>
                                    </div> -->
                                </figure>
                                <h2><?php echo $pack['title'] ?></h2>
                                <h3> <?php echo $pack['duration'] ?>

                                </h3>
                                <ul class="itnry">
                                    <li class="active">
                                        <figure>
                                            <img src="images/flight-icon.png" alt="" class="img-fluid">
                                        </figure>
                                        <p>Flight</p>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/hotel-icon.png" alt="" class="img-fluid">
                                        </figure>
                                        <p>Hotels</p>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/Sightseeing-icon.png" alt="" class="img-fluid">
                                        </figure>
                                        <p>Sightseeing</p>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/meals-icon.png" alt="" class="img-fluid">
                                        </figure>
                                        <p>Meals</p>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/transfer-icon.png" alt="" class="img-fluid">
                                        </figure>
                                        <p>Transfers</p>
                                    </li>
                                </ul>
                                <div class="inclusions">
                                    <h5>Highlights:</h5>
                                    <ul class="pkg-incusion">
                                        <?php foreach ($pack['highlights'] as $high) { ?>

                                            <li><?php echo $high ?></li>

                                        <?php } ?>


                                    </ul>
                                    <div class="collapse" id="<?php echo $pack['slug'] ?>">
                                        <h5 class="pt-2">Transportation:</h5>
                                        <ul class="pkg-incusion">
                                            <?php foreach ($pack['transportation'] as $trans) { ?>

                                                <li><?php echo $trans ?></li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <a class="read-collpse" data-toggle="collapse" href="#<?php echo $pack['slug'] ?>"
                                        role="button" aria-expanded="false" aria-controls="<?php echo $pack['slug'] ?>">
                                        <span>Read More</span>
                                        <i>Close</i>
                                    </a>
                                </div>
                                <div class="price-tag">
                                    <div class="price">
                                        <small>
                                            <i class="fa fa-rupee"></i> <?php echo number_format(round($pack['price'] * 1.3)) ?>
                                        </small>
                                        <i class="fa fa-rupee"></i> <?php echo number_format(round($pack['price'])) ?> Onwards
                                    </div>
                                    <div class="btn-detail">
                                        <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                            Free Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php }

                } ?>


            </div>
            <hr>

        </div>
    </section>
    <section id="confused">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="h1-global white-color">Still
                        <span class="white-color">Confused ?</span>
                    </h1>
                    <a href="#" class="btn requirement" data-toggle="modal" data-target="#exampleModal">Click & Let Us
                        Know Your Requirement</a>
                </div>
            </div>
        </div>
    </section>
    <section id="book-online">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="h1-global">
                        Customize & Book Amazing Holiday Packages with
                        <br>
                        <span>BrolionTourism.com</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="why-book">
                        <i>
                            <img src="images/check.jpg" alt="" class="img-fluid">
                        </i>
                        <h4>SAVE TIME</h4>
                        <p>No need to surf Multiple Sites for packages, quotes, travel plans</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why-book">
                        <i>
                            <img src="images/check.jpg" alt="" class="img-fluid">
                        </i>
                        <h4>MULTIPLE OPTIONS</h4>
                        <p>Get Multiple Itineraries & Personalised Suggestions from our Travel agents</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why-book">
                        <i>
                            <img src="images/check.jpg" alt="" class="img-fluid">
                        </i>
                        <h4>SAVE MONEY</h4>
                        <p>Compare, Negotiate & Choose the best from multiple options</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why-book bdr-none">
                        <i>
                            <img src="images/check.jpg" alt="" class="img-fluid">
                        </i>
                        <h4>TRUSTED NETWORK</h4>
                        <p>Of 500+ Hotels Reliable & Authentic Travel Guides in Himachal</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn requirement">Call Now for
                        customized packages</a>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="ftr-link">
                        <?php foreach ($all_data as $dest) { ?>
                            <li><?php echo $dest['destination']['name'] ?></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 hidden-md">
                    <h4 class="ftr-h4">Our Guarantee</h4>
                    <figure>
                        <img src="images/trust.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-3">
                    <!--<h4 class="ftr-h4">Approved By</h4>
        <div class="approved"> <img src="images/logos.png" alt="" class="img-fluid"> </div>--->
                </div>
                <div class="col-md-5">
                    <h4 class="ftr-h4">We Accept All Major Credit And Debit Cards</h4>
                    <div class="approved">
                        <img src="images/payment.png" alt="" class="img-fluid">
                        <h5 class="ftr-h5">Customer Support :</h5>
                        <ul class="ftr-cnt">
                            <li>
                                <i>
                                    <img src="images/call-ico.png" alt="" class="img-fluid">
                                </i>
                                <a href="tel: +91-7566000147">+91-7566000147</a>
                            </li>
                            <li>
                                <i>
                                    <img src="images/msg-ico.png" alt="" class="img-fluid">
                                </i>
                                <a href="mailto:booknow@broliontourism.com
">booknow@broliontourism.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-footer">
                <div class="row text-center text-md-left pb-4 pt-4">
                    <hr class="w-100 clearfix d-md-none hidden-xs-down">
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto pl">
                        <h6 class="title font-bold">Find Us</h6>
                        <div class="media">
                            <div class="media-body">
                                <p>www.broliontourism.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto pl">
                        <h6 class="title font-bold">Call us</h6>
                        <div class="media">
                            <div class="media-body">
                                <p>+91-7566000147</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto pl">
                        <h6 class="title font-bold">Email</h6>
                        <div class="media">
                            <div class="media-body">
                                <p>
                                    <a href="mailto:booknow@broliontourism.com
">booknow@broliontourism.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="copywrite">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>@Copyright
                        <?php echo date('Y') ?>, Brolion Tourism All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="section_mobile">
        <div class="inner_mobile">
            <div class="container">
                <div class="row">
                    <!-- Call Button -->
                    <div class="col-md-3 p-0 col-3">
                        <div class="_col_m">
                            <a class="_btn_bm" href="tel:917566000147">
                                <i class="fa fa-phone fa-1x"></i>
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp Button -->
                    <div class="col-md-3 p-0 col-3">
                        <div class="_col_m">
                            <a class="_btn_bm" href="https://wa.me/917566000147" target="_blank">
                                <i class="fa fa-whatsapp fa-1x"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Send Enquiry Button -->
                    <div class="col-md-6 p-0 col-6">
                        <div class="_col_bm">
                            <button type="button" class="_btn_bm" data-toggle="modal" data-target="#exampleModal">
                                SEND ENQUIRY
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------Modal----------------------->
    <div class="modal fade coi-pop" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get Free Quote</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" name="indexform" action="/packages/contact">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="*Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="*Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="*Mobile No." required>
                        </div>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" placeholder="Travel Date (DD/MM/YY)"
                                required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="person" id="person" required>
                                <option value="">No. of Person</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>10+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="package" id="package" required>
                                <option value="">Select Package</option>
                                <?php foreach ($all_data as $dest) {

                                    foreach ($dest['packages'] as $pack) { ?>
                                <option value="<?php echo $pack['title'] ?>">
                                    <?php echo $pack['title'] ?>
                                </option>


                                <?php } ?>



                                <?php } ?>

                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-enq " name="submit" value="Send request">Send
                                Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------Modal----------------------->
    <div class="modal fade coi-pop" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Last Minute Deal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" name="indexform" action="/packages/contact">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="*Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="*Mobile No." required>
                        </div>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" placeholder="Travel Date (DD/MM/YY)"
                                required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="person" id="person">
                                <option value="">No. of Person</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>10+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="package" id="package">
                                <option value="">Select Package</option>
                                <?php foreach ($all_data as $dest) {
                                    foreach ($dest['packages'] as $pack) { ?>
                                <option value="<?php echo $pack['title'] ?>">
                                    <?php echo $pack['title'] ?>
                                </option>
                                <?php } ?>
                                <?php } ?>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-enq " name="submit" value="Send request">Send
                            Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu').slicknav();
        });
    </script>
    <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            $('body').addClass('fixed')
        })
    </script>
    <script>
        $('#exampleModal-1').on('shown.bs.modal', function () {
            $('body').addClass('fixed')
        })
    </script>
    <script>
        jQuery('.testimonials').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000000,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                    }
                }
            ]
        });
    </script>
    <script>
        function validateForm() {


            var digits = "0123456789";
            // non-digit characters which are allowed in phone numbers
            var phoneNumberDelimiters = "()- ";
            // characters which are allowed in international phone numbers
            // (a leading + is OK)
            var validWorldPhoneChars = phoneNumberDelimiters + "+";
            // Minimum no of digits in an international phone no.
            var minDigitsInIPhoneNumber = 10;

            function isInteger(s) {
                var i;
                for (i = 0; i < s.length; i++) {
                    // Check that current character is number.
                    var c = s.charAt(i);
                    if (((c < "0") || (c > "9"))) return false;
                }
                // All characters are numbers.
                return true;
            }
            function trim(s) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not a whitespace, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (c != " ") returnString += c;
                }
                return returnString;
            }
            function stripCharsInBag(s, bag) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not in bag, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (bag.indexOf(c) == -1) returnString += c;
                }
                return returnString;
            }

            function checkInternationalPhone(strPhone) {
                var bracket = 3
                strPhone = trim(strPhone)
                if (strPhone.indexOf("+") > 1) return false
                if (strPhone.indexOf("-") != -1) bracket = bracket + 1
                if (strPhone.indexOf("(") != -1 && strPhone.indexOf("(") > bracket) return false
                var brchr = strPhone.indexOf("(")
                if (strPhone.indexOf("(") != -1 && strPhone.charAt(brchr + 2) != ")") return false
                if (strPhone.indexOf("(") == -1 && strPhone.indexOf(")") != -1) return false
                s = stripCharsInBag(strPhone, validWorldPhoneChars);
                return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
            }

            var Name = document.myForm.name

            if ((Name.value == null) || (Name.value == "")) {
                alert("Please Enter your Name")
                Name.focus()
                return false
            }


            var x = document.forms["myForm"]["email"].value;
            if (x == "") {
                alert("Email must be filled out");
                document.myForm.email.focus();
                return false;
            }
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                document.myForm.email.focus();
                return false;
            }




            var Phone = document.myForm.phone

            if ((Phone.value == null) || (Phone.value == "")) {
                alert("Please Enter your Phone Number")
                Phone.focus()
                return false
            }
            if (checkInternationalPhone(Phone.value) == false) {
                alert("Please Enter a Valid Phone Number")

                Phone.focus()
                return false
            }

            var Name1 = document.myForm.city

            if ((Name1.value == null) || (Name1.value == "")) {
                alert("Please Enter your city")
                Name1.focus()
                return false
            }
            if (document.myForm.destination.selectedIndex == 0) {
                alert("Please select your Destination");
                document.myForm.destination.focus();
                return false;
            }

            return true





        }
    </script>
    <script>
        function validateFormm() {


            var digits = "0123456789";
            // non-digit characters which are allowed in phone numbers
            var phoneNumberDelimiters = "()- ";
            // characters which are allowed in international phone numbers
            // (a leading + is OK)
            var validWorldPhoneChars = phoneNumberDelimiters + "+";
            // Minimum no of digits in an international phone no.
            var minDigitsInIPhoneNumber = 10;

            function isInteger(s) {
                var i;
                for (i = 0; i < s.length; i++) {
                    // Check that current character is number.
                    var c = s.charAt(i);
                    if (((c < "0") || (c > "9"))) return false;
                }
                // All characters are numbers.
                return true;
            }
            function trim(s) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not a whitespace, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (c != " ") returnString += c;
                }
                return returnString;
            }
            function stripCharsInBag(s, bag) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not in bag, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (bag.indexOf(c) == -1) returnString += c;
                }
                return returnString;
            }

            function checkInternationalPhone(strPhone) {
                var bracket = 3
                strPhone = trim(strPhone)
                if (strPhone.indexOf("+") > 1) return false
                if (strPhone.indexOf("-") != -1) bracket = bracket + 1
                if (strPhone.indexOf("(") != -1 && strPhone.indexOf("(") > bracket) return false
                var brchr = strPhone.indexOf("(")
                if (strPhone.indexOf("(") != -1 && strPhone.charAt(brchr + 2) != ")") return false
                if (strPhone.indexOf("(") == -1 && strPhone.indexOf(")") != -1) return false
                s = stripCharsInBag(strPhone, validWorldPhoneChars);
                return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
            }

            var Name = document.myFormm.name

            if ((Name.value == null) || (Name.value == "")) {
                alert("Please Enter your Name")
                Name.focus()
                return false
            }


            var x = document.forms["myFormm"]["email"].value;
            if (x == "") {
                alert("Email must be filled out");
                document.myFormm.email.focus();
                return false;
            }
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                document.myFormm.email.focus();
                return false;
            }




            var Phone = document.myFormm.phone

            if ((Phone.value == null) || (Phone.value == "")) {
                alert("Please Enter your Phone Number")
                Phone.focus()
                return false
            }
            if (checkInternationalPhone(Phone.value) == false) {
                alert("Please Enter a Valid Phone Number")

                Phone.focus()
                return false
            }

            var Name1 = document.myFormm.city

            if ((Name1.value == null) || (Name1.value == "")) {
                alert("Please Enter your city")
                Name1.focus()
                return false
            }
            if (document.myFormm.destination.selectedIndex == 0) {
                alert("Please select your Destination");
                document.myFormm.destination.focus();
                return false;
            }

            return true





        }
    </script>
    <script>
        function validateFormpop() {


            var digits = "0123456789";
            // non-digit characters which are allowed in phone numbers
            var phoneNumberDelimiters = "()- ";
            // characters which are allowed in international phone numbers
            // (a leading + is OK)
            var validWorldPhoneChars = phoneNumberDelimiters + "+";
            // Minimum no of digits in an international phone no.
            var minDigitsInIPhoneNumber = 10;

            function isInteger(s) {
                var i;
                for (i = 0; i < s.length; i++) {
                    // Check that current character is number.
                    var c = s.charAt(i);
                    if (((c < "0") || (c > "9"))) return false;
                }
                // All characters are numbers.
                return true;
            }
            function trim(s) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not a whitespace, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (c != " ") returnString += c;
                }
                return returnString;
            }
            function stripCharsInBag(s, bag) {
                var i;
                var returnString = "";
                // Search through string's characters one by one.
                // If character is not in bag, append to returnString.
                for (i = 0; i < s.length; i++) {
                    // Check that current character isn't whitespace.
                    var c = s.charAt(i);
                    if (bag.indexOf(c) == -1) returnString += c;
                }
                return returnString;
            }

            function checkInternationalPhone(strPhone) {
                var bracket = 3
                strPhone = trim(strPhone)
                if (strPhone.indexOf("+") > 1) return false
                if (strPhone.indexOf("-") != -1) bracket = bracket + 1
                if (strPhone.indexOf("(") != -1 && strPhone.indexOf("(") > bracket) return false
                var brchr = strPhone.indexOf("(")
                if (strPhone.indexOf("(") != -1 && strPhone.charAt(brchr + 2) != ")") return false
                if (strPhone.indexOf("(") == -1 && strPhone.indexOf(")") != -1) return false
                s = stripCharsInBag(strPhone, validWorldPhoneChars);
                return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
            }

            var Name = document.myFormpop.name

            if ((Name.value == null) || (Name.value == "")) {
                alert("Please Enter your Name")
                Name.focus()
                return false
            }


            var x = document.forms["myFormpop"]["email"].value;
            if (x == "") {
                alert("Email must be filled out");
                document.myFormpop.email.focus();
                return false;
            }
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                document.myFormpop.email.focus();
                return false;
            }




            var Phone = document.myFormpop.phone

            if ((Phone.value == null) || (Phone.value == "")) {
                alert("Please Enter your Phone Number")
                Phone.focus()
                return false
            }
            if (checkInternationalPhone(Phone.value) == false) {
                alert("Please Enter a Valid Phone Number")

                Phone.focus()
                return false
            }

            var Name1 = document.myFormpop.city

            if ((Name1.value == null) || (Name1.value == "")) {
                alert("Please Enter your city")
                Name1.focus()
                return false
            }
            if (document.myFormpop.destination.selectedIndex == 0) {
                alert("Please select your Destination");
                document.myFormpop.destination.focus();
                return false;
            }

            return true





        }
    </script>

</body>

</html>