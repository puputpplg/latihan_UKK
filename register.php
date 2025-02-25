<?php
include // Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'ukk2025_todolist');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($koneksi, $query);

    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="text-center mb-4">Daftar</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
                    </form>
                    <div class="text-center mt-3">
                        <small>Sudah punya akun? <a href="login.php">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
