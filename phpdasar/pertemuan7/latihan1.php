<?php 
// Variable Scope / lingkup variabel

$x = 10; // <== di kiri ini yang disebut variabel lokal
// echo $x; // cara cetak secara umum

function tampilx() {
    // jadi jikalau ingin variabel di luar function bisa digunakan memakai syntax yg namanya global, terus nama variabel
    // nama variabel yang di luar function tersebut nanntinya bisa digunakan di dalam function
    global $x;

    // $x = 25;
    echo $x;
    // variabel x yg ada didalam function seperti di atas disebut variabel lokal dalam function
    // yang hanya bisa di pakai di dalam function itu saja, tidak bisa digunakan di luar function
    // jadi tidak akan berpengaruh jikalau ada nama variabel yang sama di dalam function dengan yg diluar function

}

// cara seperti ini tidak akan tampil dan akan memunculkan error
// kenapa, padahal variabel x sudah di buat di atas function
// itu karena, variabel x di luar function tampilx() beda dengan variable x di lingkup dalam function tampilx()
// variabel yang dibuat didalam function, itu hanya berrlaku di dalam function saja

echo "<h1> variabel lokal di dalam lingkup function </h1>";

tampilx();
echo "<br>";
echo "<br>";

echo "<h1> variabel lokal di luar function </h1>";
echo $x;


?>