@extends('layout.app')

@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h2 data-animation="fadeInUp" data-delay=".6s">Making the Wolrd a Better Place for<br>
                                        Kids and the Underprivileged</h2>
                                    <P data-animation="fadeInUp" data-delay=".8s">we are here to help the helpless.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="/contact" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                            data-delay=".8s">Donate</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">Making the Wolrd a Better Place for Kids
                                        and the Underprivileged.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                            data-delay=".8s">Donate</a>
                                        <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight"
                                            data-delay="1.0s">
                                            <i class="flaticon-null"></i>
                                            <p>+12 1325 41</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are doing</span>
                            <h2>We Are In A Mission To Help The Helpless</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                {{-- <span class="flaticon-null-1"></span> --}}
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Vision</a></h5>
                                <p>A world where every child has access to quality education and essential resources,
                                    regardless of their background or circumstances.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat active text-center mb-50">
                            <div class="cat-icon">
                                {{-- <span class="flaticon-think"></span> --}}
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Mission</a></h5>
                                <p>To empower underprivileged children and communities through education, support, and
                                    sustainable initiatives, fostering a brighter future for all.</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                {{-- <span class="flaticon-gear"></span> --}
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Core Value</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to
                                    know your processes to.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">

                            <h2>Core Values</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                {{-- <span class="flaticon-null-1"></span> --}}
                                <img src="assets/img/core/ded.png" alt="" style="height: 90px;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Dedication</a></h5>
                                <p>Unwavering commitment to the cause of empowering underprivileged children and communities
                                    through education and general support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                {{-- <span class="flaticon-null-1"></span> --}}
                                <img src="assets/img/core/emp.png" alt="" style="height: 90px;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Empowerment</a></h5>
                                <p>Fostering a sense of empowerment in the lives of children and communities by providing
                                    them with the tools and resources they need to thrive.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/core/opp.png" alt="" style="height: 90px;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Opportunity</a></h5>
                                <p>Unwavering commitment to the cause of empowering underprivileged children and communities
                                    through education and general support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/core/fellow.png" alt="" style="height: 90px;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Fellowship</a></h5>
                                <p>Making efforts to forge partnerships with schools and other NGOs, orphanage homes, and to
                                    recruit ambassadors / volunteers to support beneficiaries, reflecting a spirit of
                                    collaboration and community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/core/respect.png" alt="" style="height: 90px;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Integrity</a></h5>
                                <p>Maintaining the highest standards of integrity, transparency, and accountability in all
                                    operations and decision-making processes.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!--? About Law Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About our foundation</span>
                                <h2>We Are In A Mission To Help Helpless</h2>
                            </div>
                            <p>Our nonprofit organization is dedicated to providing educational opportunities for poor
                                children at all levels of schooling. First, we provide financial assistance to cover school
                                costs for students enrolled in primary, intermediate, and senior secondary schools, ensuring
                                access to quality education regardless of socioeconomic constraints. </p>

                        </div>
                        <a href="/about" class="btn">Read More</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->
        <!-- Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            {{-- <span>Our Cases you can see</span> --}}
                            <h2>Explore Our Latest Outreaches </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case1.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                                <!-- Progress Bar -->
                                {{--  <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                       <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="70"></span>
                                        </div> 
                                    </div>
                                </div> --}}
                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case2.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Providing Healthy Food For The Children</a></h3>
                                <!-- Progress Bar -->

                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/case3.png" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Supply Drinking Water For The People</a></h3>
                                <!-- Progress Bar -->
                                {{-- <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="50"></span>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Cases End -->

        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <h2>Board of Trustees</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJy0QCeJDsQuC0Lq8bWrSzCY-JU6a0bI3Wwg&usqp=CAU"
                                    alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Ekundayo Toheeb Dayo</a></h3>
                                <p>Founder / Overseer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJy0QCeJDsQuC0Lq8bWrSzCY-JU6a0bI3Wwg&usqp=CAU"
                                    alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Ibojo Sola</a></h3>
                                <p>Tresurer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJy0QCeJDsQuC0Lq8bWrSzCY-JU6a0bI3Wwg&usqp=CAU"
                                    alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Dr. Joseph Mayaki</a></h3>
                                <p>Trustee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJy0QCeJDsQuC0Lq8bWrSzCY-JU6a0bI3Wwg&usqp=CAU"
                                    alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#"></a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!-- Want To work -->
        <section class="wantToWork-area ">
            <div class="container">
                <div class="wants-wrapper w-padding2  section-bg" data-background="assets/img/gallery/section_bg01.png">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Lets Chenge The World With Humanity</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Our recent blog</span>
                            <h2>Latest News from our recent blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>Creative derector</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>Creative derector</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

    </main>
@endsection
