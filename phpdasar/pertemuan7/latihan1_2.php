<?php 
// $_GET
// disini cara mengisi array associative

// $_GET["nama"] = "Bambang Suyitno"; // nama adalah key nya, Bambang Suyitno adalah isi dari key "nama"
// $_GET["nrp"] = "043040023";

var_dump($_GET);

// dalam get ini ada cara lain untuk menambahkan data di dalamnya 
// yaitu menggunakan string di dalam URL nya/alamat website nya

// seperti contoh ketika menggunakan xampp pada file yang saya punya
// pada link awal
// localhost/phpdasar/pertemuan7/latihan1_2.php  ----/// dengan cara ngubah link seperti di bawah

// localhost/phpdasar/pertemuan7/latihan1_2.php?  ----/// maksud tanda ? disini di baca "saya akan memasukkan data di halaman ini"
                                                        /// di masukkannya ke mana --> ke variabel $_GET

// localhost/phpdasar/pertemuan7/latihan1_2.php?nama=Budi Darsono  ---/// cara penulisannya yaitu bikin pasangan antara Key dan Value
// terus pencet enter, nanti tulisan link nya akan menyesuaikan     //// nama --> adalah key, Budi Darsono --> adalah Value yg akan dimasukkan ke dalam variabel $_GET
// dengan sendiri                                                  //// secara penjelasan sederhananya, saya bisa mengirimkan data ke halaman "link itu", menggunakan metode request GET
                                                                ///  jadi metode request GET itu, data akan di kirimkan ke URL, lalu data tersebut akan di tangkap oleh variabel superglobal $_GET

// di bawah contoh jika ingin menambahkan NRP juga
// http://localhost/phpdasar/pertemuan7/latihan1_2.php?nama=Budi%20Santoso ---> disamping hasil setelah link di atas di enter
// dari link atas menjadi --> http://localhost/phpdasar/pertemuan7/latihan1_2.php?nama=Budi%20Santoso&nrp=098736528 --> di tambah tanda &, mirip yang step pertama
                                                /// di tambah key dan value
                                                    // key -> nrp
                                                    // value -> 098736528






?>