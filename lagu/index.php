<?php
// menghubungkan file config dengan index
include("../koneksi.php");
session_start(); // Mulai sesi
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>lagu</title>
<style>
    
    /*membuat syling pada table*/

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse
        padding: 10px;
    }
    </style>
    </head>
    <body>
<h2>lagu</h2>
<!-- Tampilkan Notifikasi Jika Ada -->
<?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <!-- Hapus notifikasi setelah ditampilkan -->
    <?php unset($_SESSION['notifikasi']); ?>
<?php endif; ?>
<table>
    <thead>
        <tr align="center">
            <th>#</th>
            <th>judul lagu</th>
            <th>artis</th>
            <th>durasi</th>
            <th><a href="tambah_lagu.php">Tambah lagu</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1; // membuat penomoran data dari 1
        // membuat variable untuk menjalankan query SQL
        $query = $db->query("SELECT * FROM  music_sreaming");
        /* perulangan while akan terus berjalan (menampilkan data) 
        selama kondisi $query bernilai true (adanya data pada 
        table tb_siswa) */
        while ($lagu = $query->fetch_assoc()){
            /* fungsi fetch_assoc digunakan untuk mengambil 
            data perulangan dalam bentuk array */
        ?>
        <!-- kode PHP ditutup untuk menyiapkan kode HTML
        yang akan di looping menggunakan while loop -->
       <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $lagu['judul_lagu'] ?></td>
        <td><?php echo $lagu['artis'] ?></td>
        <td><?php echo $lagu['durasi'] ?></td>
        <td align="center">

        <a href="edit_lagu.php?lagu_id=<?php echo $lagu['lagu_id'] ?>">Edit</a>

        <a onclick="return confirm('anda yakin ingin menghapus data?')"
        href="hapus_lagu.php?lagu_id=<?php echo $lagu['lagu_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
        } /*mengakhiri proses perulangan while yang dimulai pada baris 48*/
        ?>
        </tbody>
    </table>
    <p> Total: <?php echo mysqli_num_rows($query) ?> </p>
    </body>
    </html>