<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center; /* Posisikan elemen ke tengah secara horizontal */
            align-items: center; /* Posisikan elemen ke tengah secara vertikal */
            height: 100vh; /* Pastikan konten berada di tengah layar */
            margin: 0;
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .container {
            max-width: 500px; /* Lebar container diperbesar */
            padding: 30px; /* Padding diperbesar */
            border: 2px solid #007bff; /* Warna border */
            border-radius: 10px; /* Border-radius diperbesar */
            background-color: #fff; /* Warna latar belakang formulir */
        }
        header {
            text-align: center;
            margin-bottom: 30px; /* Margin-bottom diperbesar */
        }
        header h3 {
            color: #007bff; /* Warna biru */
            font-size: 28px; /* Ukuran font judul diperbesar */
            margin-bottom: 20px; /* Margin-bottom diperbesar */
        }
        form fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        form p {
            margin-bottom: 20px; /* Margin-bottom diperbesar */
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px; /* Ukuran font label diperbesar */
        }
        .gender-options {
            display: flex;
            align-items: center;
        }
        .gender-options label {
            margin-right: 20px; /* Margin-right untuk menambahkan jarak antara label dan tombol */
        }
        input[type="radio"] {
            margin-right: 5px; /* Margin-right untuk menambahkan jarak antara tombol radio */
        }
        input[type="text"],
        textarea {
            width: calc(100% - 110px); /* Lebar input dikurangi lebar label */
            padding: 15px; /* Padding diperbesar */
            border: 2px solid #007bff; /* Warna border */
            border-radius: 5px; /* Border-radius diperbesar */
            font-size: 18px; /* Ukuran font input diperbesar */
        }
        input[type="submit"] {
            width: 100%;
            padding: 15px; /* Padding diperbesar */
            background-color: #28a745; /* Warna hijau */
            border: none;
            color: #fff;
            border-radius: 5px; /* Border-radius diperbesar */
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px; /* Ukuran font tombol diperbesar */
        }
        input[type="submit"]:hover {
            background-color: #218838; /* Warna hijau yang lebih gelap saat dihover */
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px; /* Ukuran font back-link diperbesar */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>FORMULIR PENDAFTARAN SISWA BARU</h3>
        </header>
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama lengkap" required>
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" required></textarea>
                </p>
                <p class="gender-options">
                    <span>Jenis Kelamin:</span>
                    <label><input type="radio" name="jenis_kelamin" value="laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama" required>
                        <option disabled selected>Pilih agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required>
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar">
                </p>
            </fieldset>
        </form>
        <a href="index.php" class="back-link">Kembali</a>
    </div>
</body>
</html>
