<?php 
// SUPERBGLOBALS
// variable global milik php
// merupakan array associative

// mengecek penggunaan variabel superglobal milik PHP
// karena memang merupakan array associative, jadi tidak bisa langsung menggunakan echo saat ingin mencetak
// harus menggunakan var_dump

echo "<h1> variabel dari $..GET (anggap saja itu titik titik ialah garis bawah) </h1>";
// yang dibawah contoh yang variabel yg sudah dibuat langsung dari PHP, tanpa harus membuat manual
// hasil cetakan nanti akan memunculkan sebuah array yang isinya kosong
// berarti membuktikan variabel sudah ada namun isinya masih kosong
var_dump($_GET);
echo "<br>";
echo "<h1> variabel dari $..POST (anggap saja itu titik titik ialah garis bawah) </h1>";
var_dump($_POST);
echo "<br>";

// ada juga variabel dari PHP yang sudah ada isi, seperti di bawah
echo "<h1> variabel dari $..SERVER (anggap saja itu titik titik ialah garis bawah) yang dimana sudah ada isi </h1>";
var_dump($_SERVER);

?>