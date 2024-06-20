<!DOCTYPE html>
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
</body>
</html>
