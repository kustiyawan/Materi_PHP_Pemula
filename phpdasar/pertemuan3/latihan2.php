<?php 
// Pengkondisian / Percabangan
// if else
// if else if
// ternary
// switch

echo "------Penggunaan if tok-----------";
echo "<br>";
$x = 10;
if( $x < 20 ) {
    echo "benar"; // metode nya if, jika kondisi nya true, yang maksudnya benar, akan mengeksekusi kodingan di bawah
    // jika kondisi false yang artinya salah, dengan contoh jika $x = 20, kodingan yang di bawah tidak akan di eksekusi, 
    // dan langsung lanjut ke baris kodingan berikutnya di luar kurung kurawal dari if, yaitu echo "salah"
}
echo "salah"; // untuk contoh di samping echo "salah", akan tetep di jalankan walaupun kondisi if di atas benar atau pun salah
// karena kodingannya di luar kurung kurawal if
echo "<br>";


echo "------Penggunaan if else-----------";
echo "<br>";
// untuk memperbaiki kondisi di atas, bisa di ubah seperti dibawah dan akan lebih fleksibel, karena dengan di masukkan di else maka
// jikalau kondisi if salah, dibagian dalam kurung kurawal if akan di lewati dan selanjutnya, yang didalam else akan di eksekusi
// jika kondisi if benar, hanya akan mengeksekusi yang bagian if benar itu saja, yang didalam else tidak akan di jalankan
if ( $x < 20 ) {
    echo "bener";
} else {
    echo "salah";
}
echo "<br>";

echo "------Penggunaan if elseif-----------";

// berbeda dengan yang diatas, yang hanya menggunakan if sama else doang, selanjutnya ketambahan elseif
// yang maksudnya kita bisa menambahkan kondisi baru dengan hasil eksekusi yang berbeda
// seperti contoh di bawah
$i = 2;

if ($i < 20) {
    echo "benar"; // jikalau if ini bernilai true, atau benar bagian dalam kurung kurawal if, akan di jalankan, dan yang elseif serta else tok, tidak akan dijalankan
} elseif ($i == 32) {
    echo "bingo!"; // nah karena ada kondisi baru, kita bisa membuat program secara fleksibel, kemungkinan dan beberapa kondisi bisa di tambahkan sesuka hati
    // seperti contoh diatas ada ketambahan, jikalau $i == 32, akan menampilkan bingo, itu semisal di bagian if false, dan variabel $i sesuai dengan
    // kondisi elseif, maka kodingan di bagian dalam kurung kurawal akan di eksekusi/dijalankan
} else {
    echo "salah"; // ini fungsi else juga sama aja, jikalau 2 kondis diatas false/tidak sesuai, gantian yg else tok ini akan menjalankan kodingan 
    // dibagian dalam kurung kurawal nya
}



?>