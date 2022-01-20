<nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png')}}" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fs-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">News</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
