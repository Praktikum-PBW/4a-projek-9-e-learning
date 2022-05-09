<div class="row">
    <div class="col-md-12">
        <h4>Tambah User</h4>
        <form action="index.php?page=user_proses" method="post">
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email">
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password">
            </div>
            <div class="mb-2">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Masukkan phone_number">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <input type="submit" value="Add" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>