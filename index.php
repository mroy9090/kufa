<?php
include_once "includes/db.php";

$db_select = new Database;
$db_select_query = $db_select->selectDataQuery("index1", "settings", "setting_value", "owner_name");

$db_select2 = new Database;
$db_select_query2 = $db_select2->selectDataQuery("index1", "settings", "setting_value", "owner_bio");

$db_about_select = new Database;
$db_about_select_query = $db_about_select->selectAboutDataQuery("index1", "abouts", "owner_name");

$db_about_select1 = new Database;
$db_about_select_expertise_query = $db_about_select1->selectAboutDataQuery("index1", "abouts", "owner_expertise");

$db_about_select2 = new Database;
$db_about_select_descrip_query = $db_about_select2->selectAboutDataQuery("index1", "abouts", "owner_description");

$db_select1 = new Database;
$db_skill_query = $db_select1->selectQuery("skills", "index1");
$after_assoc_db_skill_query = mysqli_fetch_assoc($db_skill_query);

$db_sleect2 = new Database;
$db_work_query = $db_select2->selectQuery("works", "index1");
$after_assoc_db_work_query = mysqli_fetch_assoc($db_work_query);

//print_r($after_assoc_db_work_query);

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Metas Page details-->
    <title>Folio - Personal Portfolio Template</title>
    <meta name="description" content="OnePage Resume Portfolio">
    <meta name="author" content="">
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--main style-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <!--google font style-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--font-family: 'Metrophobic', serif;-->
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
    <!--font-family: 'Open Sans', sans-serif;-->
    <!-- font icon css style-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body onLoad="load()" onUnload="GUnload()">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--wrapper start-->
    <div class="wrapper noGap" id="wrapper">

        <!--Header start -->
        <header>
            <!--menu start-->
            <div class="menu">
                <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
                <div class="navbar-wrapper">
                    <div class="container">
                        <div class="navwrapper">
                            <div class="navbar navbar-inverse navbar-static-top">
                                <div class="container">
                                    <!--<div class="logo">logo</div> -->
                                    <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                            <!-- <a class="navbar-brand" href="#">Menu</a>  -->
                                        </div>
                                        <div class="navbar-collapse collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="menuItem active"><a href="#wrapper">Home</a></li>
                                                <li class="menuItem"><a href="#aboutus">About Me</a></li>
                                                <li class="menuItem"><a href="#skillset">Skills</a></li>
                                                <li class="menuItem"><a href="#experience">Experience</a></li>
                                                <li class="menuItem"><a href="#education">Education</a></li>
                                                <li class="menuItem"><a href="#ourwork">Portfolio</a></li>
                                                <li class="menuItem"><a href="#contact">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
            <!--menu end-->
            <!--banner start-->
            <div class="banner row" id="banner">
                <div class="bannerText">
                    <h1>I'm <?= $db_select_query['setting_value'] ?></h1>
                    <h3><?= $db_select_query2['setting_value'] ?></h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%">
                    <!--background slide show start-->
                    <div class="slide">
                        <img src="images/header-image/image01.png" alt="image01">
                    </div>
                    <div class="slide">
                        <img src="images/header-image/image02.jpg" alt="image01">
                    </div>
                    <!--background slide show end-->
                </div>
            </div>
            <!--banner end-->

        </header>
        <!--Header end -->

        <!--about us start-->
        <section class="aboutus" id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>About me</h2>
                            <h3>A small introduction about my self</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/jhon-img.jpg" alt=""></div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
                        <h5><?= $db_about_select_query['owner_name'] ?></h5>
                        <h4><?= $db_about_select_expertise_query['owner_expertise'] ?></h4>
                        <p><?= $db_about_select_descrip_query['owner_description'] ?></p>
                        <p><a role="button" class="btn btn-primary btn-lg">Download Printable Resume</a></p>
                    </div>

                </div>
            </div>
        </section>
        <!--about us end-->
        <!--Skillset start -->
        <section id="skillset" class="skillset">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Skills &amp; Expertice</h2>
                            <h3>I can say i’m quite good at</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-12 media">
                            <p><?= $after_assoc_db_skill_query['about'] ?></p>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <?php foreach ($db_skill_query as $skill) : ?>
                                <div class="skillbar clearfix " data-percent="<?= $skill['expertice_percentage'] ?>%">
                                    <div class="skillbar-title"><span><?= $skill['expertice'] ?></span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent"></div>
                                </div> <!-- End Skill Bar -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Skillset end -->




        <!--Work Experties start -->
        <section id="experience" class="myexperties">
            <div class="container">
                <div class="heading">
                    <h2>Work Experience</h2>
                    <h3>My previous associations</h3>
                </div>
                <?php foreach ($db_work_query as $work_info) : ?>
                    <div class="row media">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="expertiesico">
                                <?= $work_info['joining_date'] ?> <span>till <?= $work_info['leaving_date'] ?> </span>
                            </div>
                        </div>
                        <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <h4><?= $work_info['company_name'] ?></h4>
                            <h5><?= $work_info['post_name'] ?></h5>
                            <p><?= $work_info['about_post'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!--Work Experties end -->




        <!--Education & diploma start -->
        <section id="education" class="educationdiploma">
            <div class="container">
                <div class="heading">
                    <h2>Education &amp; Diplomas</h2>
                    <h3>I can say i’m quite good at</h3>
                </div>

                <div class="row media">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="expertiesico">
                            Mar,2011<br>January 2011
                        </div>
                    </div>
                    <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <h4>Master Degree of Design</h4>
                        <h5>University of Design</h5>
                        <p>Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt adipiscing atgfnte varius at. Sed mollis vestibulum sapien sed mattis.Cras dictum tellus duvi, vitae sollicitud tyinstfg
                            duvipsum tincidunt adipiscing ante varius at. Sed mollis ves tibulum Sed mollis vestibu
                            lum sapien sed matti sapien sed mattis.</p>
                    </div>
                </div>
                <div class="row media">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="expertiesico">
                            Mar,2011<br>January 2011
                        </div>
                    </div>
                    <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <h4>Bachelor of Arts</h4>
                        <h5>University of Design</h5>
                        <p>Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt adipiscing atgfnte varius at. Sed mollis vestibulum sapien sed mattis.Cras dictum tellus duvi, vitae sollicitud tyinstfg
                            duvipsum tincidunt adipiscing ante varius at. Sed mollis ves tibulum Sed mollis vestibu
                            lum sapien sed matti sapien sed mattis.</p>
                    </div>
                </div>
                <div class="row media">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="expertiesico">
                            Mar,2011<br>January 2011
                        </div>
                    </div>
                    <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <h4>Master Degree of Design</h4>
                        <h5>Senior UX Designer</h5>
                        <p>Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt adipiscing atgfnte varius at. Sed mollis vestibulum sapien sed mattis.Cras dictum tellus duvi, vitae sollicitud tyinstfg
                            duvipsum tincidunt adipiscing ante varius at. Sed mollis ves tibulum Sed mollis vestibu
                            lum sapien sed matti sapien sed mattis.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Education & diploma end -->


        <!--portfolio start-->
        <section class="protfolio" id="ourwork">
            <div class="container">
                <div class="heading">
                    <h2>Portfolio</h2>
                    <h3>What I have done in my academic career</h3>
                </div>
            </div>
            <div class="row">
                <div class="portfolioFilter">
                    <ul>
                        <li><a href="#" data-filter="*" class="current">All</a></li>
                        <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
                        <li><a href="#" data-filter=".template">template</a></li>
                        <li><a href="#" data-filter=".illustration">Illustration</a></li>
                        <li class="last"><a href="#" data-filter=".webdesign">Web Design</a></li>
                    </ul>
                </div>
                <ul class="portfolioContainer row">
                    <li class="template col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/1.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-plus fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb1.jpg" alt=""> </div>
                    </li>
                    <li class="template wordpress illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/2.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb2.jpg" alt=""> </div>
                    </li>
                    <li class="wordpress illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/3.jpg" title="Project Title3" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb3.jpg" alt=""> </div>
                    </li>
                    <li class="webdesign wordpress col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/4.jpg" title="Project Title4" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb4.jpg" alt=""> </div>
                    </li>
                    <li class="wordpress template col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/5.jpg" title="Project Title5" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb5.jpg" alt=""> </div>
                    </li>
                    <li class="template webdesign illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/6.jpg" title="Project Title6" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb6.jpg" alt=""> </div>
                    </li>
                    <li class="wordpress template col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/7.jpg" title="Project Title7" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb7.jpg" alt=""> </div>
                    </li>
                    <li class="template webdesign illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/8.jpg" title="Project Title8" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb8.jpg" alt=""> </div>
                    </li>
                    <li class="template col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/9.jpg" title="Project Title1" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb9.jpg" alt=""> </div>
                    </li>
                    <li class="template wordpress col-xs-6 col-sm-3 col-md-4 col-lg-4">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/10.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb10.jpg" alt=""> </div>
                    </li>
                    <li class="wordpress col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/11.jpg" title="Project Title3" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb11.jpg" alt=""> </div>
                    </li>
                    <li class="template wordpress col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/projects/big-images/12.jpg" title="Project Title4" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img src="images/projects/thumb-images/thumb12.jpg" alt=""> </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--portfolio end-->

        <!--contact start-->
        <section class="contact" id="contact">
            <div class="container">
                <div class="heading">
                    <h2>Get In Touch</h2>
                    <h3>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi</h3>
                </div>
            </div>
            <!--google map start-->
            <div class="row mapArea">
                <div id="map" style="width: 100%; height: 100%"></div>
            </div>
            <!--google map end-->
        </section>
        <section class="contactDetails">
            <div class="container">
                <div class="heading">
                    <h2>Drop a email</h2>
                    <h3>Please feel free if you would like to have a chat.</h3>
                </div>
                <!--contact form start-->
                <div class="row media">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 conForm text-center">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="cform" id="cform">
                            <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="Your name">
                            <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 noMarr" placeholder="Your email">
                            <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="Your message"></textarea>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="submit" id="submit" name="send" class="submitBnt" value="Send message"></div>
                            <div id="simple-msg"></div>
                        </form>
                    </div>
                </div>
                <!--contact form end-->
            </div>
        </section>
        <!--contact end-->

        <!--footer start-->
        <section class="footer" id="footer">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
                </ul>
            </div>
            <p class="text-center"><a href="#wrapper" class="gototop"><i class="fa fa-chevron-up fa-2"></i></a></p>
        </section>
        <!--footer end-->
    </div>
    <!--wrapper end-->

    <!--modernizr js-->
    <script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
    <!--jquary min js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--for placeholder jquery-->
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>

    <!--for header jquery-->
    <script type="text/javascript" src="js/stickUp.js"></script>
    <script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(document).ready(function() {
                //enabling stickUp on the '.navbar-wrapper' class
                $('.navbar-wrapper').stickUp({
                    parts: {
                        0: 'banner',
                        1: 'aboutus',
                        2: 'skillset',
                        3: 'experience',
                        4: 'education',
                        5: 'ourwork',
                        6: 'contact'
                    },
                    itemClass: 'menuItem',
                    itemHover: 'active',
                    topMargin: 'auto'
                });
            });


        });
    </script>
    <script>
        $('#banner').superslides({
            animation: 'fade',
            play: 5000
        });
    </script>

    <!--for portfolio jquery-->
    <script src="js/jquery.isotope.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
    <link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>

    <!--contact form js-->
    <script type="text/javascript" src="js/jquery.contact.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.6700, -73.9400), // New York
                scrollwheel: false,
                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);



            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Hello!'
            });
        }
    </script>

    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script defer src="js/slideroption.js"></script>

    <!--for theme custom jquery-->
    <script src="js/custom.js"></script>

</body>

</html>