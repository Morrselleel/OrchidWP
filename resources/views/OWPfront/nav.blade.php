
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('OWPfront/Images/logo3-removebg-preview.png')}}"
                    style="min-width: 150px; max-width: 25vw;" alt="image 1">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 150px;display: none;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link underline-effect active" aria-current="page"
                            href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link underline-effect dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Packages
                        </a>
                        <ul class="dropdown-menu bg-light " style="border-radius: 5%;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item underline-effect"
                                    href="{{ url('/wedding-packages') }}">Weddings</a></li>
                            <li><a class="dropdown-item underline-effect"
                                    href="{{ url('/events-packages') }}">Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-effect" href="{{ url('/gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-effect" href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-effect" href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

