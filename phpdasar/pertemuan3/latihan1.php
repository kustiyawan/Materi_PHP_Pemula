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
    }


