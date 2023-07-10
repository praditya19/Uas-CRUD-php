<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Tambah Data Mahasiswa::</title>
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
                <h3 style="margin: 20px 0px 20px 0px" class="col-11">Tambah Data Mahasiswa</h3>
                <a href="index.php" style="margin: 20px 0px 20px 50px" class="btn btn-close"></a>
            </div>
            <form method="post" action="tambah_aksi.php" class="form_horizontal">
                <div class="mb-3">
                    <label class="form-label fw-bold">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin</label>
                    <div class="fprm-check">
                        <input class="form-check-input"type="radio" name="jenis_kelamin" value="pria">
                        <label class="form-check-label">
                            pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"type="radio" name="jenis_kelamin" value="wanita">
                        <label class="form-check-label">
                            wanita
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Program Studi</label>
                    <select class="form-select" name="progam_studi">
                        <option disabled selected>--Pilih Program Studi--</option>
                        <option value="teknik infotmatika">Teknik Informatika</option>
                        <option value="sistem informasi">Sistem Informasi</option>
                        <option value="ilmu komputer">Ilmu Komputer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Keahlian</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="data mining">
                        <label class="form-check-label">
                            Data Mining
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="enterprise architecture">
                        <label class="form-check-label">
                            Enterprise Architecture
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="image processing">
                        <label class="form-check-label">
                            Image Processing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="software engineering">
                        <label class="form-check-label">
                            Software Engineering
                        </label>
                    </div>  
                </div>
                <div class="form-group mt-4">
                    <button type="reset" name="reset" class="btn btn-danger btn-space">Cencel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>