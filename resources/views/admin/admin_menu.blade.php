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
                                <h2>Menu</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--  Contact Area start  -->
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle">
                                            <a href="/events">
                                                <h4>EVENTS</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle">
                                            <a href="/create-event">
                                                <h4>CREATE EVENT</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle">
                                            <a href="/gallery">
                                                <h4>GALLERIES</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle">
                                            <a href="/create-gallery">
                                                <h4>CREATE GALLERY</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection
