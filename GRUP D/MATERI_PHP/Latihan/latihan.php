<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>

<body>
    <!-- GET METHOD -->
    <form action="result.php" method="GET">
        <input type="text" name="nama" placeholder="Masukkan Nama Anda">
        <select class="form-control" name="mood">
            <option>- Pilih Mood Anda -</option>
            <option value="senang">Senang
            </option>
            <option value="sedih">Sedih
            </option>
        </select>
        <input type="submit" name="submit" value="OKE">
    </form>

</body>

</html>