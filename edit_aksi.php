<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $pros = $_POST['progam_studi'];

    // Tambahkan validasi keahlian tidak boleh kosong
    if (!isset($_POST['keahlian']) || empty($_POST['keahlian'])) {
        echo "Keahlian tidak boleh kosong <a href='index.php'>Halaman Index</a>";
        exit; // Berhenti jika keahlian kosong
    }

    $keahlian = implode(",", $_POST['keahlian']);

    $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jk', progam_studi = '$pros', keahlian = '$keahlian' WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
        exit;
    } else {
        echo "Gagal merubah data mahasiswa: " . mysqli_error($koneksi);
        echo "<br><a href='index.php'>Halaman Index</a>";
        exit;
    }
} else {
    echo "Anda tidak mempunyai akses <a href='index.php'>Halaman Index</a>";
}
?>
