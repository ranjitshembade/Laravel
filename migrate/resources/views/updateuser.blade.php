<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update User</h1>
                <form action="{{route('update.user', $data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $data->name}}" class="form-control" id="name" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="mobileno" class="form-label">Mobile No</label>
                        <input type="mobileno" value="{{ $data->mobile_no}}" class="form-control" id="mobileno" name="usermobileno">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" value="{{ $data->address}}" class="form-control" id="address" name="useraddress">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="usercity">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</body>
</html>