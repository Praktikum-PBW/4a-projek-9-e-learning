<?php
if (isset($_POST['login'])) {

    include 'lib/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        if ($data['level'] == "admin") {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header("location: admin/index.php");
        } else if ($data['level'] == "user") {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header("location: front/index.html");
        }
    } else {
        $_SESSION['error'] = "Username atau password salah";
        header("Location:login.php");
    }
}
