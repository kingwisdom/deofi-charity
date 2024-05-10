@extends('layout.app')

@section('content')
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>{{ $event->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src={{ '/' . $event->image }} alt="">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{ $event->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                            </ul>

                            <p>
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                            <div class="media post_item">
                                {{-- <div class="media-body">
                                    <a href="#">
                                        <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div> --}}
                            </div>

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
