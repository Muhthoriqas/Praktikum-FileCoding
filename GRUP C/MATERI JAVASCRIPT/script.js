// Jika ingin menjalakan/melihat output dari file js menggunakan node.js
// Gunakan perintah node (nama file js) contohnya di sini node script.js
console.log("Hello JS Node");

// Contoh Tipe data Number
var a = 10;
var a2 = 20.5;
var a3 = -10.123;
console.log(a, a2, a3);
console.log("Tipe data a3 adalah", typeof a3);

// Contoh TIpe data String
var b = "Hello World";
var b2 = '"Hello Saya bejajar JS"';
console.log(b);
console.log("Tipe data b2 adalah", typeof b2);

var c = true;
var c2 = false;
console.log("Saya Lapar is", c);
console.log("Saya malas is", c2);

// Contoh Tipe data null
var d = null;
// Contoh TIpe data undifined
var e;
console.log(d);
console.log(e);

// Perbedaan VAR, LET, dan CONST
// VAR dan LET nilainya dapat di ganti sedangkan const tidak
var f = 100;
f = 300;
console.log(f); // Outputnya akan 300

let f2 = "Hello";
f2 = "Hai";
console.log(f2); // Outputnya akan Hai

// Uncomment untuk melihat hasil
// const f3 = "Kamu";
// f3 = "Dia";
// // Akan Error
// console.log(f3);

// Contoh Operator Aritmatika dan Assigment
var num1 = 10;
var num2 = 20;
console.log(num1 + num2); // 30
var result = 100;
result += num2; // result = result + 20 = 120
result -= num1; // result = 120 - 10 = 110
console.log("Output Aritmatika dan Assigment", result); // 110

// Perbandingan
var num3 = 5;
var num4 = 10;
var num5 = "5";
console.log("Apakah num3 == num4 ?", num3 == num4);
console.log(num3 == num5); // True karena perbandingan == tidak mengecek tipe datanya
console.log(num3 === num5); // False karena perbandingan === mengecek tipe datanya juga

// Contoh Operator Logika
console.log("Lawan dari false", !false); // true

// Contoh Array JS
var makanan = ["Coto", "Ayam", 20, true];

//Index JS dimulai dari nol
console.log(makanan[0]); // Coto

// Menampilkan Seluruh Array
console.log(makanan);

// Mengubah index 1 array makanan dari ayam menajdi ikan
makanan[1] = "Ikan";
console.log(makanan[1]); // Ikan

// Contoh Method Array
//  Method push akan menambahkan nilai baru pada index terkahir array
makanan.push = "Bakso";
console.log(makanan);

// Contoh Percabangan
var umur = 17;

// Jika umur lebih dari atau samdengan 18 makan isi dari if (baris 89) akan diesekusi
// Jika tidak maka baris 91 akan diekeksui
if (umur >= 18) {
  console.log("Silahkan Masuk Bioskop");
} else {
  console.log("Anda tidak bisa masuk");
}

// Contoh Lain Perbangan
var suhu = 15;
// Jika suhu > 25 baris 99 diekeksui jika tidak , maka baris 101 akan diekeksui,
// Jika tidak lagi maka baris 104 akan dieksekusi
if (suhu > 25) {
  console.log("Hari ini panas");
} else if (suhu < 25 && suhu >= 15) {
  console.log("Hari ini hangat");
} else {
  console.log("Hari ini dingin");
}

// Contoh Switch Case
var hari = "Jumat";
switch (hari) {
  // Jika hari adalh minggu maka baris 112 akan diekeksui
  case "Minggu":
    console.log("Libur");
    // Keyword break berfungsi untuk menghetikan pengecekan
    break;
  case "Jumat":
    console.log("Pratikum");
    break;
  // Isi dari default akan dieksekusi jika tidak ada case yang memenuhi
  default:
    console.log("IDK Hari");
}

// Contoh Perulangan For
// var i = 1 artinya nilai awalnya 1
//  i<5 artinya perulangan ini akan dieksekusi bila i masih kurang dari 5
//  i++ berfungsi untuk tidak terjadi infinity loop (agar i bisa >= 5 agar perulangan berhenti)
for (var i = 1; i < 5; i++) {
  console.log("Ini Nomor:", i);
}

// Contoh Megambil seluruh nilai array menggunakan perulangan
var makanan = ["Coto", "Ayam", "Ikan"];
// Makanan.length menghitung isi array
for (let i = 0; i < makanan.length; i++) {
  console.log(makanan[i]);
}

//  Contoh Perulangan While
var i = 0;
// Perulangan while hanya mengecek apakah kondisi true atau tidak
while (i < 3) {
  console.log("Hari ke:", i);
  i++;
}

// Contoh Penganbungan Perulangan dan Percanbangan:

// Kasus:
// var Jumat = true;
// var i = 1;
// ketika i < 5 program akan terus mengelurkan output hari ke : 1, hari ke: 2, dst smpe hari ke 4
// Ketik i == 5 , ubah variabel jumat menjadi false .Uutputnya hari ini jumat praktikum dan program berhenti

var jumat = true;
var i = 1;

while (jumat) {
  // Jika i == 5
  if (i == 5) {
    console.log("Hari ini adalah hari jumat.");
    // Ubah jumat menjadi false untuk menghetikan program
    jumat = false;
  } else {
    console.log("Hari ini adalah hari ke", i);
  }
  //  Untuk menambhkan nilai i agar tidak inifity loop
  i++;
}

// Contoh Perulangan bersarang dan mengambil input dari user

// Prompt adalah fungsi dialog untuk mengambil input dari user pada browser
var nama = prompt("Masukkan Nama Anda: ");
var libur = prompt("Hari ini libur kah? YA atau TIDAK");

if (libur == "YA") {
  var tugas = prompt("Sudah kerja tugas? YA atau TIDAK");
  if (tugas == "YA") {
    console.log("Okeh Chill", nama);
  } else if (tugas == "TIDAK") {
    console.log("Kerja tugas nah", nama);
  } else {
    console.log("Input Salah masukkkan input YA atau TIDAK");
  }
} else if (libur == "TIDAK") {
  console.log("Ngampus pale", nama);
} else {
  console.log("Input Salah");
}
