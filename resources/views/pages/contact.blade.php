@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- navbar- -->
        <!-- Breadcrumb Section Start -->
        <div class="inner-hero-area bg-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="inner-hero-text">
                            <h1 class="title">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->
        <!-- Content Section Start -->
        <div class="omga-01__contact-section pt--40 pb--40 pt-md--120 pb-md--120">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="section-title">
                    <h2>We are always open 24/7 for you.</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-xl-5 offset-xl-1 order-lg-2">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                      <div class="contact-widget-block mb--55">
                        <h3 class="title">Address</h3>
                        <p>Aschauer Strasse 32a</p>
                        <p>+81549 Munich, Germany</p>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                      <div class="contact-widget-block mb--55">
                        <h3 class="title">Email us</h3>
                        <p>info@rubiktalk.com</p>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="omega-contact-form" id="#form-messages">
                    <form>
                      <input type="text" class="form-control" placeholder="Your name" id="name" />
                      <input type="text" class="form-control" placeholder="Email address" id="email" />
                      <input type="text" class="form-control" placeholder="Subject" id="submit" />
                      <textarea placeholder="Write your message" name="message" class="form-control" id="message"></textarea>
                      <button class="btn btn--primary hvr-bounce-to-left">
                        Send Message
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
