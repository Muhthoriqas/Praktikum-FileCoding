<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>

<body>

    <?php
if (isset($_SESSION['nama'])) {
    echo "<h1>Selamat Datang ," . $_SESSION['nama'] . "</h1>";
    echo "<a href='login.php'>Logout </a>";
    session_unset();
} else {
    echo "<h1>Siapa Anda ?<h1>";
    echo "<a href='login.php'>Logout </a>";
}
?>
</body>

</html>