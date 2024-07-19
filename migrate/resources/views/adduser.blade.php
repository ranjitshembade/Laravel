<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-6"> 
                <h1>Add New User</h1>
                <form action="{{route('addUser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="mobileno" class="form-label">Mobile No</label>
                        <input type="mobileno" class="form-control" id="mobileno" name="usermobileno">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" class="form-control" id="address" name="useraddress">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="usercity">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>