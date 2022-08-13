<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            @foreach ($postcatgory->chunk(3) as $postcategoryChunk)
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    @foreach ($postcategoryChunk as $postcategory)
                        <li><a href="{{ route("category.index",$postcategory->slug) }}">{{ $postcategory->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
            {{-- <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="#!">JavaScript</a></li>
                    <li><a href="#!">CSS</a></li>
                    <li><a href="#!">Tutorials</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>