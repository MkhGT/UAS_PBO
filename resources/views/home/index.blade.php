<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>
    @include('home.header')

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container-fluid">
            <div class="carousel-item active">
                <img src="{{ asset('images/library-3.jpg') }}" class="d-block w-100" style="height: 450px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Our Bookstore</h2>
                    <p>Discover a wide range of books, comics, and journals.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/library-2.jpg') }}" class="d-block w-100" style="height: 450px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>New Arrivals</h2>
                    <p>Explore our latest collection of books and journals.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/library-1.jpg') }}" class="d-block w-100" style="height: 450px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Special Offers</h2>
                    <p>Grab exciting discounts and offers on selected items.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
