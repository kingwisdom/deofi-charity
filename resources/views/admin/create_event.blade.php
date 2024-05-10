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
                                <h2>Create Event</h2>
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
                        @if (session('status'))
                            <h3 class="alert alert-success">{{ session('status') }}</h3>
                        @endif
                        <form class="form-contact" action={{ route('post_event') }} method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="title" id="title" type="text"
                                            placeholder="Your Title" required>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="amount" id="title" type="text"
                                             placeholder="Your the expected">
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" required type="file" name="image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="description" cols="30" required rows="9"
                                            placeholder=" Enter Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button boxed-btn">Send</button>
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
