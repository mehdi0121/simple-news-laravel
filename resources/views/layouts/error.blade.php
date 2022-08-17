@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <span class="text text-danger"> {{ $error }}</span>
            @endforeach

        </ul>
    </div>


@endif