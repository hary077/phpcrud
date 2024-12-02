<?php
//termasuk file konfigurasi
include("../koneksi.php");

//mengabil id siswa dari parameter url
$lagu_id = $_GET['lagu_id'];

//menggabil data siswa ke databases berdasarkan id
$query = $db->query("SELECT * FROM music_sreaming WHERE lagu_id = '$lagu_id'");
$lagu = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>lagu</title>
</head>
<body>
    <h3>Tambah lagu</h3>
    <form action="proses-edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
<input type="hidden" name="lagu_id" value="<?php echo $lagu['lagu_id']; ?>">
<table border="0">
<tr>
<td>judul_lagu</td>
<td>
<input type="text" name="judul_lagu"
value="<?php echo $lagu['judul_lagu']; ?>" required>
</td>
</tr>
<tr>
<td>artis</td>
<td>
<input type="text" name="artis"
value="<?php echo $lagu ['artis']; ?>">
</td>
</tr>
<tr>
<td>durasi</td>
<td>
<input type="text" name="durasi"
value="<?php echo $lagu ['durasi']; ?>">
</td>
</tr>
<tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>