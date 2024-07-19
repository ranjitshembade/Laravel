<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Project - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="wrapper" class="container">
        <header class="my-4 text-center">
            <h1>Demo Website</h1>
        </header>
        
        <nav class="nav justify-content-center mb-4">
            <a class="nav-link btn btn-primary mx-1" href="/">Home</a>
            <a class="nav-link btn btn-secondary mx-1" href="/about">About</a>
            <a class="nav-link btn btn-success mx-1" href="/post">Post</a>
        </nav>

        <main class="row">
            <article class="col-md-8">
                @yield('content')
            </article>
     
            <aside class="col-md-3.5">
                @section('sidebar')
                <ul class="list-group">
                    <li class="list-group-item"><a class="btn btn-primary w-100" href="/">Home</a></li>
                    <li class="list-group-item"><a class="btn btn-secondary w-100" href="/about">About</a></li>
                    <li class="list-group-item"><a class="btn btn-success w-100" href="/post">Post</a></li>
                </ul>
                @show
            </aside>
        </main>

        <footer class="text-center my-4">
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



{{-- css code for page design --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Project - @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>Demo Website</h1>
        </header>
        
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        </nav>
        <main>
         
            <article>
                @yield('content')

            </article>
     
            <aside>
                @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
                @show
            </aside>
        </main>
        <footer>
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </footer>
    </div>
</body> --}}
</html>