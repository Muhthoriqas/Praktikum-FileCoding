<?php

// * NOTE COMMENT SEMUA CODE DARI 4 SAMAPI 54 BILA DATABASE TELAH DIBUAT

// * Membuat Database dan mengecek apakah database sdh terkoneksi
$servername = "localhost";
$username = "root";
$password = "";
$createDB = "CREATE DATABASE akademikUH";
$koneksiAwal = mysqli_connect($servername, $username, $password);

if (mysqli_query($koneksiAwal, $createDB)) {
    echo "<br />  Berhasi Membuat Database";
} else {
    echo mysqli_error($koneksiAwal);
}

// *Mengkoneksi Database yang telah dibuat tadi dengan PHP
$servername = "localhost";
$username = "root";
$password = "";
$database = "akademikUH";

$koneksi = mysqli_connect($servername, $username, $password, $database);

// *Mengecek Apakah Database sudah terkoneksi
if ($koneksi) {
    echo " <br /> Berhasi Connect Nih";
} else {
    echo mysqli_connect_errno();
}

// * Membuat Table di PHP
$createTable = "CREATE TABLE Mahasiswa (
    id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nim VARCHAR(255) NOT NULL,
    email VARCHAR(255)
)";

// * Cek apakah table sudah berhasil di buat / bisa langsung di lihat di phpmyadminnya
if (mysqli_query($koneksi, $createTable)) {
    echo " <br /> Berhasi Connect dan Buat Table NIh";
} else {
    echo mysqli_connect_errno();
}

// * Menambahkan Data ke table
$addData = "INSERT INTO Mahasiswa(nama,nim,email) VALUES ('Andi','H77','andi@gmail.com')";
if (mysqli_query($koneksi, $addData)) {
    echo "<br /> Berhasi Connect dan Buat Table NIh dan tambahkan data";
} else {
    echo mysqli_connect_errno();
}

// * Mengambil semua isi attribut dari table mahasiswa
$query = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
            </tr>
        </thead>
        </tbody>
        <!-- Menampilkan seluruh isi dari database ke website -->
        <!-- Sesuikan isi row dengan attirbut di tabelnya masing" (bila ada yang berbeda) -->
        <?php while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
            <th>', $row['id'], '</td>
            <th>', $row['nama'], '</td>
            <th>', $row['nim'], '</td>
            <th>', $row['email'], '</td>
            </tr>';
}?>
        </tbody>
    </table>

</body>

</html>