<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM blog WHERE id_blog='$id'");

    if ($query) {
        header("Location: index.php?page=blog");
    } else {
        echo "Gagal";
    }
}
?>