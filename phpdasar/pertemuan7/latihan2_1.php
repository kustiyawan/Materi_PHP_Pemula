<!-- semisal ada yang iseng langsung ke url file latihan2_1.php tanpa kudu klik link yang di file latihan1_4.php
    sistem akan mengalamai error karena gak ada data yang dikirimkan dari klik kan link yang di file latihan1_4.php
    link url latihan2_1.php akan berusaha mencetak sesuatu yang gak ada -->

    <!-- untuk cara mengatasinya, gimana supaya user tidak langsung masuk ke latihan2_1.php lewat ngetik di link url 
        tapi harus lewat link yang ada di latihan1_4.php yang memang kudu di klik -->

<!-- dibawah sini akan di buat per kondisian -->
<?php 
    // cek apakah tidak ada data di $_GET
    // bisa menggunakan "isset", secara fungsi isset digunakan untuk mengecek apakah sebuah variabel sudah pernah di buat atau belum
    // jadi jikalau kondisi dibawah tidak ada, saat user langsung mengetikan url link latihan2_1.php akan terjadi error
    // error nya gimana?, error terjadi karena $_GET dari key nama(contoh yg digunakan di latihan ini) itu belum pernah dibikin, karena user langsung menuju link latihan2_1.php
                                                        //file latihan2_1.php ini jadi gak tahu key nama ini berasal dari mana tapi dipaksa untuk mencetak
                                                        // terjadilah error 

    // dibawah adalah cara pengecekkan jikalau user nakal hanya memasukkan link file nya saja, tidak dengan mencantumkah memasukkan data nama atau yang lainnya lewat link
    // if ( !isset($_GET["nama"]) ) { // dari syntax di samping penjelasannya, apakah $_GET dengan key nama pernah di buat apa belum
    //                             // jikalau ada tanda ! di belakang isset seperti => !isset, berarti penjelasannya menambah tanda seru artinya NOT/tidak
    //                             // jadi jika $_GET dengan key nama tidak di buat maka lakukan sesuatu..... --> jika ada tanda seru
    //                             // jika $_GET dengan key nama sudah di buat maka lakukan sesuatu.....---> itu penjelasan jika tanpa tanda ! 
        
    //     // setelah terkonfirmasi asal usul key nama belum diketahui
    //     // maka lakukan yang namanya redirect, memindahkan user dari sebuah halaman ke halaman lain
        
    //     header("Location: latihan1_4.php"); // pindahkan user secara paksa ke link latihan1_4.php, ingat huruf L nya harus besar pada syntax Location
    //     exit; // exit agar program di bawah tidak di eksekusi
    // }

    // dibawah adalah cara jikalau user nakal masuk langsung lewat link sekaligus mengisi data seperti nama,nrp (untuk contoh pembuatan program ini)

    // maksud kodingan di bawah jika salah satu data ditulis oleh user contoh nama, dan yg lain tidak, user tetep akan di lempar ke halaman pertama yang mengharuskan untuk klik
    if ( !isset($_GET["nama"]) ||
        !isset($_GET["nrp"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["gambar"])) {
        
            //redirect
            header("Location: latihan1_4.php");
            exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

    <!-- di file ini nanti nya lah menggunakan cara untuk bisa menangkap data mahasiswa yang dikirimkan file latihan1_4.php
     dengan menggunakan variabel superglobal $_GET -->
    <ul>
        <!-- istilah seperti "gambar", "nama", "nrp" dan sebagainya diambil dari key yang ada di file latihan1_4.php
         contoh di file latihan1_4.php, ngambil key yg mana
         <a href="latihan2_1.php?nama=<?= $mhs["nama"]; ?>" > <?= $mhs["nama"]; ?> </a> 
         dari contoh di atas key yang dimaksud adalah kata "nama" yang tidak memakai tanda petik
         setelah kata href="latihan2_1.php?nama <== key yang dimaksud -->


        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li> 
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan1_4.php">Kembali ke daftar mahasiswa</a>

</body>
</html>
