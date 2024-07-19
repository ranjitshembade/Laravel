<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('https://media.assettype.com/analyticsinsight/2024-07/633c7e9c-82ff-48c1-a73f-d90ae7e9cf87/How_to_Earn_Money_through_AI_Generated_Artwork_A_Simplified_Guide.jpg?w=958');
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

                <form action="{{ route('adduser') }}" method="POST">
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
                        <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                        <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" value="{{ old('userpass') }}" class="form-control @error('userpass') is-invalid @enderror" name="userpass">
                        <span class="text-danger">
                            @error('userpass')
                                {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                        <label class="form-label" >Age</label>
                        <input type="number" value="{{ old('userage') }}" class="form-control @error('userage') is-invalid @enderror" name="userage">
                        <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" value="{{ old('usercity') }}" class="form-control @error('usercity') is-invalid @enderror" name="usercity">
                        <span class="text-danger">
                            @error('usercity')
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