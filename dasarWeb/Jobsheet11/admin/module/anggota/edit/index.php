<?php
$id = $_GET['id'] ?? null;
$query = "SELECT a.*, j.jabatan, u.username FROM anggota a
          LEFT JOIN jabatan j ON a.jabatan_id = j.id
          LEFT JOIN user u ON a.user_id = u.id
          WHERE a.user_id = '$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">
    <div class="row">
        <?php
        require 'admin/template/menu.php';
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit Anggota</h1>
            </div>

            <form action="fungsi/edit.php?anggota=edit" method="POST">
                <div class="row">
                    <!-- Card Edit Data Anggota -->
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Edit Data Anggota</strong>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['user_id']); ?>">

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select class="form-select" id="jabatan" name="jabatan" required>
                                        <option value="">Pilih Jabatan</option>
                                        <?php
                                        $query2 = "SELECT * FROM jabatan ORDER BY jabatan ASC";
                                        $result2 = mysqli_query($koneksi, $query2);
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            $selected = ($row['jabatan_id'] == $row2['id']) ? 'selected' : '';
                                            echo '<option value="'.htmlspecialchars($row2['id']).'" '.$selected.'>'.htmlspecialchars($row2['jabatan']).'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="jkL" name="jenis_kelamin" value="L" <?php echo ($row['jenis_kelamin'] === 'L') ? 'checked' : ''; ?> required>
                                            <label class="form-check-label" for="jkL">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="jkP" name="jenis_kelamin" value="P" <?php echo ($row['jenis_kelamin'] === 'P') ? 'checked' : ''; ?> required>
                                            <label class="form-check-label" for="jkP">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo htmlspecialchars($row['alamat']); ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo htmlspecialchars($row['no_telp']); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Edit Data Login -->
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Edit Data Login</strong>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small class="form-text text-muted">Kosongi jika tidak ingin mengganti password.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Ubah</button>
                                <a href="index.php?page=anggota" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true"></i> Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>
