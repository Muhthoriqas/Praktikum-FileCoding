<?php

echo "Hello PHP! <br />";
echo date("d-M-Y H:i:s");

// * HTML dalam PHP
echo "<h1 align='center'>Hello Ini HTML dalam PHP</h1>";

//  * Komentar PHP
// echo "Ini Komentar"

//  * Variabel PHP
$nama = "Budi";
$umur = 10;
var_dump($nama);
echo "<br />";
var_dump($umur);
echo "<br />";

//  * Operator PHP
echo "<br />";
$num1 = 20;
$num2 = 30;

echo $num1 + $num2, "<br />";
$kali = $num1 * $num2;
echo $kali;

// * Percabangan
echo "<br />";
$nama = "Cendy";
$umur = 20;

if ($nama == "Windah") {
    echo "Hello WIndah bro";
} else {
    echo "Bukan windah ko $nama";
}

// * Percabangan dalam Percabangan
echo "<br />";
if ($umur > 18) {
    echo "$nama silahkan masuk <br>";
    if ($umur > 50) {
        echo "ndak jadi pak $nama dirumah mki sja istirahat <br>";
    } else {
        echo "kucek lgi di <br /> cocokmi masuk mki $nama <br/ >";
    }
} else if ($umur < 18 && $umur > 10) {
    echo "$nama belum bisa masuk <br />";
} else {
    echo "$nama masih kaci bro nontn tv ae <br />";
}

// * Perulangan
echo "<br />";
for ($i = 1; $i <= 5; $i++) {
    echo "Bilangan ke-$i adalah $i <br />";
}

for ($i = 5; $i >= 1; $i--) {
    echo "Bilangan ke-$i adalah $i <br />";
}

// * Perulangan
echo "<br />";
$i = 10;
while ($i <= 100) {
    echo "hasilnya $i <br />";
    $i = $i + 10;
}

$i = 10;
$j = 1;
echo "<br />";
while ($j <= 10) {
    $kali = $i * $j;
    echo "$i x $j = $kali <br />";
    $j++;
}

// ** Perulangan Do While
echo "<br />";
$num1 = 10;
do {
    $num1 += 10;
    echo "<br> ke- $num1";
} while ($num1 > 100);

// *Function
function welcome($nama)
{
    echo "<br /> hello bro $nama";
}
welcome("Thoriq <br />");
welcome("Umar <br />");
welcome("Jumadil <br />");

function tambah($num1, $num2)
{
    return $num1 + $num2;
}

$x = 10;
$y = 11;
$hasil = tambah($x, $y);
echo "<br/> $x tambah $y = $hasil";

// * Array Biasa
echo "<br />";
$mhs = array("Budi", "Cindy", "Andi");

echo "<br /> Index ke-0 :$mhs[0]";
echo "<br /> Index ke-2 :$mhs[2]";

// * Array Asosiatif
$film = array("GOT" => 10, "Money Heist" => 9, "Squid Game" => 9);
echo "<br />";
echo $film["Money Heist"], "<br />";

foreach ($film as $x => $valueX) {
    echo "index $x bernilai $valueX <br />";
}

// *Multi Array
echo "<br />";
$mhs = array(
    array("H76", "Budi", 80),
    array("H77", "Andi", 100),
    array("H78", "Cindy", 90),
);
echo "Nim ", $mhs[2][1], " Memiliki Nilai: ", $mhs[2][2];

// * Variabel Super Global

// * $_SERVER
echo "<br />";
echo $_SERVER['PHP_SELF'], "<br />";
echo $_SERVER['DOCUMENT_ROOT'], "<br />";
echo $_SERVER['SERVER_NAME'], "<br />";
echo $_SERVER['REQUEST_METHOD'], "<br />";
echo $_SERVER['HTTP_USER_AGENT'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP</title>
</head>

<body>


</body>

</html>