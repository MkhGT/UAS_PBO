<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    {{-- Main Container --}}
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        {{-- Login Container --}}
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-75">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe">
                <div class="featured-image mb-3">
                    <img src="{{ asset('images/book.png') }}" alt="#" class="img-fluid" style="width: 250px">
                </div>
                <p class="text-white fs-2" style="font-weight: 600">Chisiki</p>
                <small class="text-white text-wrap text-center pb-3" style="width: 17rem">Heaven Above Books</small>
            </div>
            <div class="col-md-6 right-box ps-4 pt-sm-3">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Login</h2>
                        <p>We need to confirm it's you</p>
                    </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3 d-flex flex-column">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="mt-1 w-100 form-control form-control-lg bg-light fs-6" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        {{-- <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address"> --}}
                    </div>
                    <div class="input-group mb-1 d-flex flex-column">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control form-control-lg bg-light fs-6 mt-1 w-100"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        {{-- <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"> --}}
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember me</small></label>
                        </div>
                        <div class="forgot">
                            <small>
                                <a href="#">Forgot password? </a>
                            </small>
                        </div>
                    </div>
                    <x-primary-button class="btn btn-lg w-100 btn-primary fs-6 ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </form>
                    <div class="row">
                        <small>Doesn't have an account? <a href="{{ url('/register') }}">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
