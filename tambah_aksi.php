<?php
include("koneksi.php");

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $pros = $_POST['progam_studi'];
    $keahlian = implode(",",$_POST['keahlian']);
    

    $sql = "insert into mahasiswa (nim, nama, jenis_kelamin, progam_studi, keahlian) values ('$nim', '$nama', '$jk', '$pros','$keahlian')";
    $query = mysqli_query($koneksi, $sql);


    if($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menambahkan data mahasiswa <a href=index.php>Halaman Index</a>";
    }
} else {
    echo"Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
?>
