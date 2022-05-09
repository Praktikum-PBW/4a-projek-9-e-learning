<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Blog</h4>
            <a href="index.php?page=blog_create" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Categori</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Thumbnail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM blog JOIN kategori on blog.id_kategori = kategori.id_kategori");
                    $no = 1;
                    foreach($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['kategori'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['content'] ?></td>
                        <td>
                            <img src="../aset/img/<?= $data['thumbnail'] ?>" class="img-fluid img-thumbs" width="100" alt="">
                        </td>
                        <td width="200">
                            <div class="btn-group">
                                <a href="index.php?page=blog_edit&id=<?= $data['id_blog'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                            <a href="index.php?page=blog_delete&id=<?= $data['id_blog'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>