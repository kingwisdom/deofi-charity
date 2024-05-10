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
                                <h2>Create Gallery</h2>
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
                    <div class="col-12">
                        <h2 class="contact-title">Create Event Gallery</h2>
                    </div>
                    <div class="col-lg-8">
                        @if (session('status'))
                            <h3 class="alert alert-success">{{ session('status') }}</h3>
                        @endif
                        <form class="form-contact" action="/post-gallery" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="title" id="title" type="text"
                                            required onblur="this.placeholder = 'Enter the title'"
                                            placeholder="Enter the title">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image"
                                            placeholder=" Enter Message" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button boxed-btn">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">




                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection
