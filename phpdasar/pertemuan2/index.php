<?php 
    // ini komentar
    // ini adalah komentar untuk digunakan untuk 1 baris, tiap //

    /*ini juga komentar tapi bisa beberapa baris
        sampai akhir yang ditutup */

    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print > untuk mencetak tulisan dan mencetak isi variabel
    // print_r > khusus untuk mencetak isi dari array 
    // var_dump > digunakan untuk melihat isi dari variabel, nanti saat ingin mencetak suatu teks atau nilai manti akan terlihat tipe variabel nya apa
    /* print_r dan var_dump cuma di pakai untuk debugging untuk melihat keanehan saat proses developing
        jikalau ingin kesalahannya dimana, isi variable nya dimana, istilahnya mau debugging lah */

    echo "Kustiyawan";
    echo "<br>";

    print "Contoh pake print";
    echo "<br>";

    print_r("contoh pake print_r");
    echo "<br>";

    var_dump("Galih Umam, contoh pake var_dump"); /* untuk var_dump nanti akan muncul tipe data dan ukuran string 
                                                        yaitu jumlah objek yang ada dalam string, spasi juga di hitung*/

    echo "<br>";
    echo 123; // untuk nilai angka atau tipe data integer tidak perlu pakai tanda kutip

    echo "<br>";
    echo true; // untuk menampilkan hasil boolean / kondisi ya apa tidak

    echo "<br>";
    echo 'ini jika memakai tanda petik'; /* dalam mencetak string bisa memakai kutip atau petik,
                                            tapi ini kondisional biasanya dalam php tanda " " lebih sakti daripada ' ' 
                                            semisal code dibawah yg memang harus memakai tanda kutip " " */ 
    echo "<br>";                                        
    echo "jum'at"; // jikalau ada kalimat yg memakai tanda petik ' ' harus memakai tanda kutip " "

    echo "<br>";
    echo "<br>";
    echo "<br>";

    

?>