<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Blank - Luxury Hotel Template</title>
    <?php include ('include/css.php');?>
</head>
<body>
<!-- loder -->
<?php include ('include/preloader.php');?>

<!--==================================================-->
<!-- Start hotelhub Main Menu  -->
<!--==================================================-->
<?php include('include/header.php'); ?>

<!-- hotelhub Mobile Menu  -->
<?php include ('include/mobilemenu.php');?>
<!--==================================================-->
<!-- End hotelhub Main Menu  -->
<!--==================================================-->

<div class="breatcome-section style_nine d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome-content text-center">
                    <h1 class="cursor-scale"> Booking Details</h1>
                    <ul class="breatcome-item">
                        <li><a class="cursor-scale small" href="index.html"><i class="fa-solid fa-house"></i> Home </a></li>
                        <li><i class="flaticon flaticon-right-arrow"></i><a href="rooms-details.html"> Rooms </a></li>
                        <li><i class="flaticon flaticon-right-arrow"></i> Booking Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End hotelhub Breatcome Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start hotelhub Service Details Section  -->
<!--==================================================-->
<div class="rooms-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-items">
                    <div class="rooms-details-box">
                        <div class="blog-thumb">
                            <img src="assets/images/resource/rooms-details.jpg" alt="Blog img">
                            <div class="rooms-detls-btn">
                                <a href="blog-details.html"> <i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="rooms-details-content">
                            <span class="rooms-price">$30 / Per Night</span>
                            <h3>Luxury Signature Suites</h3>
                            <div class="rooms-details_list">
                                <ul>
                                    <li><img src="assets/images/resource/list-icon01.png" alt="">2 King Bed</li>
                                    <li><img src="assets/images/resource/list-icon01.png" alt="">1500 SQFT</li>
                                    <li><img src="assets/images/resource/list-icon02.png" alt="">2 Bathroom</li>
                                    <li><img src="assets/images/resource/list-icon03.png" alt="">1 Kitchen</li>
                                </ul>
                            </div>
                            <p class="room-detils-desc" >Rapidiously myocardinate cross-platform intellectual capital after
                                marketing model. Appropriately create interactive infrastructures after maintainable are
                                Holisticly facilitate stand-alone inframe extend state of the art benefits via web-enabled value.
                                Completely fabricate extensible infomediaries rather than reliable e-services. Dramatically
                                whiteboard alternative
                            </p>
                            <p class="room-detils-desc2">Conveniently fashion pandemic potentialities for team driven
                                technologies.
                                Proactively orchestrate robust systems rather than user-centric vortals. Distinctively seize
                                top-line e-commerce with premier intellectual capital. Efficiently strategize goal-oriented
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="room-details-content">


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="room-details-check-box">
                                        <div class="room-details-check-content">
                                            <span><img src="assets/images/resource/details-bx-icon.png" alt="">Check In</span>
                                            <p class="check-item"><i class="bi bi-check2"></i>Check-in from 9:00 AM - anytime</p>
                                            <p class="check-item"><i class="bi bi-check2"></i>Early check-in subject to availability</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="room-details-check-box">
                                        <div class="room-details-check-content">
                                            <span><img src="assets/images/resource/details-icon02.png" alt="">Check In</span>
                                            <p class="check-item"><i class="bi bi-check2"></i>Check-out before noon</p>
                                            <p class="check-item"><i class="bi bi-check2"></i>Check-out from 9:00 AM - anytime</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="room-detils-title-2">House Rules</h1>
                            <p class="room-detils-desc upper">Professionally deliver fully researched scenarios with turnkey communities.
                                Competently unleash empowered applications without seamless data.
                                Uniquely underwhelm quality outsourcing before transparent relationships.
                                Efficiently enhance diverse relationships whereas leveraged</p>
                            <h1 class="room-detils-title-2">Childreen &amp; Extra Beds</h1>
                            <p class="room-detils-desc">Applications without seamless data. Uniquely underwhelm quality outsourcing before
                                transparent relationships. Efficiently enhance diverse relationships whereas leveraged new house cafe.</p>
                            <div class="room-detls-list-item">
                                <ul>
                                    <li><i class="bi bi-check2"></i>Quickly generate bricks-and-clicks</li>
                                    <li><i class="bi bi-check2"></i>Interactively cultivate visionary platforms</li>
                                    <li><i class="bi bi-check2"></i>Energistically envisioneer resource</li>
                                    <li><i class="bi bi-check2"></i>Uniquely restore turnkey paradigms</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <!-- box 1 -->
                <div class="booking-container">
                    <form id="bookingForm">
                        <div class="booking-heading">
                            <h2>Booking</h2>
                            <p><strong>$560</strong> / NIGHT</p>
                        </div>

                        <div class="controls">
                            <input type="date" id="arrive" class="floatLabel" name="arrive" required>
                            <label for="arrive" class="label-date">Check In</label>
                        </div>
                        <div class="controls">
                            <input type="date" id="arrive2" class="floatLabel" name="arrive" required>
                            <label for="arrive" class="label-date">Check Out</label>
                        </div>
                        <div class="controls bx-2">
                            <div class="booking-input-box">
                                <i class="fas fa-angle-down"></i>
                                <label for="arrive" class="label-date">Rooms</label>
                                <select name="place" id="place1">
                                    <option value="opel">Room 02</option>
                                    <option value="audi">Room 03</option>
                                    <option value="audi">Room 04</option>
                                    <option value="audi" selected="">1 Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="controls bx-2">
                                    <div class="booking-input-box">
                                        <i class="fas fa-angle-down"></i>
                                        <label for="arrive" class="label-date">1</label>
                                        <select name="place" id="place2">
                                            <option value="audi" selected="">Room 1</option>
                                            <option value="opel">Room 02</option>
                                            <option value="audi">Room 03</option>
                                            <option value="audi">Room 04</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="controls bx-2">
                                    <div class="booking-input-box">
                                        <i class="fas fa-angle-down"></i>
                                        <label for="arrive" class="label-date">1</label>
                                        <select name="place" id="place">
                                            <option value="audi" selected="">Children 1</option>
                                            <option value="audi">Children 2</option>
                                            <option value="audi">Children 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- booking service -->
                        <div class="services ">
                            <h2>Extra Service</h2>
                            <div class="service style_two">
                                <input type="checkbox" id="room-clean">
                                <label for="room-clean">
                                    <span>Room Clean</span>
                                </label>
                                <div class="price-rang">
                                    <span>$10 / Night</span>
                                </div>
                            </div>
                            <div class="service ">
                                <input type="checkbox" id="massage">
                                <label for="massage"> </label>
                                <span>Massage</span>
                                <span class="prices">$10 / Person</span>
                                <span class="option-icon"><i class="fas fa-angle-down"></i></span>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="service">
                                <input type="checkbox" id="day-spa">
                                <label for="day-spa"></label>
                                <span>Day SPA</span>
                                <span class="prices">$35 / Person</span>
                                <span class="option-icon"><i class="fas fa-angle-down"></i></span>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="booking-heading cost">
                                <h3>Total Cost : </h3>
                                <p><strong>$860</strong></p>
                            </div>
                            <div class="booking-button">
                                <button type="submit">Update information</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- box -->
                <div class="hotelhub-category-box two rooms-amenitie-bx">
                    <h3 class="category-title">Amenities</h3>
                    <ul class="hotelhub-service">
                        <li><a href="#"> <img src="assets/images/resource/romms-icon1.png" alt="">2 - 5 Persons</a></li>
                        <li><a href="#"> <img src="assets/images/resource/romms-icon2.png" alt="">Free WiFi Available</a></li>
                        <li><a href="#"> <img src="assets/images/resource/romms-icon3.png" alt="">Swimingpools</a></li>
                        <li><a href="#"> <img src="assets/images/resource/romms-icon4.png" alt="">Breakfast</a></li>
                        <li><a href="#"> <img src="assets/images/resource/romms-icon5.png" alt="">250 SQFT Rooms</a></li>
                        <li><a href="#"> <img src="assets/images/resource/romms-icon6.png" alt="">Gym facilities</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End hotelhub Service Details Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start hotelhub Why choose us Section Style Two -->
<!--==================================================-->
<div class="why-choose-us-section style_three rooms_inner_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hotelhub-section-title style_inner  home_three pb-55 text-center ">
                    <h4><i class="flaticon flaticon-right-arrow"></i>ROOMS & SUITES</h4>
                    <h1>Sleep in Comfort Choose From  </h1>
                    <h1>Our Rooms & Suites</h1>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="choose-single-bx rooms-bx">
                    <div class="choose-single-thumb ">
                        <img src="assets/images/home-three/choose2.png" alt="" />
                    </div>
                    <div class="choose-contentns">
                        <div class="choose-content-inner">
                            <span class="chosse-price">$30 / Per Night</span>
                            <h4>Delux Family Room</h4>
                            <div class="choose-infoss">
                                <ul>
                                    <li><img src="assets/images/main-home/choose-icon01.png" alt="">200 m2 Rooms</li>
                                    <li><img src="assets/images/main-home/choose-icon02.png" alt="">2 or 3 Persons</li>
                                    <li><img src="assets/images/main-home/choose-icon03.png" alt="">2 Kings Bed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="choose-single-bx rooms-bx">
                    <div class="choose-single-thumb ">
                        <img src="assets/images/home-three/choose3.png" alt="" />
                    </div>
                    <div class="choose-contentns">
                        <div class="choose-content-inner">
                            <span class="chosse-price">$40 / Per Night</span>
                            <h4>Luxury Signature Suites</h4>
                            <div class="choose-infoss">
                                <ul>
                                    <li><img src="assets/images/main-home/choose-icon01.png" alt="">200 m2 Rooms</li>
                                    <li><img src="assets/images/main-home/choose-icon02.png" alt="">2 or 3 Persons</li>
                                    <li><img src="assets/images/main-home/choose-icon03.png" alt="">2 Kings Bed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="choose-single-bx rooms-bx">
                    <div class="choose-single-thumb ">
                        <img src="assets/images/home-three/choose4.png" alt="" />
                    </div>
                    <div class="choose-contentns">
                        <div class="choose-content-inner">
                            <span class="chosse-price">$40 / Per Night</span>
                            <h4>Oceanview Delux Room</h4>
                            <div class="choose-infoss">
                                <ul>
                                    <li><img src="assets/images/main-home/choose-icon01.png" alt="">200 m2 Rooms</li>
                                    <li><img src="assets/images/main-home/choose-icon02.png" alt="">2 or 3 Persons</li>
                                    <li><img src="assets/images/main-home/choose-icon03.png" alt="">2 Kings Bed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--==================================================-->
<!-- End hotelhub Why choose us Section Style Two -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Galary Section  -->
<!--==================================================-->
<div class="galary-section">
    <div class="container-fluid">
        <div class="swiper galary_list">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/01.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/02.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/03.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/04.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/05.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/06.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/07.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/08.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/01.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/05.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="galary-single-bx">
                                <div class="galary-img">
                                    <img src="assets/images/home-two/04.jpg" alt="">
                                    <div class="galary-icon">
                                        <a href="#"><i class="fa-solid fa-camera-retro"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Galary Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start hotelhub Footer Section -->
<!--==================================================-->
<?php include ('include/footer.php');?>
<!--==================================================-->
<!-- End hotelhub Footer Section -->
<!--==================================================-->


<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->
<?php include ('include/scrolltotop.php');?>
<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->

<?php include ('include/js.php');?>
</body>
</html>
