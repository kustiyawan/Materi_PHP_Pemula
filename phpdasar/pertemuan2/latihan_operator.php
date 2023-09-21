<?php
    // operator
    // aritmatika
    // + - * / %

    // $x = 10;
    // $y = 20;

    // echo $x + $y;

    // penggabung string / concatenation / concat
    // .
    // $nama_depan = "Wahyu";
    // $nama_belakang = "Galih";
    // echo $nama_depan . " " . $nama_belakang;
// -----------------------------------------------------------------------------------------

    // Assignment
    // =, +=, -=, *=, /=, %=, .=

    // $x = 1;
    // $x = 5; // untuk kondisi di samping saat di cetak nilai dari variabel x, yg nilai nya 1 akan ditimpa yang nilai 5, 
            // ditimpa oleh kodingan yang paling bawah
    // $x += 6; // nah untuk contoh di samping di sama dengan sekaligus di tambah oleh nilai 6, begitupun dengan kondisi aritmatika yg lain
            // macam -, *. /, %
    // echo $x;

    // begitu juga dengan kondisi memakai string dibawah
    // $nama = "Sandhika";
    // $nama .= " ";
    // $nama .= "Galih";
    // echo $nama; // sesuai dengan fungsi titik " . " yaitu penggabung string, string juga bisa digabungkan dengan memakai konsep diatas
//--------------------------------------------------------------------------------------------------

    // Perbandingan
    // <, >, <=, >=, ==, !=
    // operator perbandingan itu menghasilkan nilai boolean, benar atau salah/true atau false
    // biasanya operator ini digunakan untuk logika pengkondisian
    // var_dump(1 < 5); // ini akan menghasilkan boolean true atau false, var_dump sebagai pengecek hasil dari operator perbandingan
                    // contoh di atas apakah 1 lebih kecil dari 5, yng nampak di web pasti bool(true), kalau semisal diganti " > ", 
                    // akan menghasilkan bool(false)
    
    // var_dump(1 == 1); // kondisi lain lagi, untuk tipe yang di samping, == dua kali maksudnya 1 sama ka dengan 1, yg dihasilkan di web 
                        // adalah true
    // var_dump(1 == "1"); // jikalau nilai angka dengan string, tetep yang dihasilkan akan true. karena operator perbandingan hanya mengecek nilai
                        // tipe data nya apa tidak akan di cek, jikalau nilai bentuk nya sama apapun itu tipe data nya pasti akan dihasilkan true
    var_dump( 2 != 2); // untuk yang != kebalikannya dari ==, yaitu tidak sama dengan, maksud dari kodingan di samping ialah
                        // 2 apakah tidak sama dengan 2, jikalau tidak yang ditampilkan di web akah dihasilkan FALSE
    
    var_dump(2 != 5); // nah jikalau angkanya berbeda pastinya akan dihasilkan TRUE, karena memang 2 tidak sama dengan 5
// ------------------------------------------------------------------------------------------------------------------------

    // identitas
    // ===, !==
    var_dump(1 === "1"); // untuk kodingan yang disamping baru ngecek juga tipe datanya, yang dihasilkan di web akan FALSE, karena tipe datanya beda
                        // satunya tipe data integer yg kiri, dengan tipe data string yang kanan
    
    // Logika
    // &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0); // maksud dari kondisi kodingan di samping, && maksudnya dalam var_dump di 2 kondisi harus bernilai true dua duanya
                                        // jadi pokoknya 2 pengkondisian dengan syarat harus benar
                                        // kalo di terjemahkan, variabel x apakah lebih kecil dari 22 DAN apakah variabel x di bagi 2 sama dengan 0
                                        // kalo 2 kondisi udah bener semua yang ditampilkan web akan muncul TRUE
                                        // kalo dari salah satu kondisi itu ada yg salah, di web akan menampilkan false
    var_dump($x < 5  || $x % 2 == 0); // beda dengan kodingan diatas kalau kodingan di samping syarat nya cuma salah satu dari 2 kondisi yang dibuat
                                        // program bisa menampilkan TRUE, dalam sistem pengkondisian jikalu salah satu syarat terpenuhi program akan
                                        // bisa berjalan

?>
