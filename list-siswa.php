<?php include ("config.php"); ?>

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
            padding-top: 50px; /* Menambahkan ruang atas agar tidak bertabrakan dengan navbar */
        }
        .container {
            margin-bottom: 50px; /* Menambahkan ruang bawah untuk menghindari konten yang menempel di footer */
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .table {
            background-color: #fff;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            margin-right: 5px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Pendaftaran Siswa Baru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="form-daftar.php">Tambah Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="mt-4">SISWA YANG SUDAH MENDAFTAR</h3>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-primary btn-sm'>Edit</a>";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p class="mb-0">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <footer class="footer">
        <div class="container">
            <span>&copy; <?php echo date("Y") ?> Pendaftaran Siswa Baru | coding</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
