<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $phone_number = htmlentities(htmlspecialchars(strip_tags(trim($_POST['phone_number']))));
    $level = htmlentities(htmlspecialchars(strip_tags(trim($_POST['level']))));

    
    
    if(empty($password)){
    $query = mysqli_query($koneksi, "UPDATE user SET  email ='$email', nama ='$nama', username ='$username', phone_number ='$phone_number', level ='$level'
    WHERE id_user='$id'");
    }else{
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE user SET 
        email ='$email',
        nama ='$nama',
        username ='$username',
        password ='$password',
        phone_number ='$phone_number',
        level ='$level'
        WHERE id_user='$id'");
    }

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal"; 
    }
}
