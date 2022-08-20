<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route("index")  }}">{{ env("APP_NAME") }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link @yield("active-home")" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link @yield("active-about") " href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link @yield("active-contact")" href="#!">Contact</a></li>
                @auth()
                <li class="btn btn-success ms-2"><a class="nav-link @yield("active-panel")" href="{{ route("index.admin") }}">panel</a></li>
                <li class="btn btn-error ms-2"><a class="nav-link @yield("active-contact")" href="{{ route("logout") }}">logout</a></li>
                @else
                <li class="nav-item"><a class="nav-link @yield("active-contact")" href="{{ route("login") }}">login</a></li>
                <li class="nav-item"><a class="nav-link @yield("active-contact")" href="{{ route("register") }}">register</a></li>
                @endauth
                {{-- <li class="nav-item"><a class="nav-link @yield("active")" aria-current="page" href="#">Blog</a></li> --}}
            </ul>
        </div>
    </div>
</nav>