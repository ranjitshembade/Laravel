<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.5em;
            margin-bottom: 1em;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 1.2em;
        }
        a:hover {
            text-decoration: underline;
        }
        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 1em;
            margin-top: 1em;
            border-radius: 5px;
            width: 50%;
            text-align: left;
        }
        .alert ul {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1> 4 0 4 </h1>
    <h1>Page Not Found</h1>
    <p>Sorry, the page you are looking for could not be found.</p>
    <a href="{{ url('/') }}">Go to Home</a>

    {{-- Uncomment the following block to display validation errors --}}
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
</body>
</html>
