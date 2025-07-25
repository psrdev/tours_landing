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
        content="Book cheapest Holidays packages from FLYSAFIA Airways Pvt Ltd, and Get 30% Each Booking your Tour Packages ">
    <meta name="keywords"
        content="Holidays Packages, Tour Package Booking, Cheapest Holidays Packages Booing, Book your Holidays Trips, ">
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
</head>

<body>

    <section id="header">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="images/logo.png" alt="" class="ing-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <a href="#" class="btn deal" data-toggle="modal" data-target="#exampleModal-1">Last Minute
                                Deal</a>
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
                                    <a href="tel:+917566000147">+91 7566000147</a>
                                </li>
                                <li>
                                    <i>
                                        <img src="images/msg-ico.png" alt="">
                                    </i>
                                    <a href="mailto:info@broliontourism.com">info@broliontourism.com</a>
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
                                <form method="POST" name="indexform" action="query-form.php">
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
                                        <input type="text" name="date" class="form-control"
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
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <div class="overlay"></div>
                            <img src="images/image-1.jpg" alt="" class="img-fluid">
                            <div class="tag">20% OFF</div>
                            <div class="budget">
                                <img src="images/budget.png" alt="" class="img-fluid">
                            </div>
                            <div class="all-free">
                                <img src="images/all-free.png" alt="" class="img-fluid">
                            </div>
                            <div class="special-honymoon">
                                <p>
                                    wine bottle, bed of roses + a candle light
                                    dinner with honeymoon cake
                                </p>
                            </div>
                        </figure>
                        <h2>Shimla Manali Honeymoon Tour Packages</h2>
                        <h3>5N/6D /
                            <span>2N Shimla, 3N Manali</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Delhi - Kullu - Manali - Shimla - Delhi</li>
                                <li>Kullu Manali</li>
                            </ul>
                            <div class="collapse" id="collapseExample">
                                <ul class="pkg-incusion">
                                    <li>Rohtang pass up to possible or Solang Valley</li>
                                    <li>Hidimba Temple in Manali</li>
                                    <li>Vishisht Temple in Manali</li>
                                    <li>Van Vihar in Manali</li>
                                    <li>Tibetan Monastery</li>
                                    <li>Club house and Manikaran in Manali</li>
                                    <li>Kufri, Green valley</li>
                                    <li>Indira tourist park, Himalayan Nature park</li>
                                    <li>Fagu valley in Shimla</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 14,400
                                </small>
                                <i class="fa fa-rupee"></i> 13,899 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/image-6.jpg" alt="" class="img-fluid">
                            <div class="tag">25% OFF</div>
                            <div class="budget">
                                <img src="images/popular.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Manali Volvo Tour Packages</h2>
                        <h3>3N/4D /
                            <span>3 Nights in Manali</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Delhi - Kullu - Manali - Delhi</li>
                                <li>Kullu Sightseeing</li>
                            </ul>
                            <div class="collapse" id="collapseExample6">
                                <ul class="pkg-incusion">
                                    <li>Local Manali Sightseeing</li>
                                    <li>Rohtang pass up to possible or Solang Valley</li>
                                    <li>Hidimba Temple in Manali</li>
                                    <li>Vishisht Temple in Manali</li>
                                    <li>Fabulous Van Vihar</li>
                                    <li>Tibetan Monastery</li>
                                    <li>Club house</li>
                                    <li>Manikaran in Kullu Manali</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button"
                                aria-expanded="false" aria-controls="collapseExample6">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 10,499
                                </small>
                                <i class="fa fa-rupee"></i> 7,399 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/image-3.jpg" alt="" class="img-fluid">
                            <div class="tag">25% OFF</div>
                            <div class="budget">
                                <img src="images/budget.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Shimla Manali Tour Package</h2>
                        <h3>5N/6D /
                            <span>02 Nights Shimla, 03 Nights Manali</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Delhi - Manali - Shimla - Delhi</li>
                                <li>Local Manali Sightseeing</li>
                            </ul>
                            <div class="collapse" id="collapseExample3">
                                <ul class="pkg-incusion">
                                    <li>Rohtang pass up to possible or Solang Valley</li>
                                    <li>Hidimba Devi Temple</li>
                                    <li>Famous Vishisht Temple in Manali</li>
                                    <li>Attraction Point Van Vihar</li>
                                    <li>Tibetan Monastery & Club House</li>
                                    <li>Kullu Manikaran Saheb</li>
                                    <li>Kufri, Green valley & Indira tourist park</li>
                                    <li>Himalayan Nature park</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample3" role="button"
                                aria-expanded="false" aria-controls="collapseExample3">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 17,999
                                </small>
                                <i class="fa fa-rupee"></i> 11,399 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/amarnath-tour-apckge.jpg" alt="" class="img-fluid">
                            <div class="tag">40% OFF</div>
                            <div class="budget">
                                <img src="images/popular.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Amaranth Tour Package</h2>
                        <h3>3N/4D /
                            <span>Sonamarg - Neelgrat/Baltal - Holy Amarnath Cave - Nishat Garden - Shalimar
                                Garden</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Sonamarg - Neelgrat/Baltal - Holy Amarnath Cave - Nishat Garden - Shalimar Garden
                                </li>
                            </ul>
                            <div class="collapse" id="collapseExample4">
                                <ul class="pkg-incusion">
                                    <li>Srinagar</li>
                                    <li>Panchtarni</li>
                                    <li>Dal lake</li>
                                    <li>Nishat bagh</li>
                                    <li>Mugal garden of srinagar</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample4" role="button"
                                aria-expanded="false" aria-controls="collapseExample4">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 15,499
                                </small>
                                <i class="fa fa-rupee"></i> 11,800 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/andmaan-tour-package.jpg" alt="" class="img-fluid">
                            <div class="tag">50% OFF</div>
                            <div class="budget">
                                <img src="images/popular.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Andmaan Tour Package</h2>
                        <h3>5N/6D /
                            <span>Port Blair(1N) - Havelock Island(1N) - Port Blair (3N)</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Port Blair - Havelock Island - Port Blair</li>
                            </ul>
                            <div class="collapse" id="collapseExample5">
                                <ul class="pkg-incusion">
                                    <li>Sound and Light Show at Cellular Jail</li>
                                    <li>Port Blair</li>
                                    <li>Havelock Island</li>
                                    <li>Beach No 7</li>
                                    <li>Port Blair City Tour</li>
                                    <li>Chidyatapu (Sunset Point)</li>
                                    <li>Ross Island</li>
                                    <li>Water Sports Complex</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample5" role="button"
                                aria-expanded="false" aria-controls="collapseExample5">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 18,999
                                </small>
                                <i class="fa fa-rupee"></i> 11,999 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/kerala-tour-package.jpg" alt="" class="img-fluid">
                            <div class="tag">20% OFF</div>
                            <div class="budget">
                                <img src="images/budget.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Kerala Tour Package</h2>
                        <h3>4N/5D /
                            <span> 2N Munnar - 1N Thekkady - 1N Alleppey</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Kerala - Munnar - Thekkady and Alleppey</li>
                            </ul>
                            <div class="collapse" id="collapseExample2">
                                <ul class="pkg-incusion">
                                    <li>Cochin</li>
                                    <li>Munnar</li>
                                    <li>Eravikulam National Park</li>
                                    <li>Mattupetty Dam</li>
                                    <li>Old Munnar Town</li>
                                    <li>Town market</li>
                                    <li>Thekkady</li>
                                    <li>Periyar Wildlife Sanctuary</li>
                                    <li>Alleppey</li>
                                    <li>Cruise-optional</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 10,999
                                </small>
                                <i class="fa fa-rupee"></i> 7,299 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/goa-tour-package.jpg" alt="" class="img-fluid">
                            <div class="tag">40% OFF</div>
                            <div class="budget">
                                <img src="images/popular.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Goa Tour Package</h2>
                        <h3>3N/4D /
                            <span>1N Goa - 1N South Goa - 1N North Goa</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>1N Goa - 1N South Goa - 1N North Goa</li>
                            </ul>
                            <div class="collapse" id="collapseExample7">
                                <ul class="pkg-incusion">
                                    <li> Beaches</li>
                                    <li>Nightlife</li>
                                    <li>Miramar Beach</li>
                                    <li>Dona Paula bay</li>
                                    <li>Se Cathedral</li>
                                    <li>Calangute Beach</li>
                                    <li>Baga Beach</li>
                                    <li>Fort Aguada</li>
                                    <li>Beach Tour at last day</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample7" role="button"
                                aria-expanded="false" aria-controls="collapseExample4">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 10,499
                                </small>
                                <i class="fa fa-rupee"></i> 7,111 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/ladaakh-tour-package.jpg" alt="" class="img-fluid">
                            <div class="tag">50% OFF</div>
                            <div class="budget">
                                <img src="images/popular.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>Surreal Ladakh Holiday Package</h2>
                        <h3>5N/6D /
                            <span>Leh(2N) - Nubra Valley(1N) - Leh(2N)</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Leh - Nubra Valley - Pangong - Leh</li>
                            </ul>
                            <div class="collapse" id="collapseExample8">
                                <ul class="pkg-incusion">
                                    <li>Leh</li>
                                    <li>Leh Market</li>
                                    <li>Lachen Palkhar</li>
                                    <li>Shanti Stupa</li>
                                    <li>Pathar Sahib Gurudwara</li>
                                    <li>Magnetic Hill</li>
                                    <li>Sangam</li>
                                    <li>Martyrs of Kargil wars</li>
                                    <li>Nubra Valley</li>
                                    <li>Diskit monastery</li>
                                    <li>Pangong</li>
                                    <li>Thiksey Monastery</li>
                                    <li>Khardungla pass</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample8" role="button"
                                aria-expanded="false" aria-controls="collapseExample5">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 18,999
                                </small>
                                <i class="fa fa-rupee"></i> 14,499 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages">
                        <figure>
                            <img src="images/shrinagr-tour-package.jpg" alt="" class="img-fluid">
                            <div class="tag">20% OFF</div>
                            <div class="budget">
                                <img src="images/budget.png" alt="" class="img-fluid">
                            </div>
                        </figure>
                        <h2>SriNagar Tour Package</h2>
                        <h3>6N/7D /
                            <span>Srinagar(1N) - Gulmarg (1) - Pahalgam (2N) - Sonmarg (1N) - Srinagar (1N)</span>
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
                            <h5>Destinations Covered:</h5>
                            <ul class="pkg-incusion">
                                <li>Srinagar(1N) - Gulmarg (1) - Pahalgam (2N) - Sonmarg (1N) - Srinagar (1N)</li>
                            </ul>
                            <div class="collapse" id="collapseExample9">
                                <ul class="pkg-incusion">
                                    <li>Srinagar</li>
                                    <li>Dal Lke</li>
                                    <li>Valley of Shepherds via Srinagar</li>
                                    <li>visit Awantipura ruins of an 1100 yr old temple of Lord Vishnu</li>
                                    <li>Pahalgam</li>
                                    <li>Chandanwadi</li>
                                    <li>Amarnath Yatra & Betab valley</li>
                                    <li>Betaab valley</li>
                                    <li>Aru Valley</li>
                                    <li>Tarsar Lake</li>
                                    <li>Lidder river</li>
                                    <li>Sonmarg (Golden Meadow)</li>
                                    <li>Thajiwas glacier</li>
                                    <li>Shankracharya Temple</li>
                                    <li>Famous Mughal Gardens</li>
                                    <li>Nishat Bagh</li>
                                    <li>Dal lake</li>
                                    <li>Shalimar Abode of Love</li>
                                    <li>Gulmarg</li>
                                </ul>
                            </div>
                            <a class="read-collpse" data-toggle="collapse" href="#collapseExample9" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                <span>Read More</span>
                                <i>Close</i>
                            </a>
                        </div>
                        <div class="price-tag">
                            <div class="price">
                                <small>
                                    <i class="fa fa-rupee"></i> 16,999
                                </small>
                                <i class="fa fa-rupee"></i> 10,500 Onwards
                            </div>
                            <div class="btn-detail">
                                <a href="#" class="btn btn-detail" data-toggle="modal" data-target="#exampleModal">Get
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <span>FlySaifia.com</span>
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
                        <li>Himachal</li>
                        <li>Spiti Valley</li>
                        <li>Ladakh</li>
                        <li>Uttarakhand</li>
                        <li>Rajasthan</li>
                        <li>North East India</li>
                        <li>West Bangal</li>
                        <li>Karnataka</li>
                        <li>Goa</li>
                        <li>Kerala</li>
                        <li>Jammu & Kashmir</li>
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
                                <a href="tel: +91-9654710750">+91-9654710750</a>
                            </li>
                            <li>
                                <i>
                                    <img src="images/msg-ico.png" alt="" class="img-fluid">
                                </i>
                                <a href="mailto:holidays@flysaifia.com">holidays@flysaifia.com</a>
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
                                <p>www.flysaifia.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto pl">
                        <h6 class="title font-bold">Call us</h6>
                        <div class="media">
                            <div class="media-body">
                                <p>+91-9654710750</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto pl">
                        <h6 class="title font-bold">Email</h6>
                        <div class="media">
                            <div class="media-body">
                                <p>
                                    <a href="mailto:holidays@flysaifia.com">holidays@flysaifia.com</a>
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
                    <p>@Copyright 2018, Flysaifia.com All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="section_mobile">
        <div class="inner_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 p-0 col-3">
                        <div class="_col_m">
                            <a class="_btn_bm" href="tel:+91-9654710750">
                                <i class="fa fa-phone fa-1x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 p-0">
                        <div class="_col_bm">
                            <button type="button" class="_btn_bm" data-toggle="modal" data-target="#exampleModal">SEND
                                ENQUIRY</button>
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
                    <form method="POST" name="indexform" action="query-form.php">
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
                            <input type="text" name="date" class="form-control" placeholder="Travel Date (DD/MM/YY)"
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
                                <option>Manali Honeymoon Tour Packages</option>
                                <option>Manali Volvo Tour Packages</option>
                                <option>Shimla Manali Tour Package</option>
                                <option>Amaranth Tour Package</option>
                                <option>Andmaan Tour Package</option>
                                <option>Kerala Tour Package</option>
                                <option>Goa Tour Package</option>
                                <option>Surreal Ladakh Holiday Package</option>
                                <option>SriNagar Tour Package</option>
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
                    <form method="POST" name="indexform" action="query-form.php">
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
                            <input type="text" name="date" class="form-control" placeholder="Travel Date (DD/MM/YY)"
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
                                <option>Manali Honeymoon Tour Packages</option>
                                <option>Manali Volvo Tour Packages</option>
                                <option>Shimla Manali Tour Package</option>
                                <option>Amaranth Tour Package</option>
                                <option>Andmaan Tour Package</option>
                                <option>Kerala Tour Package</option>
                                <option>Goa Tour Package</option>
                                <option>Surreal Ladakh Holiday Package</option>
                                <option>SriNagar Tour Package</option>
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