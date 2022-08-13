@extends("layouts.master")

@section("active-home","active")
@section("main")

<header class="py-5 bg-light border-bottom mb-4"  style="background-image: url({{ $postcategory->image }});background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">{{ $postcategory->title }}</h1>
            <p class="lead mb-0">{{ $postcategory->description }}</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">
            @foreach ($postcategory->Posts()->get()->chunk(3) as $chunkPosts)

            <div class="row">

                @foreach ($chunkPosts as $post)
                    <div class="col-lg-4">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}" /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $post->updated_at }}</div>
                                <h2 class="card-title h4">{{ $post->title }}</h2>
                                <p class="card-text">{{ \Str::limit($post->body,30) }}</p>
                                <a class="btn btn-primary" href="">Read more →</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @endforeach

            <!-- Pagination-->
            {{-- {{ $postcategory->links("pagination::bootstrap-4")}} --}}

        </div>
    </div>
</div>


@endsection