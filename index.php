<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            text-align: center;
        }
        .logo {
            width: 200px; /* Ubah lebar logo */
            height: auto;
            margin-bottom: 20px;
        }
        .header h3 {
            color: #7952b3; /* Warna teks biru tua */
            margin-bottom: 10px;
            font-size: 24px; /* Ubah ukuran teks judul */
        }
        .welcome-text {
            color: #28a745; /* Warna teks hijau */
            margin-bottom: 30px;
            font-size: 18px; /* Ubah ukuran teks selamat datang */
        }
        .menu h5 {
            color: #007bff; /* Warna teks biru */
            margin-bottom: 20px;
            font-size: 20px; /* Ubah ukuran teks menu */
        }
        .btn {
            margin: 0 5px;
            transition: background-color 0.3s; /* Efek transition saat dihover */
            font-size: 18px; /* Ubah ukuran teks tombol */
        }
        .btn-pendaftar {
            background-color: #dc3545 !important; /* Warna merah */
            border-color: #dc3545 !important;
            color: #fff !important; /* Warna teks putih */
            transition: background-color 0.3s; /* Efek transition saat dihover */
        }
        .btn-pendaftar:hover {
            background-color: #c82333 !important; /* Warna merah yang lebih gelap saat dihover */
            border-color: #bd2130 !important;
        }
        .status-message {
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px; /* Ubah ukuran teks pesan status */
        }
        .status-message.success {
            color: #28a745; /* Warna teks hijau untuk pesan sukses */
        }
        .status-message.error {
            color: #dc3545; /* Warna teks merah untuk pesan error */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logosmk.png" alt="Logo Sekolah" class="logo">
            <h3>Pendaftaran Siswa Baru SMKN2 PKL</h3>
            <p class="welcome-text">Selamat datang di SMK Coding</p>
        </div>

        <div class="menu">
            <h5>Silahkan Pilih Menu :</h5>
            <a href="form-daftar.php"><button type="button" class="btn btn-primary btn-lg">Daftar Baru</button></a> <!-- Menambahkan kelas btn-lg untuk membuat tombol lebih besar -->
            <a href="list-siswa.php"><button type="button" class="btn btn-pendaftar btn-lg">Pendaftar</button></a> <!-- Menambahkan kelas btn-lg untuk membuat tombol lebih besar -->
        </div>

        <?php if(isset($_GET['status'])): ?>
        <p class="status-message <?php echo $_GET['status'] == 'sukses' ? 'success' : 'error'; ?>">
            <?php echo $_GET['status'] == 'sukses' ? 'Pendaftaran Siswa Baru Berhasil' : 'Pendaftaran Gagal'; ?>
        </p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
