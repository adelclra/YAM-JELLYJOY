<?php
// login.php

session_start();
require 'fungsi/connect_db.php';

if (isset($_SESSION['login'])) {
    if ($_SESSION['user_type'] == 'admin') {
        header("Location: Admin/admin_dashboard.php");
        exit();
    } else {
        header("Location: user/dashboard.php");
        exit();
    }
}

$pesan = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek data login dengan prepared statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if (password_verify($password, $data['password'])) {
            $user_type = $data['user_type'];
            $email = $data['email'];

            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['email'] = $email;

            if ($user_type == 'admin') {
                header("Location: Admin/admin_dashboard.php");
            } else {
                header("Location: user/dashboard.php");
            }
            exit();
        } else {
            $pesan .= "<div class='alert-danger'>Username atau Password Salah!</div>";
        }
    } else {
        $pesan .= "<div class='alert-danger'>Username atau Password Salah!</div>";
    }
    $stmt->close();
}

if (isset($_POST["submit"])) {
    $usname = $_POST["usname"];
    $email = $_POST["email"];
    $password = $_POST["pswrd"];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($usname) || empty($email) || empty($password)) {
        array_push($errors, "Semua kolom harus diisi!");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email tidak valid!");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password setidaknya harus 8 karakter!");
    }

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        array_push($errors, "Email sudah ada!");
    }
    $stmt->close();

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $pesan .= "<div class='alert-danger'>$error</div>";
        }
    } else {
        $sql = "INSERT INTO users (username, email, password, user_type) VALUES (?, ?, ?, 'user')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $usname, $email, $password_hash);
        if ($stmt->execute()) {
            $pesan .= "<div class='alert-success'>Akun kamu berhasil teregistrasi.</div>";
        } else {
            $pesan .= "<div class='alert-danger'>Terjadi kesalahan. Silakan coba lagi.</div>";
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="img/logo yamjellyjoy.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>YAM JELLYJOY - log in or sign up</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <?php echo $pesan; ?>
                <form action="logreg.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" value="Log in" class="btn solid">
                    <p class="social-text">Follow us on social media!</p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/yam.jellyjoy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </form>
                <form action="logreg.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="usname" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pswrd" placeholder="Password" required>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Sign up">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Join us and become a member!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>  
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>Log in now!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
