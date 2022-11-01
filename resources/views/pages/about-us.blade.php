@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <div class="site-wrapper overflow-hidden">
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="/img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <img src="/img/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <img src="/img/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <img src="/img/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-light title mb-20 text-light">About Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-light">Home</li>
                                    <li class="breadcrumb-item text-light" aria-current="page">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="termscontent-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="termscontent-section__content">
                            <div class="termscontent-section__content--texts">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <p class="text-dark text-start" style="font-size: 20px; margin: 10px 0 20px 0;">
                                        247workout.co is designed to replace your paper workout journal. Originally designed
                                        by a team who was disappointed by the selection of workout tracking apps, it
                                        combines the best features found in other apps with a minimalistic approach and a
                                        clean, easy-to-use interface. Give it a try. We know you'll love it!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
