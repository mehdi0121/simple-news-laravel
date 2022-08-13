@extends("layouts.master")


@section("main")

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12" >
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on {{$post->convertTimeToShow() }} by {{ $post->User->name }}</div>
                    <!-- Post categories-->
                    @foreach ($post->categories()->get() as $category)
                    <a class="badge bg-secondary text-decoration-none link-light" href="{{ route("category.index",$category->slug) }}">{{ $category->title }}</a>
                    @endforeach
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ $post->image }}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    {{!!  $post->body !!}}
                </section>
            </article>
            {{-- @include("layouts.comments") --}}
        </div>

    </div>
</div>



@endsection