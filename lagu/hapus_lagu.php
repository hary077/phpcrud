<?php
session_start();//mulai sesi
include("../koneksi.php");

//periksa apakah ada id yang dikirim melalui url
if (isset($_GET['lagu_id'])){
//ambil id dari url
$lagu_id = $_GET['lagu_id'];

//baut query untuk menghapus data siswa berdasarkan id 
$sql = "DELETE FROM music_sreaming WHERE lagu_id=$lagu_id";
$query = mysqli_query($db, $sql);
//simpan pesan notifikasi dalam sesi berdasarkan hasil query
if ($query) {
    $_SESSION['notifikasi'] = "data siswa berhasil dihapus!";
}else{
    $_SESSION['notifikasi'] = "data siswa gagal dihapus";
}


//alikan ke halaman index.php
header('location: index.php');

}else{
    //jika akses langsung tanpa id, tampilan pesan error
    die("Akses ditolak..");
}
?>