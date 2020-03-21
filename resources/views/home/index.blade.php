@extends('layout.app')

@section('content')
<!-- banner area start -->
<section class="xs-banner banner-v8 curve-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="xs-banner-content banner-6-content">
                    <h1 class="banner-sub-title wow fadeInUp" data-wow-duration="1.2s">Premium</h1>
                    <h2 class="banner-title wow fadeInUp" data-wow-duration="1.4s">WordPress Hosting from
                        <span>$5.95</span></h2>
                    <div class="list-groups row">
                        <div class="col-md-6">
                            <ul class="xs-list bullet wow fadeInLeft" data-wow-duration="1.6s">
                                <li>Unlimited Disk Space</li>
                                <li>Fully Managed</li>
                                <li>Free Migrations</li>
                            </ul><!-- .xs-list .bullet END -->
                        </div>
                        <div class="col-md-6">
                            <ul class="xs-list bullet wow fadeInRight" data-wow-duration="1.8s">
                                <li>Daily Backups</li>
                                <li>Money Back Gurantee</li>
                                <li>1 Click install</li>
                            </ul><!-- .xs-list .bullet END -->
                        </div>
                    </div><!-- .list-groups .row END -->
                    <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.9s">
                        <a href="signup.html" class="btn btn-secondary icon-right">Create Account<i
                                class="icon icon-arrow-right"></i></a>
                    </div>
                </div><!-- .xs-banner-content .banner-6-content END -->
            </div>
            <div class="col-lg-7">
                <div class="xs-banner-image wow fadeInRight" data-wow-duration="2s">
                    <img src="/images/welcome/welcome-ten-banner-image.png" alt="">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- banner area end -->

<!-- pricing section -->
<section class="pricing-section xs-section-padding shuffle-title pt-0">
    <div class="shuffle-letter-title-wraper text-center">
        <h2 class="shuufle-letter-title">Pricing Plans</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 xs-pricing-group">
                <ul class="nav nav-tabs main-nav-tab wow fadeIn tab-v3" role="tablist">
                    <li>
                        <a id="monthly-tab" class="active show" data-toggle="tab" href="#monthly" role="tab"
                            aria-controls="monthly" aria-selected="true">Monthly</a>
                    </li>
                    <li>
                        <a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly"
                            aria-selected="false">Yearly</a>
                    </li>
                </ul>
                <div class="tab-content pricing-v5">
                    <div class="tab-pane fadeIn animated show active" id="monthly" role="tabpanel"
                        aria-labelledby="monthly-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-4.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">Cloud Hosting</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The High performance cloud platform ever</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>49</h2>
                                            <h6 class="discount-price">25% Discount<del>$49.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-5.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">VPS Hosting</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The ideal solution for corporate websites and larger blogs</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>39</h2>
                                            <h6 class="discount-price">25% Discount<del>$49.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-6.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">Dedicated Hosting</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The High performance cloud platform ever</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>49</h2>
                                            <h6 class="discount-price">25% Discount<del>$49.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fadeIn animated" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-4.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">Dedicated Server</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The High performance cloud platform ever</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>100</h2>
                                            <h6 class="discount-price">50% Discount<del>$200.0</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-5.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">Reseller Hosting</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The ideal solution for corporate websites and larger blogs</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>59</h2>
                                            <h6 class="discount-price">25% Discount<del>$108.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <div class="pricing-img-block">
                                            <img src="/images/pricing/pricing-6.png" alt="hostinza pricing image">
                                        </div>
                                        <h4 class="xs-title">Shared Hosting</h4>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <p>The High performance cloud platform ever</p>
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>$</sup>19</h2>
                                            <h6 class="discount-price">20% Discount<del>$29.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="pricing-info wow fadeIn info-v3">
                    <h5><a href="pricing.html">See plan details</a>and pricing for more information </h5>
                    <ul class="xs-list list-inline">
                        <li><i class="icon icon-back_up"></i>Daily backups</li>
                        <li><i class="icon icon-migration"></i>Free migrations</li>
                        <li><i class="icon icon-checkmark"></i>Staging environments</li>
                    </ul>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END pricing section -->

<!-- service section -->
<section class="xs-section-padding xs-service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="xs-heading heading-v2">
                    <h3 class="heading-title">Whatever your work environment Flywheel's <span>powerful</span>
                        WordPress platform</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row style-boxed version-2">
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block">
                    <div class="service-img">
                        <i class="icon icon-cloud"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">99.9% Uptime</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block active">
                    <div class="service-img">
                        <i class="icon icon-email"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">Email Forwarding</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block">
                    <div class="service-img">
                        <i class="icon icon-dns"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">Advance DNS</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block">
                    <div class="service-img">
                        <i class="icon icon-com"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">More Secured</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block">
                    <div class="service-img">
                        <i class="icon icon-support"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">Awesome Support</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block">
                    <div class="service-img">
                        <i class="icon icon-dns"></i>
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">SSL Certification</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <a href="#" class="simple-btn">Read More</a>
                </div><!-- .xs-service-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END service section -->

<!-- call to action section -->
<section class="call-to-action-section call-to-action-v4 wow fadeIn"
    style="background-image: url(/images/calltoaction-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="call-to-action-content">
                    <h2>We don’t compromise with the best Hosting Solution</h2>
                    <div class="xs-btn-wraper">
                        <a href="#" class="btn btn-secondary">Get Started</a>
                        <a href="#" class="btn btn-outline-primary">Know More</a>
                    </div>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="icon-bg" style="background-image: url(/images/icon-bg-4.png)"></div>
</section><!-- END call to action section -->

<!-- map location section -->
<section class="map-location-area xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">World-class Data centers With Premium Connectivity.</h2>
                    <h3 class="heading-title">HOSTINZA <span>NETWORK</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-md-12">
                <div class="location-groups">
                    <div class="map-image">
                        <img src="/images/map.png" alt="">
                    </div>
                    <div class="location-wraper clearfix">
                        <div class="location location-1" data-placement="top" data-toggle="tooltip" data-html="true"
                            title="<h2 class='location-name'>South Carolina Data Center</h2><p class='location-des'>3379  Ashmor Drive, <br>CLIFTON <br>USA</p>">
                            <div class="location_indicator"></div>
                            <div class="location_details d-block d-md-none">
                                <h2 class="location-name">South Carolina Data Center</h2>
                                <p class="location-des">3379 Ashmor Drive, <br>CLIFTON <br>USA</p>
                            </div>
                        </div><!-- location one -->
                        <div class="location location-2" data-placement="bottom" data-toggle="tooltip" data-html="true"
                            title="<h2 class='location-name'>San Diego Data Center</h2><p class='location-des'>4708  Ocello Street, <br>California <br>USA</p>">
                            <div class="location_indicator"></div>
                            <div class="location_details d-block d-md-none">
                                <h2 class="location-name">San Diego Data Center</h2>
                                <p class="location-des">4708 Ocello Street, <br>California <br>USA</p>
                            </div>
                        </div><!-- location two -->
                        <div class="location location-3" data-placement="top" data-toggle="tooltip" data-html="true"
                            title="<h2 class='location-name'>LOWPOINT Data Center</h2><p class='location-des'>1873  New Creek Road, <br>Illinois <br>USA</p>">
                            <div class="location_indicator"></div>
                            <div class="location_details d-block d-md-none">
                                <h2 class="location-name">LOWPOINT Data Center</h2>
                                <p class="location-des">1873 New Creek Road, <br>Illinois <br>USA</p>
                            </div>
                        </div><!-- location three -->
                        <div class="location location-4" data-placement="right" data-toggle="tooltip" data-html="true"
                            title="<h2 class='location-name'>Jackson Data Center</h2><p class='location-des'>3455  Devils Hill Road, <br>Mississippi <br>USA</p>">
                            <div class="location_indicator"></div>
                            <div class="location_details d-block d-md-none">
                                <h2 class="location-name">Jackson Data Center</h2>
                                <p class="location-des">3455 Devils Hill Road, <br>Mississippi <br>USA</p>
                            </div>
                        </div><!-- location four -->
                        <div class="location location-5" data-placement="left" data-toggle="tooltip" data-html="true"
                            title="<h2 class='location-name'>South Carolina Data Center</h2><p class='location-des'>4848  Marion Street, <br>Lancaster <br>USA</p>">
                            <div class="location_indicator"></div>
                            <div class="location_details d-block d-md-none">
                                <h2 class="location-name">South Carolina Data Center</h2>
                                <p class="location-des">4848 Marion Street, <br>Lancaster <br>USA</p>
                            </div>
                        </div><!-- location five -->
                    </div><!-- .location-wraper END -->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END map location section -->

<!-- testimonial section -->
<section class="xs-testimonial-section testimonial-v7 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">What do real people say?</h2>
                    <h3 class="heading-title">CLIENTS <span>TESTIMONIAL</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="xs-testimonial-slider-2 testimonial-slider owl-carousel">
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-1.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Richard I Jones</h4>
                            <p class="commentor-info">WWW Realty</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-2.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Cecilia H King</h4>
                            <p class="commentor-info">The White Rabbit</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-3.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Joe D Walczak</h4>
                            <p class="commentor-info">Hechinger</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-1.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Richard I Jones</h4>
                            <p class="commentor-info">WWW Realty</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-2.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Cecilia H King</h4>
                            <p class="commentor-info">The White Rabbit</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a
                        WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="/images/avatar/avatar-3.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Joe D Walczak</h4>
                            <p class="commentor-info">Hechinger</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END testimonial section -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="/images/flags/006-united-states.svg" alt=""><span>English</span></a>
                    </li>
                    <li><a href="#"><img src="/images/flags/002-canada.svg" alt=""><span>English</span></a>
                    </li>
                    <li><a href="#"><img src="/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a>
                    </li>
                    <li><a href="#"><img src="/images/flags/004-france.svg" alt=""><span>French</span></a>
                    </li>
                    <li><a href="#"><img src="/images/flags/005-germany.svg" alt=""><span>German</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End xs modal -->
<!-- end language switcher strart -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal -->
<!-- end language switcher strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="#">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div> <!-- END sidebar cart item -->
<!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <img src="/images/blue_logo.png" alt="sidebar logo">
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>906-624-2565</p>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-from">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" id="subscribe-form" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here"
                                class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- END sidebar widget item -->
<!-- END offset cart strart -->
@endsection
