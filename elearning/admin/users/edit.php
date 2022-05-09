<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM user where id_user = '$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit User</h4>
        <form action="index.php?page=user_update" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
           <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email" value="<?= $data['email'] ?>">
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username"  value="<?= $data['username'] ?>">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password">
            </div>
            <div class="mb-2">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Masukkan phone number"value="<?= $data['phone_number'] ?>">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="admin" <?php if ($data['level'] == "admin") echo "selected" ?>>Admin</option>
                    <option value="user" <?php if ($data['level'] == "user") echo "selected" ?>>User</option>
                </select>
            </div>
            <input type="submit" value="edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=kategori");
    }
}else{
    header("Location: Index.php?page=kategori");
}
?>