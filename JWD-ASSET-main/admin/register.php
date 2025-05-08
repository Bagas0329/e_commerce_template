<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>
    <link rel="stylesheet" href="styling_register_admin.css">
</head>

<body>
    <div class="Container">
        <h2>Register Admin</h2>
        <form action="proses_register.php" method="POST">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit">Register</button>
        </form>

        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>

</body>

</html>