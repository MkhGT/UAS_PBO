<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 py-5">
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-75">
            <!-- Left Box (Form) -->
            <div class="col-md-6 p-4">
                <h4 class="mb-4">Sign up</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-1">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="text" class="form-control form-control-lg" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" type="text" class="form-control form-control-lg" name="address" value="{{ old('address') }}" required autocomplete="address">
                        @error('address')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control form-control-lg" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Register</button>
                </form>
                <div class="mt-3">
                    <small>Already have an account? <a href="{{ url('/login') }}">Login</a></small>
                </div>
            </div>
            <!-- Right Box (Illustration) -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column" style="background: #103cbe;">
                <div class="text-center mb-3">
                    <img src="{{ asset('images/book.png') }}" alt="Illustration" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2 fw-bold">Chisiki</p>
                <p class="text-white text-center" style="width: 17rem;">Heaven above books</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
