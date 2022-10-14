// Nomor 1
var jawaban1 = document.querySelector("div.p1#b2");

//  Nomor 2
var namaku = prompt("Masukan nama: ");
main(namaku);

var nama = document.getElementById("nama");
function sayHello() {
  var inputNama = prompt("Masukkan Nama:");
  nama.innerText = inputNama;
}

// Nomor 3
var FilmKu = {
  nama: "Doraemon",
  keteranganFilm: "Kucing pintu ajaib",
};

console.log(FilmKu.nama);

// Nomor 4
function main(nama) {
  var makanan = "Udang";
  var minuman = "Air Putih";

  function favorite() {
    var result = `${nama} suka makanan ${makanan} dan minuman ${minuman}`;
    return result;
  }
  console.log(favorite(makanan, minuman));
}
