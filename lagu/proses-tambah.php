<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include("../koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
       dan menyimpannya ke dalam variabel */
    $judul_lagu = $_POST['judul_lagu'];
    $artis = $_POST['artis'];
    $durasi = $_POST['durasi'];
    

    // Menyusun query SQL untuk menambahkan data ke tabel 'tb_siswa'
    $sql = "INSERT INTO music_sreaming 
            ( judul_lagu, artis, durasi)
 VALUES ( '$judul_lagu', '$artis', '$durasi')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
         $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>



