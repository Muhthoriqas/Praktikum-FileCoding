<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Latihan</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>INI HALAMAN RESULT <?php if ($_GET) {
    $namaku = $_GET['nama'];
    $status = $_GET['mood'];
    if ($status == 'senang') {
        echo "<h1>Yey $namaku, Lagi senang</h1>";
    } else {
        echo "<h1>Ikut Sedih nih $namaku</h1>";
    }

}
;?></h1>
        <a href="latihan.php">Balik Home</a>
    </div>

</body>

</html>