<?php
if(isset($_POST['tambah'])){
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $phone_number = htmlentities(htmlspecialchars(strip_tags(trim($_POST['phone_number']))));
    $level = htmlentities(htmlspecialchars(strip_tags(trim($_POST['level']))));

    $password = sha1($password);


    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null, '$email', '$nama', '$username', '$password', '$phone_number', '$level')");
    if($query){
        header("Location: index.php?page=user");
    }else{
        echo "gagal";
    }
}
?>