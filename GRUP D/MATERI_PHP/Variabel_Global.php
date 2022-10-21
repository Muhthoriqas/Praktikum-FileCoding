<?php
// * $_GET
if ($_GET) {
    echo "Nama :", $_REQUEST['nama'], "<br/>";
    echo "Umur :", $_GET['umur'];
}

// * $_POST
if ($_POST) {
    echo "Nama :", $_POST['NIM'], "<br/>";
    echo "Umur :", $_POST['password'];
}

// * $_REQUEST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Variabel Global</title>
</head>

<body>
    <!-- INFO: BILA INGIN MENCOBA NYALAKAN SALAH SATU METHOD/FORM SAJA -->
    <!-- GET METHOD -->
    <form action="welcome.php" method="GET">
        <input type="text" name="nama" placeholder="Masukkan Nama Anda">
        <input type="number" name="umur" placeholder="Umur Anda...">
        <input type="submit" name="submit" value="OKE">
    </form>
    <br>

    <!-- POST METHOD -->
    <!-- !!! UNCOMMENT BILA INGIN MENCOBA !!! -->
    <!-- <form action="" method="POST">
        <input type="text" name="NIM" placeholder="NIM Anda...">
        <input type="text" name="password" placeholder="Password Anda...">
        <input type="submit" name="submit" value="OKE">
    </form> -->

    <!-- REQUEST -->
    <!-- !!! UNCOMMENT BILA INGIN MENCOBA !!! -->
    <!-- <br />
    <form action="" <?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname">
        <input type="submit">
    </form> -->
</body>

</html>