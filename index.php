<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Home - Luxury Hotel Template</title>
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

    <!--==================================================-->
    <!-- Start hotelhub Hero Section  -->
    <!--==================================================-->
    <div class="hero-section">
      <div class="container">
        <div class="row hero_upper align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h4>
                <i class="bi bi-check-circle-fill"></i> Luxury Hotel in
                California
              </h4>
              <h1 class="hotelhub-style cursor-scale">Discover Your Next</h1>
              <h1 class="hotelhub-style cursor-scale">
                Luxurious <span>Escapes</span>
              </h1>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-right_content">
              <p>
                Credibly generate collaborative synergy before backward room
                empower revolutionary infomediaries magnetic
              </p>
              <div class="hotelhub-btn cursor-scale small">
                <a href="Contact"
                  >Book Now <i class="flaticon flaticon-right-arrow"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8 pl-0">
            <div class="solider-banner">
              <div class="swiper slider-banner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="slider-img">
                      <img
                        src="assets/images/slider/slider_img.jpg"
                        alt="image"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slider-img">
                      <img
                        src="assets/images/slider/slider_img.jpg"
                        alt="image"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slider-img">
                      <img
                        src="assets/images/slider/slider_img.jpg"
                        alt="image"
                      />
                    </div>
                  </div>
                </div>
                <div class="slider-arrow-box">
                  <button
                    class="sliders-prev"
                    tabindex="0"
                    aria-label="Previous slide"
                  >
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button
                    class="sliders-next"
                    tabindex="0"
                    aria-label="Next slide"
                  >
                    <i class="fa-solid fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="booking-bx">
              <div class="containers">
                <h1>Booking Online</h1>
                <form id="bookingForm">
                  <div class="booking-input-box">
                    <i class="bi bi-shield-check"></i>
                    <input type="text" id="checkin" name="checkin" placeholder="Check In" required/>
                  </div>
                  <div class="booking-input-box">
                    <i class="bi bi-shield-check"></i>
                    <input type="text" id="checkout" name="checkout" placeholder="Check Out" required/>
                  </div>
                  <div class="booking-input-box">
                    <i class="bi bi-house-door"></i>
                    <select name="place" id="place">
                      <option value="saab">01</option>
                      <option value="opel">02</option>
                      <option value="audi">03</option>
                      <option value="audi">04</option>
                      <option value="audi" selected="">Rooms</option>
                    </select>
                  </div>
                  <div class="booking-input-box">
                    <i class="bi bi-person"></i>
                    <select name="place" id="place2">
                      <option value="saab">01</option>
                      <option value="opel">02</option>
                      <option value="audi">03</option>
                      <option value="audi">04</option>
                      <option value="audi" selected="">Adult</option>
                    </select>
                  </div>
                  <div class="booking-input-box upper">
                    <i class="bi bi-person"></i>
                    <select name="place" id="place3">
                      <option value="saab">01</option>
                      <option value="opel">02</option>
                      <option value="audi">02</option>
                      <option value="audi">02</option>
                      <option value="audi" selected="">Children</option>
                    </select>
                  </div>
                  <div class="booking-button">
                    <button type="submit">
                      Book Now<i class="flaticon flaticon-right-arrow"></i>
                    </button>
                  </div>
                </form>
                <div id="confirmation"></div>
              </div>
                <div class="line-shape">
                    <img
                      src="assets/images/main-home/line-shape.png"
                      alt="image"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Hero Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub About Section -->
    <!--==================================================-->
    <div class="about-serction">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="hotelhub-section-title">
              <h4><i class="flaticon flaticon-right-arrow"></i>Our Hotel</h4>
              <h1>Your Gateway to Comfort,</h1>
              <h1>Luxury, and Unmatched</h1>
              <h1>World our Hotel</h1>
              <p>
                Appropriately brand diverse schemas with orthogonal supply
                chains. Globally benchmark functionalized functionalities with
                24/365 metrics. Holisticly drive sticky products through
                emerging metrics
              </p>
            </div>
            <div class="abou_list-item">
              <div class="abou_list">
                <ul>
                  <li>
                    <img
                      src="assets/images/main-home/list-icon.png"
                      alt=""
                    />Exclusive Deals & Discounts
                  </li>
                </ul>
              </div>
              <div class="abou_list">
                <ul>
                  <li>
                    <img
                      src="assets/images/main-home/list-icon.png"
                      alt=""
                    />Exclusive Deals & Discounts
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up">
            <div class="about-thumb">
              <img
                src="assets/images/main-home/about_thumb.jpg"
                alt=""
              />
              <div class="counter-right-side cursor-scale">
                <div
                  class="counter-single-box"
                  data-aos="fade-up"
                >
                  <div class="counter_icon">
                    <img
                      src="assets/images/main-home/ster-icon.png"
                      alt=""
                    />
                  </div>
                  <div
                    class="odometer-wrapper counter-box-title"
                    data-count="6"
                  >
                    <h1 class="odometer"></h1>
                    <h1>K+</h1>
                  </div>
                  <div class="counter-desc">
                    <p>Happy Customers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-all-shape">
        <div class="about_shape bounce-animate">
          <img
            src="assets/images/main-home/line-shape2.png"
            alt=""
          />
        </div>
        <div class="about_shape2 bounce-animate3">
          <img
            src="assets/images/main-home/dot-shape.png"
            alt=""
          />
        </div>
        <div class="about_shape3 bounce-animate3">
          <img
            src="assets/images/main-home/border-shape.png"
            alt=""
          />
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub About Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Why choose us Section -->
    <!--==================================================-->
    <div class="why-choose-us-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <div class="hotelhub-section-title text-center pb-55">
              <h4>
                <i class="flaticon flaticon-right-arrow"></i>ROOMS & SUITES
              </h4>
              <h1>Sleep in Comfort Choose From</h1>
              <h1>Our Rooms & Suites</h1>
            </div>
          </div>
        </div>
        <div class="hotelhub_slider-wrapper" data-aos="fade-up">
          <div class="swiper choose-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="choose-single-bx">
                      <div class="choose-single-thumb">
                        <img
                          src="assets/images/main-home/choose_img.jpg"
                          alt=""
                        />
                        <div class="choose_content">
                          <div class="choose-content-inner">
                            <span class="chosse-price">$20 / Per Night</span>
                            <h4>Idustry Experience</h4>
                            <p>
                              Brand diverse schemas with orthogonal benchmark
                              funcalized functionalities products through
                            </p>
                            <div class="choose-info">
                              <ul>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon01.png"
                                    alt=""
                                  />200 m2 Rooms
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon02.png"
                                    alt=""
                                  />2 or 3 Persons
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon03.png"
                                    alt=""
                                  />2 Kings Bed
                                </li>
                              </ul>
                            </div>
                            <div class="hotelhub-btn">
                              <a href="Room-Details"
                                >view details
                                <i class="flaticon flaticon-right-arrow"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="choose-single-bx">
                      <div class="choose-single-thumb">
                        <img
                          src="assets/images/main-home/choose-img02.jpg"
                          alt=""
                        />
                        <div class="choose_content">
                          <div class="choose-content-inner">
                            <span class="chosse-price">$30 / Per Night</span>
                            <h4>Delux Family Room</h4>
                            <p>
                              Brand diverse schemas with orthogonal benchmark
                              funcalized functionalities products through
                            </p>
                            <div class="choose-info">
                              <ul>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon01.png"
                                    alt=""
                                  />200 m2 Rooms
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon02.png"
                                    alt=""
                                  />2 or 3 Persons
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon03.png"
                                    alt=""
                                  />2 Kings Bed
                                </li>
                              </ul>
                            </div>
                            <div class="hotelhub-btn">
                              <a href="Room-Details"
                                >view details
                                <i class="flaticon flaticon-right-arrow"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="choose-single-bx">
                      <div class="choose-single-thumb">
                        <img
                          src="assets/images/main-home/choose-img05.jpg"
                          alt=""
                        />
                        <div class="choose_content">
                          <div class="choose-content-inner">
                            <span class="chosse-price">$40 / Per Night</span>
                            <h4>Luxury Signature Suites</h4>
                            <p>
                              Brand diverse schemas with orthogonal benchmark
                              funcalized functionalities products through
                            </p>
                            <div class="choose-info">
                              <ul>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon01.png"
                                    alt=""
                                  />200 m2 Rooms
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon02.png"
                                    alt=""
                                  />2 or 3 Persons
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon03.png"
                                    alt=""
                                  />2 Kings Bed
                                </li>
                              </ul>
                            </div>
                            <div class="hotelhub-btn cursor-scale small">
                              <a href="Room-Details"
                                >view details
                                <i class="flaticon flaticon-right-arrow"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="choose-single-bx">
                      <div class="choose-single-thumb">
                        <img
                          src="assets/images/main-home/choose-img03.jpg"
                          alt=""
                        />
                        <div class="choose_content">
                          <div class="choose-content-inner">
                            <span class="chosse-price">$30 / Per Night</span>
                            <h4>Idustry Experience</h4>
                            <p>
                              Brand diverse schemas with orthogonal benchmark
                              funcalized functionalities products through
                            </p>
                            <div class="choose-info">
                              <ul>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon01.png"
                                    alt=""
                                  />200 m2 Rooms
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon02.png"
                                    alt=""
                                  />2 or 3 Persons
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon03.png"
                                    alt=""
                                  />2 Kings Bed
                                </li>
                              </ul>
                            </div>
                            <div class="hotelhub-btn cursor-scale small">
                              <a href="Room-Details"
                                >view details
                                <i class="flaticon flaticon-right-arrow"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="choose-single-bx">
                      <div class="choose-single-thumb">
                        <img
                          src="assets/images/main-home/choose-img02.jpg"
                          alt=""
                        />
                        <div class="choose_content">
                          <div class="choose-content-inner">
                            <span class="chosse-price">$30 / Per Night</span>
                            <h4>Oceanview Deluxe Room</h4>
                            <p>
                              Brand diverse schemas with orthogonal benchmark
                              funcalized functionalities products through
                            </p>
                            <div class="choose-info">
                              <ul>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon01.png"
                                    alt=""
                                  />200 m2 Rooms
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon02.png"
                                    alt=""
                                  />2 or 3 Persons
                                </li>
                                <li>
                                  <img
                                    src="assets/images/main-home/choose-icon03.png"
                                    alt=""
                                  />2 Kings Bed
                                </li>
                              </ul>
                            </div>
                            <div class="hotelhub-btn cursor-scale small">
                              <a href="Room-Details"
                                >view details
                                <i class="flaticon flaticon-right-arrow"></i
                              ></a>
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
          <div class="hotelhub-slider-dots">
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 1"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 2"
            ></span>
            <span
              class="swiper-pagination-bullet swiper-pagination-bullet-active"
              tabindex="0"
              role="button"
              aria-label="Go to slide 3"
            ></span>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Why choose us Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Choose Section -->
    <!--==================================================-->
    <div class="choose-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12" data-aos="fade-right">
            <div class="hotelhub-section-title">
              <h4>
                <i class="flaticon flaticon-right-arrow"></i>WHY CHOOS US?
              </h4>
              <h1>Why We’re the Ideal Destination</h1>
              <h1>for Your Getaway</h1>
              <p>
                Appropriately brand diverse schemas with orthogonal supply
                chains. Globally benchmark functionalized functionalities with
                24/365 metrics. Holisticly drive sticky products through
                emerging metrics
              </p>
            </div>
            <div class="abou_list-item two">
              <div class="abou_list">
                <ul>
                  <li>
                    <img
                      src="assets/images/main-home/aroow.png"
                      alt=""
                    />Award-Winning Dining
                  </li>
                  <li>
                    <img
                      src="assets/images/main-home/aroow.png"
                      alt=""
                    />Flexible Booking Options
                  </li>
                </ul>
              </div>
              <div class="abou_list">
                <ul>
                  <li>
                    <img
                      src="assets/images/main-home/aroow.png"
                      alt=""
                    />Luxury Amenities
                  </li>
                  <li>
                    <img
                      src="assets/images/main-home/aroow.png"
                      alt=""
                    />Stunning Views
                  </li>
                </ul>
              </div>
            </div>
            <div class="choose_list">
              <ul>
                <li>
                  <img
                    src="assets/images/main-home/check.png"
                    alt=""
                  />These features emphasize quality and comfort
                </li>
              </ul>
            </div>
            <div class="hotelhub-btn">
              <a href="restaurant.html"
                >Learn More <i class="flaticon flaticon-right-arrow"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-5 col-md-12" data-aos="fade-left">
            <div class="choose-thumb">
              <img
                src="assets/images/main-home/choose_thumbs.jpg"
                alt=""
              />
              <div class="choose-shape1 bounce-animate">
                <img
                  src="assets/images/main-home/choose-broder.png"
                  alt=""
                />
              </div>
              <div class="counter-right-side cursor-scale">
                <div class="counter-single-box two">
                  <div
                    class="odometer-wrapper counter-box-title"
                    data-count="10"
                  >
                    <h1 class="odometer"></h1>
                    <h1>K+</h1>
                  </div>
                  <div class="counter_icon">
                    <img
                      src="assets/images/main-home/people.png"
                      alt=""
                    />
                  </div>
                  <div class="counter-desc">
                    <p>Our All Satisfied Clients Trusted with us</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="choose-all-shape">
        <div class="choose-shape2 bounce-animate3">
          <img
            src="assets/images/main-home/choose-shpae.png"
            alt=""
          />
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Choose Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Service Section  -->
    <!--==================================================-->
    <div class="service-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="hotelhub-section-title style_two">
              <h4><i class="flaticon flaticon-right-arrow"></i>Service</h4>
              <h1>Enhancing Your’s</h1>
              <h1>Stay With Exclusive</h1>
              <h1>Services</h1>
              <div class="contact-infos">
                <span><i class="fa-solid fa-phone"></i></span>
                <div class="contact-info-content">
                  <p>For More Information</p>
                  <h3>+00 123 (456) 789</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="single-service-box">
                  <div class="service-icon">
                    <img
                      src="assets/images/main-home/service-icon01.png"
                      alt=""
                    />
                  </div>
                  <div class="service-content">
                    <h3>Transportations</h3>
                    <p>Proactively morph optimal infom progressive resources</p>
                  </div>
                  <div class="hotelhub-hover-box hover-bx"></div>
                  <div class="hotelhub-hover-box hover-bx2"></div>
                  <div class="hotelhub-hover-box hover-bx3"></div>
                  <div class="hotelhub-hover-box hover-bx4"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="single-service-box">
                  <div class="service-icon">
                    <img
                      src="assets/images/main-home/service-icon02.png"
                      alt=""
                    />
                  </div>
                  <div class="service-content">
                    <h3>Wi-Fi and Internet</h3>
                    <p>Proactively morph optimal infom progressive resources</p>
                  </div>
                  <div class="hotelhub-hover-box hover-bx"></div>
                  <div class="hotelhub-hover-box hover-bx2"></div>
                  <div class="hotelhub-hover-box hover-bx3"></div>
                  <div class="hotelhub-hover-box hover-bx4"></div>

                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="single-service-box">
                  <div class="service-icon">
                    <img
                      src="assets/images/main-home/service-icon03.png"
                      alt=""
                    />
                  </div>
                  <div class="service-content">
                    <h3>Cym Facilities</h3>
                    <p>Proactively morph optimal infom progressive resources</p>
                  </div>
                  <div class="hotelhub-hover-box hover-bx"></div>
                  <div class="hotelhub-hover-box hover-bx2"></div>
                  <div class="hotelhub-hover-box hover-bx3"></div>
                  <div class="hotelhub-hover-box hover-bx4"></div>

                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="single-service-box">
                  <div class="service-icon">
                    <img
                      src="assets/images/main-home/service-icon04.png"
                      alt=""
                    />
                  </div>
                  <div class="service-content">
                    <h3>Room Services</h3>
                    <p>Proactively morph optimal infom progressive resources</p>
                  </div>
                  <div class="hotelhub-hover-box hover-bx"></div>
                  <div class="hotelhub-hover-box hover-bx2"></div>
                  <div class="hotelhub-hover-box hover-bx3"></div>
                  <div class="hotelhub-hover-box hover-bx4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hotelhub_slider-wrapper pt-30" data-aos="fade-up">
          <div class="swiper service_list">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="single-service-boxs">
                  <div class="service-thumb">
                    <img
                      src="assets/images/main-home/service_thumb01.png"
                      alt="Hotel Restaurant"
                    />
                    <div class="service_icons">
                      <img
                        src="assets/images/main-home/service-icons-01.png"
                        alt="Service Icon"
                      />
                    </div>
                  </div>
                  <div class="service-content">
                    <span class="category">DISCOVER</span>
                    <h3>Hotel Restaurant</h3>
                    <ul class="service_list">
                      <li>
                        <i class="fa-solid fa-check"></i> Fresh Foods Guarantee
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i> High-Quality
                        Ingredients
                      </li>
                    </ul>
                    <div class="hotelhub-btn2">
                      <a href="#"
                        >Learn More <i class="flaticon flaticon-right-arrow"></i
                      >
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div></a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="single-service-boxs">
                  <div class="service-thumb">
                    <img
                      src="assets/images/main-home/service_thumb02.png"
                      alt="SPA & Beauty Center"
                    />
                    <div class="service_icons">
                      <img
                        src="assets/images/main-home/service_icons02.png"
                        alt="Service Icon"
                      />
                    </div>
                  </div>
                  <div class="service-content">
                    <span class="category">RELAXATION</span>
                    <h3>SPA & Beauty Center</h3>
                    <ul class="service_list">
                      <li>
                        <i class="fa-solid fa-check"></i> Luxury Spa Treatments
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i> Professional
                        Therapists
                      </li>
                    </ul>
                    <div class="hotelhub-btn2">
                      <a href="#"
                        >Learn More <i class="flaticon flaticon-right-arrow"></i
                      ><div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="single-service-boxs">
                  <div class="service-thumb">
                    <img
                      src="assets/images/main-home/service_thumb03.png"
                      alt="Swimming Pools"
                    />
                    <div class="service_icons">
                      <img
                        src="assets/images/main-home/service_icons03.png"
                        alt="Service Icon"
                      />
                    </div>
                  </div>
                  <div class="service-content">
                    <span class="category">HEALTH</span>
                    <h3>Swimming Pools</h3>
                    <ul class="service_list">
                      <li>
                        <i class="fa-solid fa-check"></i> Clean & Safe
                        Environment
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i> Temperature-Controlled
                        Pools
                      </li>
                    </ul>
                    <div class="hotelhub-btn2">
                      <a href="#"
                        >Learn More <i class="flaticon flaticon-right-arrow"></i
                      ><div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="single-service-boxs">
                  <div class="service-thumb">
                    <img
                      src="assets/images/main-home/service_thumb03.png"
                      alt="Swimming Pools"
                    />
                    <div class="service_icons">
                      <img
                        src="assets/images/main-home/service_icons03.png"
                        alt="Service Icon"
                      />
                    </div>
                  </div>
                  <div class="service-content">
                    <span class="category">HEALTH</span>
                    <h3>Swimming Pools</h3>
                    <ul class="service_list">
                      <li>
                        <i class="fa-solid fa-check"></i> Clean & Safe
                        Environment
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i> Temperature-Controlled
                        Pools
                      </li>
                    </ul>
                    <div class="hotelhub-btn2">
                      <a href="#"
                        >Learn More <i class="flaticon flaticon-right-arrow"></i
                      ><div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hotelhub-slider-dots2"></div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Service Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Buddy  Video section -->
    <!--==================================================-->
    <div class="video-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video__area">
              <div class="video__content">
                <a
                  class="video-vemo-icon venobox vbox-item"
                  data-vbtype="youtube"
                  data-autoplay="true"
                  href="https://youtu.be/BS4TUd7FJSg"
                  ><span class="play-now">play</span></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End Buddy Video section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Testimonial Section  -->
    <!--==================================================-->
    <div class="testimonial-section ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="hotelhub-section-title pb-55 style_two">
              <h4><i class="flaticon flaticon-right-arrow"></i>Testimonals</h4>
              <h1>What Say Our Customers</h1>
              <h1>About Services</h1>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="review text-right">
              <img
                class="text-right"
                src="assets/images/main-home/review.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="hotelhub_slider-wrapper" data-aos="fade-up">
          <div class="swiper testi_list1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author01.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>Anjelina Watson</h4>
                          <h6>CEO and Founder</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author02.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>Abu Taleb</h4>
                          <h6>CEO</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author03.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>David X. John</h4>
                          <h6>UI Designer</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author04.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>John. X Moris</h4>
                          <h6>Marketing</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author03.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>Anjelina Watson</h4>
                          <h6>CEO and Founder</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author01.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>Noor Islam</h4>
                          <h6>Developer</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testi-single-box">
                      <div class="testi-content">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li>(4.5)</li>
                        </ul>
                        <div class="testi-desc">
                          <p>
                            Appropriately brand diverse into benchmark
                            functionalized functi sticky products through
                            emerging with orthogonal with orthogonal supply
                            chains globally
                          </p>
                        </div>
                      </div>
                      <div class="user-info">
                        <div class="people-pic">
                          <img
                            src="assets/images/main-home/testi-author01.png"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          <h4>Anjelina Watson</h4>
                          <h6>CEO and Founder</h6>
                        </div>
                      </div>
                      <div class="hotelhub-hover-btn hover-btn"></div>
                      <div class="hotelhub-hover-btn hover-btn2"></div>
                      <div class="hotelhub-hover-btn hover-btn3"></div>
                      <div class="hotelhub-hover-btn hover-btn4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hotelhub-slider-dots3">
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 1"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 2"
            ></span>
            <span
              class="swiper-pagination-bullet swiper-pagination-bullet-active"
              tabindex="0"
              role="button"
              aria-label="Go to slide 3"
            ></span>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Testimonial Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Marquee Section  -->
    <!--==================================================-->
    <div class="marquee-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="marquee">
              <div class="marquee-single-box">
                <div class="marquee-content">
                  <h2>
                    Luxury Hotel in California<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Best Luxury Resort<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Modern City Hotel<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Mountain Luxury Resort<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Health and Fitness<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                </div>
              </div>
              <div class="marquee-single-box">
                <div class="marquee-content">
                  <h2>
                    Luxury Hotel in California<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Best Luxury Resort<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Modern City Hotel<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Mountain Luxury Resort<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                  <h2>
                    Health and Fitness<span
                      ><img
                        src="assets/images/main-home/star.png"
                        alt=""
                    /></span>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Marquee Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Blog Section -->
    <!--==================================================-->
    <div class="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <div class="hotelhub-section-title text-center pb-55">
              <h4><i class="flaticon flaticon-right-arrow"></i>LATEST BLOG</h4>
              <h1>Read Our Latest Insights From</h1>
              <h1>Update Blog Posts</h1>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-4 col-md-6">
            <div class="blog-single-box">
              <div class="blog-thumb">
                <img
                  src="assets/images/main-home/blog1.jpg"
                  alt=""
                />
                 
              </div>
              <div class="blog-content">
                <span class="category">Resort</span>
                <h3>
                  <a href="#"
                    >Continually network focused infrastructures cross</a
                  >
                </h3>
                <div class="blog_button">
                  <div class="blog_admin">
                    <div class="blog_author">
                      <ul>
                        <li>
                          <img
                            src="assets/images/main-home/blog-author.png"
                            alt=""
                          />Anjelina Watson
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blg-btn cursor-scale small">
                    <a href="#">
                      <i class="flaticon flaticon-right-arrow"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog-single-box">
              <div class="blog-thumb">
                <img
                  src="assets/images/main-home/blog2.jpg"
                  alt=""
                />
                <div class="blog-date-line">
                  <p>20<br/><span>NOV</span></p>
                </div>
              </div>
              <div class="blog-content">
                <span class="category">Hotels</span>
                <h3>
                  <a href="#"
                    >Quickly morph just in times front-end scenarios</a
                  >
                </h3>
                <div class="blog_button">
                  <div class="blog_admin">
                    <div class="blog_author">
                      <ul>
                        <li>
                          <img
                            src="assets/images/main-home/blog-author2.png"
                            alt=""
                          />Md Abu Taleb
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blg-btn">
                    <a href="#">
                      <i class="flaticon flaticon-right-arrow"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog-single-box">
              <div class="blog-thumb">
                <img
                  src="assets/images/main-home/blog3.jpg"
                  alt=""
                />
                <div class="blog-date-line">
                  <p>25<br/><span>NOV</span></p>
                </div>
              </div>
              <div class="blog-content">
                <span class="category">Fitness</span>
                <h3>
                  <a href="#"
                    >Appropriately initiate resource through line metrics</a
                  >
                </h3>
                <div class="blog_button">
                  <div class="blog_admin">
                    <div class="blog_author">
                      <ul>
                        <li>
                          <img
                            src="assets/images/main-home/blog-author3.png"
                            alt=""
                          />Sanida Khatun
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blg-btn">
                    <a href="#">
                      <i class="flaticon flaticon-right-arrow"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Blog Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start hotelhub Appoinment Section  -->
    <!--==================================================-->
    <div class="appoinment-section">
      <div class="container">
        <div class="row appoinment">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="contact_thumb">
              <img
                src="assets/images/main-home/contact_img.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up">
            <div class="contact-form-box">
              <div class="hotelhub-section-title">
                <h4>
                  <i class="flaticon flaticon-right-arrow"></i>get in touch
                </h4>
                <h1>Contact with Us</h1>
              </div>
              <form
                action="https://formspree.io/f/myyleorq"
                method="POST"
                id="dreamit-form"
              >
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input
                        type="text"
                        name="name"
                        placeholder="Your Phone Nimber"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input
                        type="text"
                        name="email"
                        placeholder="Enter Your Email*"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <select id="cars">
                        <option value="volvo">Englis</option>
                        <option value="saab">Bangla</option>
                        <option value="vw">Hindi</option>
                        <option
                          value="audi"
                          selected
                        >
                          Select Subject
                        </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-box">
                      <textarea
                        name="massage"
                        id="massage"
                        placeholder="Write Message"
                        required=""
                      ></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <div class="check_bx">
                      <input type="checkbox" />
                      <p>Save my email adress for next query.</p>
                    </div>
                    <div class="submit-button">
                      <button class="submit-btn">
                        send message
                        <i class="flaticon flaticon-right-arrow"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contant_info-section" data-aos="fade-up">
      <div class="container">
        <div class="row info_bg">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="contact-info-bx">
                  <div class="info-icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="info-content">
                    <p>Call us Anitme</p>
                    <h3>+00 123 (4567) 890</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="contact-info-bx">
                  <div class="info-icon">
                    <i class="fa-regular fa-envelope"></i>
                  </div>
                  <div class="info-content">
                    <p>Send us E-Mail</p>
                    <h3>example@gmail.com</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End hotelhub Appoinment Section  -->
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
