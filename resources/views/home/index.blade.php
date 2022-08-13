@extends("layouts.master")

@section("active-home","active")
@section("main")

<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            @empty($posts->toArray()["data"])
                <div class="alert alert-danger justify-content-center">
                  <p>  result Empty</p>
                </div>
            @endempty


            @foreach ($posts->chunk(2) as $chunkPosts)

            <div class="row">

                @foreach ($chunkPosts as $post)
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ route("post.single",$post->slug) }}"><img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}" /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $post->updated_at }}</div>
                                <h2 class="card-title h4">{{ $post->title }}</h2>
                                <p class="card-text">{{ \Str::limit($post->body,30) }}</p>
                                <a class="btn btn-primary" href="{{ route("post.single",$post->slug) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @endforeach

            <!-- Pagination-->
            {{ $posts->links("pagination::bootstrap-4")}}

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="" >
                        <div class="input-group">
                            <input class="form-control" name="search" type="text" placeholder="Enter search term..." value="{{ request("search")}}" aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Categories widget-->
            @include("layouts.category_widget")

            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>


@endsection