<?php 
// mencoba review kembali latihan sebelumnya tentang array
// Array
// membuat array

// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["Januari", "Februaru", "Maret"];

// array yang beda beda tipe datanya
$arr = [100, "teks", true];

// menampilkan array

// versi debugging
var_dump($hari); //yang ditampilkannya akan lebih detail
echo "<br>";
print_r($bulan); //hasil penulisannya bakal lebih ringkas, tidak ada tipe data, tidak ada jumlah karakter didalam elemennya

// menampilkan array bisa dengan hanya 1 elemen saja baru bisa menggunakan echo, karena array tidak bisa di echo begitu saja
// menampilkan 1 elemen pada array
//echo $arr; // kalau seperti di samping itu tidak akan jalan dan akan terjadi error, echo tidak bisa untuk mencetak array, array secara luas
            // echo hanya bisa mencetak isi dari array, satu elemen dalam array nya
 echo $arr[0]; // harus dengan cara ditambahkan indeksnya berapa di kurung


?>