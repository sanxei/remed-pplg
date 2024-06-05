<?php
$id_tamu = $_GET['id_tamu'];
include 'koneksi.php';
$sql = "SELECT * FROM tamu WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit BUuku.</h5>
<a href="?url=buku"> KEMBALI </a>
<hr>
<form action="?url=proses-edit-buku&id_tamu=<?= $id_tamu; ?>" method="post">
    <div>
        <label>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" required>
    </div>
    <div>
        <label>email</label>
        <input value="<?= $data['email'] ?>" type="text" name="email" required>
    </div>
    <div>
        <label>Asal</label>
        <input value="<?= $data['asal_tamu'] ?>" type="text" name="asal_tamu" required>
    </div>
    <div>
        <label>Pekerjaan</label>
        <input value="<?= $data['pekerjaan'] ?>" type="text" name="pekerjaan" required>
    </div>
    <div>
        <label>Keperluan</label>
        <input value="<?= $data['keperluan'] ?>" type="text" name="keperluan" required>
    </div>
    <div>
        <button type="submit"> SIMPAN </button>
        <button type="reset"> KOSONGKAN </button>
    </div>
</form>