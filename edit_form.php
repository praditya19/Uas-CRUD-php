<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

$sql ="select * from mahasiswa where id = $id";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

$checked = explode(",", $mhs['keahlian']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Update Data Mahasiswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .btn-space{
            margin-right: 8px
        }
    </style>
</head>
  <body>
    <div class="container">
        <div class="col -md-12">
            <div class="row">
                <h3 style="margin: 20px 0px 20px 0px" class="col-11">Update Data Mahasiswa</h3>
                <a href="index.php" style="margin: 20px 0px 20px 50px" class="btn btn-close"></a>
            </div>
            <form method="post" action="edit_aksi.php" class="form_horizontal">
                <input type="hidden" name="id" value="<?php echo $mhs['id']?>">
                <input type="hidden" name="nim" value="<?php echo $mhs['nim']?>">
                <div class="mb-3">
                    <label class="form-label fw-bold">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs['nim']?>" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs['nama']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin</label>
                    <div class="fprm-check">
                        <input class="form-check-input"type="radio" name="jenis_kelamin" value="pria" <?php if ($mhs['jenis_kelamin'] == 'pria') echo 'checked'?>>
                        <label class="form-check-label">
                            pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"type="radio" name="jenis_kelamin" value="wanita" <?php if ($mhs['jenis_kelamin'] == 'wanita') echo 'checked'?>>
                        <label class="form-check-label">
                            wanita
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Program Studi</label>
                    <select class="form-select" name="progam_studi">
                        <option disabled>--Pilih Program Studi--</option>
                        <option value="teknik infotmatika" <?php if ($mhs['progam_studi'] == 'teknik informatika') echo 'selected'?>>Teknik Informatika</option>
                        <option value="sistem informasi" <?php if ($mhs['progam_studi'] == 'sistem informasi') echo 'selected'?>>Sistem Informasi</option>
                        <option value="ilmu komputer" <?php if ($mhs['progam_studi'] == 'ilmu komputer') echo 'selected'?>>Ilmu Komputer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Keahlian</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="data mining" <?php if (in_array("data mining", $checked)) echo 'checked'?>>
                        <label class="form-check-label">
                            Data Mining
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="enterprise architecture" <?php if (in_array("enterprise architecture", $checked)) echo 'checked'?>>
                        <label class="form-check-label">
                            Enterprise Architecture
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="image processing" <?php if (in_array("image processing", $checked)) echo 'checked'?>>
                        <label class="form-check-label">
                            Image Processing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="software engineering" <?php if (in_array("software engineering", $checked)) echo 'checked'?>>
                        <label class="form-check-label">
                            Software Engineering
                        </label>
                    </div>  
                </div>
                <div class="form-group mt-4">
                    <button type="reset" name="reset" class="btn btn-danger btn-space">Cencel</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>