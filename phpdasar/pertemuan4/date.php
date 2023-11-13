<!-- Function -->
<?php 

    // Date 
    // Untuk menampilkan tanggal dengan format tertentu
    // date(); // untuk kodingan di samping pasti error, date termasuk juga function, dan syarat function di dalam kurungnya setidaknya ada 
            // isinya yang di sebut paramater atau argumen

   // date("l"); // kalau sudah seperti ini baru bisa dan tanpa error, bener tanpa error tapi tidak ada yang dimunculkan

   // echo date("l"); // bisa menambahkan echo untuk bisa di tampilkan, dan nanti akan menampilkan nama hari sesuai nama hari ini saat program dijalankan
   // tambahan lagi l yang ada didalam date itu adalah nama hari, ini merupakan dokumen langsung dari php nya, namanya built up function
   // function tersendiri kepunyaan php, yg emang udah sepaket dari php nya sendiri
   // bisa mengecek di link https://www.php.net/manual/en/funcref.php   untuk melihat beberapa referensi function dari php

//    secara sederhananya maksudnya kita memanggil sebuah function dari dalam php untuk mengelola tanggal, kita bisa menampilkan format tanggal bermacam macam
// seperti tanggal, bulan, tahun tergantung paramter/argumennya yang ditambah di dalam function date
// nama syntax nya pada parameter untuk function date ialaH
/*  1. l => untuk menampilkan nama hari 
    2. d => menampilkan tanggal
    3. M => Bulan dengan format nama
    4. m => Bulan dengan bentuk angka
    5. Y => Tahun

*/
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // nanti akan tampil detik yang sudah berlalu sejak 1 januari 1970, tanggal dimana para ahli sepakat untuk menentukan tanggal pada komputer

    // echo time();
    // echo date("l", time()+172800);

    // $date1 = new DateTime("2022-10-01");
    // $date2 = new DateTime("2023-10-01");
    // $jumlahHari = $date2->diff($date1);

    // echo $jumlahHari->days;

    //kodingan di bawah untuk mencari jumlah hari dari tanggal awal dan akhir yang dipilih
    // $tgl1 = strtotime("2022-10-01");
    // $tgl2 = strtotime("2023-10-01");

    $hari = 2539;

    $tanggal1 = new DateTime("2003-10-23");
    $tanggal2 = new DateTime("2010-10-05");

    // $jumlah = $tanggal1->diff($tanggal2);
    // echo $jumlah->days;

    $diff = abs(strtotime("2003-10-23") - strtotime("2010-10-05"));

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    echo $years . 'tahun, ';
    echo $months . 'bulan, ';
    echo $days . 'hari, ';

    // $jarak = $tgl2 - $tgl1;
    // $hari = $jarak / 60 / 60 /24;
    // echo $hari;
    

?>