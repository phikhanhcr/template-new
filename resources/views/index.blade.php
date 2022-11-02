@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="omga-01__hero-area section-padding position-relative">
        <div class="hero-shape position-absolute">
            <img src="./image/svg/hero-shape-svg.svg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-8 col-sm-9 order-lg-2">
                    <div class="omga-01__hero-img-group">
                        <div class="img-main" data-aos="fade-down" data-aos-duration="500" data-aos-once="true">
                            <img src="./image/png/landing1-hero-phone.png" alt="">
                        </div>
                        <div class="abs-img img-1" data-aos="fade-right" data-aos-duration="400" data-aos-once="true"
                            data-aos-delay="300">

                        </div>
                        <div class="abs-img img-2" data-aos="fade-left" data-aos-duration="400" data-aos-once="true"
                            data-aos-delay="500">

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                    <div class="omga-01__hero-content py--50">
                        <h1 class="title">Convenient and easy to use meeting app!</h1>
                        <p>Rubiktalk is the easiest way to connect over video. Through our friendly interface, you can
                            connect with anyone, anywhere with zero hassle.</p>
                        <div class="hero-btn">
                            <a href="#" class="btn--primary hvr-bounce-to-left">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients Brands Area -->
    <!-- Feature section -->
    <div class="omga-01__feature-section section-padding">
        <div class="shape-1" data-aos="fade-left" data-aos-duration="400" data-aos-once="true">
            <img src="image/png/l1-feature-oval.png" alt="">
        </div>
        <div class="shape-2">
            <img src="image/svg/l1-curve-feature.svg" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pl-lg--40 order-lg-2">
                    <div class="feature-content section-title">
                        <h2 class="title">Build a perfect meeting zoom.</h2>
                        <p class="">Rubiktalk makes it super simple for collaborating teams to jump on a video call.
                            Stay connected and access shared content any time to learn, plan, and innovate—together.</p>
                        <div class="hero-btn">
                            <a href="#" class="btn--primary hvr-bounce-to-left">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="row">
                        <div class="col-md-6 mt--30">
                            <div class="feature-card--01">
                                <div class="card-icon red">
                                    <i class="icon icon-layout-11"></i>
                                </div>
                                <div class="card-text">
                                    <h3 class="title">Customization
                                    </h3>
                                    <p>Personalize your Rubiktalk room with custom names, URLs, and branding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt--30">
                            <div class="feature-card--01">
                                <div class="card-icon yellow">
                                    <i class="icon icon-sidebar-2"></i>
                                </div>
                                <div class="card-text">
                                    <h3 class="title">Brainstorming</h3>
                                    <p>Host productive remote sessions with virtual whiteboards from Rubiktalk.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt--30">
                            <div class="feature-card--01">
                                <div class="card-icon blue">
                                    <i class="icon icon-bookmark-2-2"></i>
                                </div>
                                <div class="card-text">
                                    <h3 class="title">Breakouts</h3>
                                    <p>Run efficient classes, events, and workshops with Rubiktalk.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt--30">
                            <div class="feature-card--01">
                                <div class="card-icon ash">
                                    <i class="icon icon-chat-45-2"></i>
                                </div>
                                <div class="card-text">
                                    <h3 class="title">Engagement</h3>
                                    <p>Keep your calls fun with live emoji reactions and our YouTube integration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content section 1 -->
    <div class="omga-01__content-section1 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2  col-md-9 col-sm-10">
                    <div class="omga-01__content-img-group omga-01__content-img-group-1 position-relative ">
                        <div class="img-1" data-aos="fade-down" data-aos-duration="400" data-aos-once="true">
                            <!-- <img src="./image/png/content-img1.png" alt="" class="d-none d-md-block"> -->
                            <img src="./image/png/content-img1--mobile.webp" alt="">
                        </div>
                        <div class="abs-img img-2" data-aos="fade-right" data-aos-duration="400" data-aos-once="true"
                            data-aos-delay="300">
                            <div class="omga-01__image-card-2 card-yellow">
                                <div class="card-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="card-text">
                                    <span class="date">Next meeting on 30 mins</span>
                                    <p>Project Discussion with John</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                    <div class="omga-01__content-text section-title pr--25">
                        <h2 class="title"> Great video calls with Rubiktalk.</h2>
                        <p>With our fully customizable and easy-to-integrate Video SDK, you can quickly build high-quality
                            and scalable video calling into your mobile, web, and desktop apps.</p>
                        <div class="content-btn">
                            <a href="#" class="btn--primary hvr-bounce-to-left">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content section 2 -->
    <div class="omga-01__content-section2 section-padding">
        <div class="shape-1">
            <img src="./image/svg/l1-curve-content2.svg" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-9 col-sm-10 mb--30 mb-lg--0">
                    <div class="omga-01__content-img-group omga-01__content-img-group-2 position-relative">
                        <div class="img-1" data-aos="fade-down" data-aos-duration="400" data-aos-once="true">
                            <img src="./image/png/content-img2--mobile.webp" alt="">
                        </div>
                        <div class="abs-img img-2" data-aos="fade-right" data-aos-duration="400" data-aos-once="true"
                            data-aos-delay="300">
                            <div class="omga-01__image-card-2 card-red">
                                <div class="card-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="card-text">
                                    <span class="date">Deadline: Oct 29, 2020</span>
                                    <p>You’ve got a new project from David!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="content-text pl-lg--50">
                        <div class="section-title">
                            <h2 class="title">Make the office worth the commute.</h2>
                            <p class="pr-lg--45">Easy to navigate. Built to spark creativity and power productivity.
                                Designed to connect hybrid teams. Yes, your office can have it all.</p>
                        </div>
                        <div class="widgets-wrapper mt--35">
                            <div class="content-widget--1 mb--15">
                                <div class="widget-icon red">
                                    <i class="icon icon-cards-2"></i>
                                </div>
                                <div class="widget-text">
                                    <h3 class="title">Rubiktalk.com Embedment
                                    </h3>
                                    <span class="sub-title">integrate real-time video </span>
                                </div>
                            </div>
                            <div class="content-widget--1 mb--15">
                                <div class="widget-icon blue">
                                    <i class="icon icon-phone-charging-3-2"></i>
                                </div>
                                <div class="widget-text">
                                    <h3 class="title"> Rubiktalk.com Meetings </h3>
                                    <span class="sub-title">have better video calls</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section -->
    <div class="omga-01__testimonial-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="title">Customers are loving Rubiktalk
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb--30">
                    <div class="testimonial-card--1">
                        <div class="card-top-area">
                            <div class="customer-img">
                                <img src="./image/jpeg/l1-customer1.jpg" alt="">
                            </div>
                            <div class="customer-identity">
                                <h3 class="name">Adam Mathew</h3>
                                <p class="company">Manager</p>
                            </div>
                            <a href="#" class="review-media">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <p class="review-text">“The quality is amazing. We have great results throughout the company.”</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb--30">
                    <div class="testimonial-card--1">
                        <div class="card-top-area">
                            <div class="customer-img">
                                <img src="./image/jpeg/l1-customer2.jpg" alt="">
                            </div>
                            <div class="customer-identity">
                                <h3 class="name">Andrey Rob</h3>
                                <p class="company">CEO</p>
                            </div>
                            <a href="#" class="review-media">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <p class="review-text">"Rubiktalk makes it super simple for collaborating teams to jump on a video
                            call. A single meeting link shared instantly ensures a moment of creativity is never lost." </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb--30">
                    <div class="testimonial-card--1">
                        <div class="card-top-area">
                            <div class="customer-img">
                                <img src="./image/jpeg/l1-customer3.jpg" alt="">
                            </div>
                            <div class="customer-identity">
                                <h3 class="name">Amandine Flachs </h3>
                                <p class="company">CEO/Co-founder</p>
                            </div>
                            <a href="#" class="review-media">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <p class="review-text">"I love the idea of a fixed virtual room where people can join me simply by
                            clicking on a link."</p>
                    </div>
                </div>
                <div class="col-12 text-center mt--20" data-aos="fade-up" data-aos-duration="800" data-aos-once="true"
                    data-aos-delay="500">
                    <a href="" class="testimonial-link"><i class="fas fa-comment-alt"></i><span>See all
                            testimonials</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA section -->
    <div class="omga-01__cta-section section-padding">
        <div class="shape-1" data-aos="fade-right" data-aos-duration="400" data-aos-once="true">
            <img src="./image/png/l1-cta-oval.png" alt="">
        </div>
        <div class="shape-2">
            <img src="./image/svg/l1-curve-cta.svg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="title">Get started</h2>
                        <p>We are always ready to help you connect and enable you to be more effective communicators in
                            online calls. Download the app now!</p>
                    </div>
                    <form class="cta-form--1">
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName1" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email address">
                        </div>
                        <button type="submit" class="btn btn--primary hvr-bounce-to-left submit-btn">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- Cta Section End -->
@endsection
