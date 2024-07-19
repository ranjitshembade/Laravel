<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://img-cdn.pixlr.com/image-generator/history/65ba5701b4f4f4419f746bc3/806ecb58-167c-4d20-b658-a6a6b2f221e9/medium.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Add New User</h1>
                
                {{-- @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif --}}

                <form action="{{ route('adduser1') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" name="username">
                        <span class="text-danger ">
                        @error('username')
                            {{ $message }}
                        @enderror
                        </span>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                        <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>