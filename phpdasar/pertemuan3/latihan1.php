<?php 
    // Pengulangan
    // for
    // while
    // do ..... while
    // foreach : pengulangan yang dikhususkan untuk array

    // dalam pengulangan ada istilah Inisialisasi, kondisi terminasi, increment, decrement
    // Inisialisasi ialah penentuan variabel awal untuk melakukan pengulangan
    // kondisi terminasi, digunakan untuk pemberhentian pengulangan
    // increment, melakukan pengulangan maju maksudnya pengulangan yang di tambah terus menerus
    // decrement, kebalikan dari increment yaitu melakukan pengulangan mundur maksudnya pengulangan yang dikurangi terus menerus

    for ($i=0; $i < 5; $i++) { 
        echo "Hello World! <br>"; // contoh kodingan di samping sederhana nya i=0 itu adalah inisialisasi maksudnya mulai perulangannya dari mana
                            // contoh kodingan di kiri kita mulai dari 0, selanjutnya di tengah di sebut terminasi maksudnya kita pengen perulangannya berapa kali
                            // ambil contoh 5
                            // sederhananya contoh kodingannya, kita memilih awal perulangannya di 0, di tengah kita beri i kurang dari 5, terus paling kanan ++ maksudnya increment maksudnya kondisi akan di tambah terus secara berulang
                            // ketika nilai i berada kurang dari 5 sesuai yang ditengah itu, for akan melakukan perulangan terus sembari di tambah 1 karena memakai i++
                            // nanti output yang ditampilkan akan -> 0, 1, 2, 3, 4 (kalau memang yg pengen di tampilkan berupa angka) karena perintah kurang dari 5 jikalau sudah 5, perulangan berhenti, karena kalau sudah 5 akan menimbulkan false dan tidak memenuhi perintah perulangan
                            // karena ini contoh dengan mencetak tulisan jadi, selama ada eksekusi perulangan hello world! akan selalu di cetak
                            // kasus contoh di kiri, i cuma jadi pengeksekusi untuk memulai perjalanan melakukan perulangan, selama i masih bisa ditambah nilai nya codingan di bawah akan di eksekusi
                            // selama nilai i lebih kecil dari 5 kodingan di bawah akan di eksekusi
                            // untuk yg decrement sifatnya mengurangi dengan syntax i--, 
                            
                            // kebalikan dari increment, jikalau kondisi didalam for memenuhi atau bernilai true kodingan di bawah akan di eksekusi

    }
    $k = 10;
    echo $k;

    echo "<br> <br>"; // ambil contoh di kodingan di samping, saya ingin menampilkan nilai dari variabel $k, untuk sebuah nilai awal sebelum di buat perulangan

    for ($k = 10; $k > 5; $k--) { 
        echo "$k <br>";     // untuk terjemahannya, nilai awal adalah 10 untuk inisialisasi, untuk terminasi yaitu di tengah k lebih dari 5, determinasi paling kanan karena bakal di kurangi
                // ketika nilai k yaitu 10 lebih besar dari 5, akan di tampilkan karena kodingan di bawah for, saya ingin menampilkan atau mencetak angka dari variabel k
                // ketika sudah di cetak, nilai 10 akan dikurangi dan nilai k akan menjadi 9 terus di bandingkan lagi apakah lebih dari 5 kalau ya akan di cetak no 9 itu
                // terus di kurangi lagi menjadi nilai 8, diulang lagi begitu seterusnya sampai kalau nilai k menjadi 5 eksekusi kodingan akan berhenti, karena perintah terminasinya lebih dari 5, kalau sama dengan 5 tetep akan menjadi false,
                // karena di tengah(terminasi) tertulis lebih dari ">" 5 bukan lebih dari sama dengan ">=" 5
    }

    $i = 0;
    // while ($i < 5) { // simpelnya, penggunaan pada while, selama di dalam kurung while itu bernilai true, ibarat kata kondisi dalam kurung yang di inginkan benar
    //                     // yang di bawah while akan di eksekusi
    //     echo "Hello World! <br>"; // dan terakhir menggunakan increment atau decrement, semisal kalau ndak di pakai akan melakukan looping tanpa henti
    //     $i++;
    // } // kalau di while, akan melakukan pengecekan dulu kemudian eksekusi perintah di dalam

    do {
        echo "Hello World! <br>"; // untuk do-while bedanya dengan while, dia akan menjalankan dulu kodingan di dalam kemudian baru mengecek kondisi yang ada didalam while
        $i++; // kalau di while mengecek dulu baru menjalankan perintah di bawah dalamnya, kalau do-while akan mengeksekusi dulu baru mengecek kondisi yg ada didalam while
            // semisal jikalau kondisi didalam do-while menunjukkan false dengan kata lain kondisi tidak memenuhi atau salah, do-while akan mengeksekusi dulu sekali yg ada didalam do-while
            // baru akan berhenti karena kondisi salah/false
    } while ( $i < 5 ); // semisal didalam while di samping diganti dengan $i > 5, ambil contoh false lah ya, yang di dalam do-while yaitu mencetak Hello world
    // di web akan tetep di tampilkan Hello World! satu kali, karena memang alur nya eksekusi dulu baru mengecek kondisi
?>


