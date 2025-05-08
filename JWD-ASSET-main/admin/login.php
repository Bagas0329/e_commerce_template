<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="styling_login_admin.css">
</head>

<body>
    <div class="container">
        <h2>Login Admin</h2>
        <div class="container">
            <form action="proses_login.php" method="POST">
                <label>Username:</label><br>
                <input type="text" name="username" required><br><br>

                <label>Password:</label><br>
                <input type="password" name="password" required><br><br>

                <button type="submit">Login</button>
            </form>
        </div>

        <br><br>

        <p>Belum punya akun? <a href="register.php">Daftar dulu</a></p>
    </div>

</body>

</html>