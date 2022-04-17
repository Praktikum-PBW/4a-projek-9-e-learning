<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $id_kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));
    $judul = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul']))));
    $content = htmlentities(htmlspecialchars(strip_tags(trim($_POST['content']))));

    // thumbnail
    $extensi_diperbolehkan = array('png','jpg');
    $thumbnail = htmlentities(htmlspecialchars(strip_tags(trim($_FILES['thumbnail']['name']))));
    $x = explode('.',$thumbnail);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if(in_array($extensi, $extensi_diperbolehkan) == true){
        if($ukuran < 10044070){
            move_uploaded_file($file_tmp, '../aset/img/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE blog SET 
            id_kategori = '$id_kategori',
            judul ='$judul',
            content = '$content',
            thumbnail ='$thumbnail' 
            WHERE id_blog='$id'");
            if($query){
                header("Location: index.php?page=blog");
            }else{
                echo "gagal";
            }
        }else{
            echo "Ukuran file terlalu besar";
        }
    }else{
        echo "Ekstensi salah";
    }
}
