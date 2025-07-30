<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center" style="max-width:600px">
        <h1 class="h3 my-4">Register</h1>

        <form action="_actions/create.php" method="post" class="mb-3">
            <input type="text" name="name" placeholder="Name" required class="form-control mb-2">
            <input type="email" name="email" placeholder="Email" required class="form-control mb-2">
            <input type="text" name="phone" placeholder="Phone" required class="form-control mb-2">
            <textarea name="address" placeholder="Address" required class="form-control mb-2"></textarea>
            <input type="password" name="password" placeholder="password" required class="form-control mb-2">
            <button class="btn btn-primary w-100">Register</button>
        </form>

        <a href="index.php">Login</a>
    </div>
</body>
</html>