<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    echo"Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}

$id = $_GET['id'];

$sql ="delete from mahasiswa where id = $id";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header('Location: index.php');
} else {
    echo "Gagal menghapus data mahasiswa <a href=index.php>Halaman Index</a>";
}
?>