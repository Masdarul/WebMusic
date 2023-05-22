<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_signup.css">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
<header>
    <div class="left_bx1">
        <div class="content">
            <form action="#" method="POST">
                <h3>Login</h3>
                <div class="card">
                    <label for="name">Nama :</label>
                    <input type="text" name="user_name" placeholder="Nama Anda" required>
                </div>
                <div class="card">
                    <label for="password">Password :</label>
                    <input type="password" name="user_password" placeholder="Password Anda" required minlength="8">
                </div>
                <input type="submit" value="Sign Up" class="submit">
                <div class="check">
                    <input type="checkbox"> <span> Ingatkan Saya</span>
                </div>
                <p>belum punya akun? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    <div class="right_bx1">
        <img src="login.png" width="90%">
        <h3>Password Salah</h3>
    </div>
    <script src="jquery.js"></script>
</header>
</body>

</html>