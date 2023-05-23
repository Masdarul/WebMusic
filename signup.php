
<?php

session_start();

include('db_cn.php');
$msg = false;
if(isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if ($user_password === $user_re_password) {
            $query = "insert into user (nama, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($cn, $query);
            header("Location: login.php");
        } else {
            // echo "password salah";
            $msg = "Password tidak cocok";
        };
    };
}
?>
<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_signup.css">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form action="signup.php" method="POST">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Nama :</label>
                        <input type="text" name="user_name" placeholder="Nama Anda" require>
                    </div>
                    <div class="card">
                        <label for="email">Email :</label>
                        <input type="email" name="user_email" placeholder="Email Anda" require>
                    </div>
                    <div class="card">
                        <label for="password">Password :</label>
                        <input type="password" name="user_password" placeholder="Password Anda" minlength="8" require>
                    </div>
                    <div class="card">
                        <label for="re-password">Konfirmasi Password :</label>
                        <input type="password" name="user_re_password" placeholder="konfirmasi Password Anda" minlength="8" id="confirm_password" require>
                    </div>
                    <input type="submit" value="Sign Up" class="submit" name="submit">
                    <div class="check">
                        <input type="checkbox"> <span> Ingatkan Saya</span>
                    </div>
                    <p>kamu punya akun? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="login.png" width="90%">
            <?php 
            if ($msg) {
                echo  ("<h3>$msg</h3>");
            }
            
            ?>
        </div>
        <script src="jquery.js"></script>
    </header>
</body>

</html>