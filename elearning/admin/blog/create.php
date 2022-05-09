<div class="row">
    <div class="col-md-12">
        <h4>Add Blog</h4>
        <form action="index.php?page=blog_proses" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="judul" class="form-label">Title</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Input title">
            </div>
            <div class="mb-2">
                <label for="id_kategori" class="form-label">Category</label>
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
                <textarea name="content" id="content" class="form-control" placeholder="Input Content"></textarea>
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Input thumbnail">
            </div>
            <input type="submit" value="Add" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>