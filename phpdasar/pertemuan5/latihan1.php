<?php 
// array
// sebuah variabel yang bisa menampung lebih dari 1 nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index atau bisa disebut urutan array, yang dimulai dari 0

// membuat array 
// cara lama 
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false]; 

// menampilkan array
// echo tidak bisa menampilkan variable array
// untuk array bisa tampil memakai -> var_dump() / print_r()
// echo $hari; // <- ini sala

// var_dump($hari); // fungsi var_dump, bisa menampilkan index dari array yang urutan array itu, 
                // tipe data value nya, maksudnya value adalah nilai nya, nilainya termasuk tipe data apa
// echo "<br>";

// print_r($bulan); // beda dengan yang memakai var_dump, yang ini hanya akan menampilkan key index yaitu urutan
                // dan value maksudnya nilai, isi dari urutan index tersebut

// echo "<br>";
// menampilkan 1 elemen pada array 
// echo $arr1[0]; // fungsi 0 dalam kurungan itu adalah memilih urutan mana value yang ada didalam dari array arr1
            // karena dari php urutan array itu dimulai dari 0, jari kepilihnya adalah 123
// echo "<br>";

// echo $bulan[1]; // sama yang ada diatas ini bedanya pake index no 1, jadi yang bakal keluar atau di cetak string -> februari


// menambahkan elemen baru pada array
var_dump($hari); // untuk melihat array yang belum di ubah
$hari[] = "Kamis"; // ini akan menambahkan elemen/nilai di akhir urutan array ->hari<-
$hari[] = "Jum'at"; // seperti contoh di atas ini akan juga menambahkan elemen setelah penambahan nilai "kamis" diatas
                    // pokok nya codingan yang paling bawah eksekusi nya paling akhir, alhasil eksekusi penambahan elemen array
                    // "jum'at" akan di cetak, setelah penambahan elemen/nilai array "kamis"

echo "<br>";
var_dump($hari); // pengecekan array yang sudah di ubah



?>