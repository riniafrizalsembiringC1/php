<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $u = 'Z11.2023.00124';
    $p = 'password123';

    if($username == $u AND $password == $p)
    {
        session_start();
        $_SESSION['nama'] = $username;
        $_SESSION['is_logged_id'] = TRUE;

        header("Location: halaman1.php");
    }
    else
    {
        echo "Username atau password salah";
    }
?>
