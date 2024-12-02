<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include("../koneksi.php");
// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
       dan menyimpannya ke dalam variabel */
    $lagu_id = $_POST['lagu_id'];
    $judul_lagu = $_POST['judul_lagu'];
    $artis = $_POST['artis'];
    $durasi = $_POST['durasi'];

    // Buat query untuk memperbarui adata siswa
    $sql = "UPDATE music_sreaming SET
           judul_lagu='$judul_lagu',
           artis='$artis',
           durasi ='$durasi'
           WHERE lagu_id=$lagu_id";

   
      $query = mysqli_query($db, $sql);
    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data lagu berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data lagu gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>