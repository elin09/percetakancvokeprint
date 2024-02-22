<?php

require '../config/config.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
             alert('user baru berhasil ditambahkan!');
         </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/style/style.css">

    <title>Niagahoster Register</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="password2" id="password2" required>
            </div>
            <div class="input-group">
                <button name="register" type="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="../auth/index.php">Login </a></p>
        </form>
    </div>
</body>

</html>