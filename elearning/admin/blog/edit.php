<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM blog where id_blog = '$id' ");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Blog</h4>
        <form action="index.php?page=blog_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-2">
                <label for="judul" class="form-label">Title</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Input title" value="<?= $data['judul']?>">
            </div>
            <div class="mb-2">
            <label for="kategori" class="form-label">Category</label>
            <select name="kategori" id="kategori" class="form-select">
                <option disabled selected>Select Category</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                foreach($query as $data){
                ?>
                <option value="<?=$data['id_kategori']?>"><?=$data['kategori']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
            <label for="content" class="form-label">Content</label>
            <input type="text" name="content" id="content" class="form-control" placeholder="Input category name" >
            </div>
            <div class="mb-2">
            <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Input thumbnail">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=blog");
    }
}else{
    header("Location: Index.php?page=blog");
}
?>