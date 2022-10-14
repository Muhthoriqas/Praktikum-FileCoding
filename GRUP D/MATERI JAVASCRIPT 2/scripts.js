// //TODO: Function JavaScript
// Penulisan Function Biasa
function sayHello() {
  console.log("Hello Funcion js");
}

// Memanggil Function
sayHello();

// Penulisan Function dengan Expressi (Menaruh fungsi ke sebuah variabel)
var welcome = function () {
  console.log("Hello Bro");
};

welcome();

// Penulisan Function dengan Arrow Function (ES6)
var bye = () => {
  console.log("Bye sis");
};

bye();

// Function dengan Parameter
function pertambahan(num1, num2) {
  console.log(num1 + num2);
}

//  Fungsi Parameter untuk Memasukkan data yang sifatnya dinamis (berubah-ubah). Contoh:
pertambahan(20, 10); // num1 = 20 dan num2 = 10
pertambahan(30, 15); // num1 = 30 dan num2 = 15
pertambahan(40, 15); // num1 = 40 dan num2 = 15

// Return Function
// Di JavaScript, sebuah fungsi akan selalu mengembalikan nilai,
// jika fungsi yang dibuat tidak mengembalikan nilai, maka nilai yang dikembalikan adalah undefined.

//Contoh:
function perkalian(a, b) {
  var perkalian = a * b;

  // Jika hanya menggunakan console.log(perkalian) hasilnya tetap ada di console browser tapi di layar website (baris 50-51) tetap akan undifined
  // console.log(perkalian);

  // Apabila tidak menggunakan return function baris (50 dan 51 hasilnya akan undifined)
  return perkalian;
}

// Menyimpan hasil perkalian di suatu variabel
var hasilPerkalian1 = perkalian(10, 10); // a = 10 dn b = 10
var hasilPerkalian2 = perkalian(20, 10);

document.write(hasilPerkalian1);
document.write("<br />", hasilPerkalian2);

// Contoh Function dalam Function
function favorite(nama) {
  function like(makanan) {
    // Fungsi dollar biasanya untuk memanggil variabel
    var result = `${nama} suka ${makanan} karna enak`;

    // Code baris 60 di atas dapat juga ditulis seperti di bawah ini
    // var result = nama + " suka " + makanan + " Karna Enak ";

    return result;
  }
  var suka = like("coto");
  console.log(suka);
}
favorite("Budi");

// //TODO: DOM (Document Object Model)
// Contoh DOM Id (Lihat baris 10 di file index.html)
var makanan = document.getElementById("makanan");
console.log(makanan);

// Contoh DOM Class (Lihat baris 11 di file index.html)
var minuman = document.getElementsByClassName("minuman");
console.log(minuman);

// Contoh DOM Tag (Lihat baris 12 di file index.html)
var huruf3 = document.getElementsByTagName("h3");
console.log(huruf3);

// Contoh DOM Tag (Lihat baris 13 di file index.html)
// Jika menggunkan  querySelector, maka dia mengambil tag dengan css selector (titik untuk class dan pagar untuk id)
var kue = document.querySelector(".dessert2");
var kue2 = document.querySelector("#dessert2");

// Spesifik Query (Lihat baris 15-18 file index.html)
// Kode di bawah mengambil tag html berupa div yang memiliki class p1 dan id b1
var p1b2 = document.querySelector("div.p1#b2");

// //TODO: Event Handler
// Program yang akan di buat adalah untuk menganti text h1 (lihat baris 21 index.html) sesuai input user,
// ketika user menekan button (baris 20 di index.html)

// Pertama kita mengambil tag h1 (baris 21 di index.html) terlebih dahulu dengan menggunakan ID
var ubahNama = document.getElementById("nama");

// Karna pada baris 20 di index.html terdapat event handler onClick dengan isi ChangeUser() maka di file JS tentunya harus kita buat function ChangeUser() dengan isi sesuai kasus kita
function ChangeUser() {
  // Mengambil input dari user
  var inputNama = prompt("Masukkan Nama: ");
  // Karna kita mau mengganti tag h1 pada baris 21 di index.html maka kita buat codingan seperti berikut:
  // ubahNama(tag h1) lalu titik innerHTML (innerHTML fungsinya adalah untuk mengembalikan semua teks, termasuk tag html, yang dikandung oleh sebuah elemen) sama dengan inputNama(berdasarkan inputan user baris 104)
  ubahNama.innerHTML = inputNama;
}
// Panggil Fungsinya
ChangeUser();

// //TODO: Object JavaScript
var FilmKu = {
  // nama,tahun,keterangan adalah properti/key
  // Doraemon dan 2022 adalah value
  nama: "Doraemon",
  tahun: 2022,
  Keterangan: "Kucing pintu ajaib",
};

console.log(FilmKu); // menampilkan semua isi object
document.write("<br />", FilmKu.nama); // hanya menampilkan nama
document.write("<br />", FilmKu.Keterangan); // hanta menampilkan keterangan
