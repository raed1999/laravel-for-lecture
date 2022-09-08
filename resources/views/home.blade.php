<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>@yield('Title')</title>
</head>

<body>
    {{-- HTML class are from bootstrap --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#">My First Laravel App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profiles.index') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                    </ul>
                </div>
                <div class="me-auto">
                    <div class="btn btn-primary">Login</div>
                    <div class="btn btn-warning">Sign Up</div>
                </div>
            </div>
        </nav>
    </div>

    <div class="row text-center mt-3">
        <div class="col">
            <h3>
                This is our home page
            </h3>
        </div>
    </div>
    <hr>
    <div class="row text-center">

        <div class="col">
            <h6>
                Convertion of seconds to Days, Minutes, Hours, Seconds
            </h6>
            @isset($seconds)
                @php
                    $days = floor($seconds / 86400);
                    $hours = floor(($seconds - $days * 86400) / 3600);
                    $minutes = floor(($seconds / 60) % 60);
                    $seconds = $seconds - $days * 86400 - $hours * 3600 - $minutes * 60;
                @endphp
                Days: {{ $days }} <br>
                Hours: {{ $hours }} <br>
                Minutes: {{ $minutes }} <br>
                Seconds: {{ $seconds }}
            @endisset
        </div>
    </div>




    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>

</html>
