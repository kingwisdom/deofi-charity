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
                                <h2>Galleries</h2>
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
                <a href="/create-gallery" class="btn btn-primary mb-4">Create Gallery</a>
                <div class="row">
                    @foreach ($galleries as $item)
                        <div class="col-md-3 col-sm-6">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src={{ $item->image }} style="height: 20rem;" alt={{$item->title}}>
                                <div class="card-body">
                                    <p class="card-text">{{ $item->title }}</p>
                                    <a onclick="confirmDelete({{ $item->id }})" class="btn btn-danger">Delete</a>
                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('deleteGallery', $item->id) }}" method="POST"
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
