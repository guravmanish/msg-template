<?php
     include'header.php'
 ?>
    <!-- END / HEADER -->
    <!-- BANNER SLIDER -->
    <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <li data-transition="fade">
                    <img src="images/home-3/slider-1.png" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100"
                         data-speed="700" data-start="1500" data-easing="easeOutBack">
                        <img src="images/slider/hom1-slide1.png" alt="icons">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                         data-speed="700" data-start="1500" data-easing="easeOutBack">
                        WELCOME TO
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">THE LOTUS HOTEL
                    </div>

                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                       data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                </li>

                <li data-transition="fade">
                    <img src="images/slider/img-4.jpg" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300"
                         data-easing="easeOutBack">
                        <img src="images/icon-slider-1.png" alt="">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        EACH HOTEL IS
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">
                        UNIQUE 60%
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img
                            src="images/icon-slider-2.png" alt=""></div>
                </li>

            </ul>
        </div>

    </section>
    <!-- END / BANNER SLIDER -->
    <!-- CHECK AVAILABILITY -->
    <section class="section-check-availability availability-style-2 clearfix">
        <div class="container">
            <div class="check-availability">
                <div class="ot-heading">
                    <h2 class="mb40">CHECK availability</h2>
                </div>
                <form id="ajax-form-search-room" class="mt40 mb50" action="https://landing.engotheme.com/html/lotus/demo/search_step_2.php" method="post">
                    <div class="availability-form mb40">
                        <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                        <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                       
                        <select class="awe-select" name="children">
                            <option>Children</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="vailability-submit">
                        <button class="awe-btn awe-btn-13 pr30 pl30 f16 bold font-hind">Check Availability</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- END / CHECK AVAILABILITY -->

    <!-- ACCOMMODATIONS -->

    <section class="ot-accomd-modations">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading pt80 pb30 text-center row-20">
                            <h2 class="mb15">ACCOMMODATIONS</h2>
                            <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page
                                when looking at its layout
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="ot-accomd-modations-content owl-single" data-single_item="false" data-desktop="1"
                             data-small_desktop="1"
                             data-tablet="2" data-mobile="1"
                             data-nav="false"
                             data-pagination="false">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Luxury Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-2.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Family Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-3.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Deluxe Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-4.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Couple Room</a></h2>
                                        <p class="price">
                                            Start from $480 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-5.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Single Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-6.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Presidential Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Luxury Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-2.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Family Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-3.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Deluxe Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-4.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Couple Room</a></h2>
                                        <p class="price">
                                            Start from $480 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-5.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Single Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="#"><img class="img-responsive img-full" src="images/room/img-6.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="%21.html#">Presidential Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <div class="info upper">
                                            <p>
                                                <span class="number">02</span>
                                                <span>Max Guest</span>
                                            </p>
                                            <p>
                                                <span class="number">34.5</span>
                                                <span>Size M<sup>2</sup></span>

                                            </p>
                                            <p>
                                                <span class="number">01</span>
                                                <span> Bedroom</span>
                                            </p>
                                        </div>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="%21.html#"> View
                                            Details</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / ACCOMMODATIONS -->

    <!-- ABOUT -->
    <section class="ot-about mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>ABOUT LOTUS HOTEL</h2>
                            <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout
                            </p>
                        </div>
                    </div>
                </div>
                <div class="img-hover-box mb40">
                    <div class="img">
                        <img class="img-responsive" src="images/home-3/about-hill.png" alt="">
                    </div>
                </div>
                <div class="text-center mt40 mb30 featured">
                    <p class="font-hind f-500 f20">Brent Conrad talks with everyone from, frequent travelers to the busy
                        family that can
                        only get away for vacation every couple of years. </p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="details">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="font-hind f14 pr15">
                                        The cards are being handed out by quarantine officials at Chicago,
                                        O’Hare International Airport; Los Angeles; old York City, JFK International
                                        Airport; Newark; & San Francisco. These airports are the only U.S.
                                        airports receiving direct flights from Hong Kong. No U.S. airports
                                        receive direct flights from Hanoi or the Guangdong Province. CDC officials
                                        expect to expand the distribution of
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="font-hind f14 pl15">
                                        The Centers for Disease Control & Prevention (CDC) on Saturday began
                                        distributing cards at airports receiving flights returning directly from Hong
                                        Kong warning travelers returning to the United States from Hong Kong & Guangdong
                                        Province, People’s Republic of China & Hanoi,
                                        Vietnam that they may have been exposed to cases of severe acute respiratory
                                        syndrome (SARS).
                                    </p>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="%21.html#" class="awe-btn awe-btn-default mt30 mb30 font-hind f12 bold btn-medium"
                                   target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- OUR BEST -->
    <section class="ot-out-best mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>Our best</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-single owl-best" data-single_item="false" data-desktop="6"
                     data-small_desktop="4"
                     data-tablet="3" data-mobile="2"
                     data-nav="true"
                     data-pagination="false">
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-11.png" alt="icon">
                        <span class="font-hind f-500">Free Wifi</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-12.png" alt="icon">
                        <span class="font-hind f-500">Car Packing</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-13.png" alt="icon">
                        <span class="font-hind f-500">Service Room</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-14.png" alt="icon">
                        <span class="font-hind f-500">Air Conditioner</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-15.png" alt="icon">
                        <span class="font-hind f-500">Airtel Digital TV</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-16.png" alt="icon">
                        <span class="font-hind f-500">Luggage</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-12.png" alt="icon">
                        <span class="font-hind f-500">Car Packing</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-13.png" alt="icon">
                        <span class="font-hind f-500">Service Room</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-11.png" alt="icon">
                        <span class="font-hind f-500">Free Wifi</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-14.png" alt="icon">
                        <span class="font-hind f-500">Air Conditioner</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/home-3/icon/icon-15.png" alt="icon">
                        <span class="font-hind f-500">Airtel Digital TV</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / OUR BEST -->

    <
    
    <!-- END / HOME GUEST BOOK -->

    <!-- DEALS PACKAGE -->
    <section class="section-deals mt90">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb30 text-center">
                            <h2>Deals & PACKAGE</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="images/home-3/deals/deals-1.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="%21.html#">Lotus</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">Restaurant</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="%21.html#">Click here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="images/home-3/deals/deals-3.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="%21.html#">gym</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="%21.html#">Click here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="images/home-3/deals/deals-2.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="%21.html#">Spa salon</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="%21.html#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="images/home-3/deals/deals-4.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="%21.html#">weeding</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">event</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="%21.html#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / DEALS PACKAGE -->

    <!-- NEWS -->
    <section class="section-news mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb40 text-center">
                            <h2>News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="images/home-3/blog/blog-1.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    21 December, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="%21.html#">UPDATE MENU FOOD IN LOTUS
                                    HOTEL</a>
                                <a class="more block f13" href="%21.html#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="images/home-3/blog/blog-2.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    06 Octorber, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="%21.html#">WEDDING DAY
                                    JONATHA & JESSICA</a>
                                <a class="more block f13" href="%21.html#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="images/home-3/blog/blog-3.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    18 March, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="%21.html#">Bryce Canyon A Stunning Us
                                    Travel Destination</a>
                                <a class="more block f13" href="%21.html#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="%21.html#" class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View more</a>
                </div>
            </div>
        </div>
    </section>
  
</div>
<?php
     include'footer.php'
 ?>


