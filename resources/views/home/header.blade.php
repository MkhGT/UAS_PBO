<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand ps-sm-2 ps-md-5" href="index.html">
            <span>Chisiki</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse pe-4" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <div class="user_option d-flex align-items-center">
                @if (Route::has('login'))
                @auth
                <form method="POST" action="{{ url('/logout') }}">
                    @csrf <!-- Token CSRF Laravel -->
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @else
                <a href="{{ url('/login') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Login</span>
                </a>
                <a href="{{ url('/register') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Register</span>
                </a>
                @endauth
                @endif
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>Cart</span>
                </a>
                {{-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn nav_search-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form> --}}
            </div>
        </div>
    </nav>
</header>
