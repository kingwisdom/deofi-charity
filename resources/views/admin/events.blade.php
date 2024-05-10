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
                                <h2>Events</h2>
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
                <a href="/create-event" class="btn btn-primary mb-4">Create Event</a>
                <div class="row">
                    @foreach ($event as $item)
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img class="card-img-top" style="height: 20rem;" src={{ $item->image }}
                                    alt={{ $item->title }}>
                                <div class="card-body">
                                    <p class="card-text">{{ $item->title }}</p>
                                    <small>{{ $item->created_at->diffForHumans() }}</small>
                                    <a onclick="confirmDelete({{ $item->id }})" class="btn btn-danger">Delete</a>
                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('deleteEvent', $item->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <script>
                                        function confirmDelete(itemId) {
                                            if (confirm('Are you sure you want to delete this item?')) {
                                                event.preventDefault();
                                                document.getElementById('delete-form-' + itemId).submit();
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
