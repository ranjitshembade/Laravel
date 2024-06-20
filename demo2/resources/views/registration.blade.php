@include('pages.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
        section {
            padding: 20px 0;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-register {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-register:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


    <section>
        <form method="POST" action="{{ route('user.register') }}">
            @csrf 
            <h2>User Registration</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-register">Register as User</button>
        </form>

        <form method="POST" action="{{ route('admin.register') }}">
            @csrf
            <h2>Admin Registration</h2>
            <div class="form-group">
                <label for="adminUsername">Admin Username</label>
                <input type="text" id="adminUsername" name="adminUsername" required>
            </div>
            <div class="form-group">
                <label for="adminEmail">Admin Email</label>
                <input type="email" id="adminEmail" name="adminEmail" required>
            </div>
            <div class="form-group">
                <label for="adminPassword">Admin Password</label>
                <input type="password" id="adminPassword" name="adminPassword" required>
            </div>
            <button type="submit" class="btn-register">Register as Admin</button>
        </form>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
