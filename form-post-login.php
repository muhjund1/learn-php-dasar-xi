<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Username dan password wajib diisi';
    } else if ($username === "admin" && $password === "123456" ) {
        echo "Login berhasil! Selamat datang, $username";
    } else {
        echo "Username dan Password Kau salah!";
    }
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>

        <?php if ($error): ?>
            <p styke="color: red;"><?= $error ?></p>
            <?php endif; ?>
        </body>
        </html>
