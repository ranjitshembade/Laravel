{{-- <h1> Header </h1> --}}


<header>
    <h1>Demo Website</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Sign Up</a></li>
        </ul>
    </nav>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Custom CSS -->
        <style>
            /* Custom styles */
            body {
                background-color: #f8f9fa;
                color: #343a40;
            }
            header {
                background-color: #007bff;
                padding: 20px 0;
                color: #fff;
                text-align: center;
            }
            footer {
                background-color: #343a40;
                color: #fff;
                padding: 20px 0;
                text-align: center;
            }
        </style>
</header>