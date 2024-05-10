@extends('layout.app')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Donate Now</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">

                <div class="row">


                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            {{-- <a href="#"><img src="assets/img/gallery/socialEvents1.png" 
                                                    alt=""></a> --}}
                                        </div>
                                        <div class="job-tittle">
                                            <a href="#">
                                                <h4>6778822773</h4>
                                            </a>
                                            <ul>
                                                <li><i class="far fa-bank"></i>Zenith Bank</li>
                                                <li><i class="fas fa-sort-amount-down"></i>Naira Account</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Lagos, Nigeria.</h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 (385) 457-6738</h3>
                                <p>24 hrs</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@deofi.com.ng</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection
