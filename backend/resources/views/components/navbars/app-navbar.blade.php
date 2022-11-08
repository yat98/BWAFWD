<div class="container-lg px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-3">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('frontend/img/logo/logo.svg') }}" alt="Logo NOMADS">
        </a>
        <button class="navbar-toggler navbar-toggler-right"
            type="button" data-bs-toggle="collapse" data-bs-target="#nav-nomads-top"
            aria-controls="nav-nomads-top" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-nomads-top">
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Travel Packages</a>
                </li>
                <li class="nav-item mx-md-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" 
                        id="navbar-nomads-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Link 1</a>
                        <a href="" class="dropdown-item">Link 2</a>
                        <a href="" class="dropdown-item">Link 3</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>
            @guest 
                <!-- Mobile Button -->
                <div class="d-inline my-2 d-sm-block d-md-none">
                    <a href="{{ route('login') }}" class="btn btn-login my-2 my-sm-0">
                        Login
                    </a>
                </div>

                <!-- Desktop Button -->
                <div class="d-inline my-2 my-lg-0 d-none d-md-block">
                    <a href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 d-flex align-items-center">
                        Login
                    </a>
                </div>
            @endguest
            
            @auth
                <!-- Mobile Button -->
                <form action="{{ route('logout') }}" class="d-inline my-2 d-sm-block d-md-none" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0">
                        Logout
                    </button>
                </form>

                <!-- Desktop Button -->
                <form action="{{ route('logout') }}" class="d-inline my-2 my-lg-0 d-none d-md-block" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</div>