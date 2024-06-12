<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}
$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 50px;
            /* Menambahkan ruang atas agar tidak bertabrakan dengan navbar */
        }

        .container {
            margin-bottom: 50px;
            /* Menambahkan ruang bawah untuk menghindari konten yang menempel di footer */
        }

        .header h3 {
            font-weight: bold;
            color: #0b7fff;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Pendaftaran Siswa Baru</a>
    </div>
</nav>

<div class="container">
    <section class="header mt-4 mb-5">
        <h3>FORMULIR <span style="color: #0b7fff;">EDIT SISWA</span></h3>
    </section>

    <h3>Formulir Edit Siswa</h3>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" name="nama" class="form-control" placeholder="nama lengkap"
                       value="<?php echo $siswa['nama'] ?>" />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat: </label>
                <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <div>
                    <label class="form-check-label me-2">
                        <input type="radio" name="jenis_kelamin" value="laki"
                            <?php echo ($jk == 'laki') ? "checked" : "" ?> class="form-check-input">
                        Laki-laki
                    </label>
                    <label class="form-check-label">
                        <input type="radio" name="jenis_kelamin" value="perempuan"
                            <?php echo ($jk == 'perempuan') ? "checked" : "" ?> class="form-check-input">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama : </label>
                <?php $agama = $siswa ['agama']; ?>
                <select name="agama" class="form-select">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?> value="Islam">Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?> value="Kristen">Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?> value="Hindu">Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?> value="Budha">Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?> value="Atheis">Atheis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" class="form-control" placeholder="nama sekolah"
                       value="<?php echo $siswa['sekolah_asal'] ?>" />
            </div>
        </fieldset>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
