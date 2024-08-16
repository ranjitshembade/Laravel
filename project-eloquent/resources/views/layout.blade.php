<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         .center-heading {
            text-align: center;
            margin-top: 10px;
        }
        .table-boardered-red {
            border: 2px solid rgb(34, 33, 36);
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-22 bg-success-subtle text-center py-2">
                <h2> Eloquent CRUD </h2>
        </div>
    <div class="container">
        <div class="center-heading">
            <div class="col-22 bg-warning-subtle text-center py-3">
            <h1><i class="fa fa-align-center" aria-hidden="true"></i>@yield('title')</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>

        <div class="fa fa-align-center">
            @yield('content')

        </div>
        </div>
    </div>
</body>
</html>