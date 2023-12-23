<?php 
// contoh array biasa
// $mahasiswa = ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"];

// pemisalan jika ada data mahasiswa lebih dari 1, kalau membuat variabel baru semisal $mahasiswa2, sama saja seperti di awal terkesannya
// manual dan tidak fleksibel, jadi kita akan menggunakan yang namanya array multi dimensi, seperti contoh di bawah

// contoh array multi dimensi, atau bisa disebut array didalam array
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Baim Wong", "043364190", "Teknik Informatika", "baimwong@yahoo.com"],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <!-- contoh untuk pembuatan array secara mendetail -->
    <!-- yang di bawah ialah rencana array yang ingin ditampilkan, jadi dibuat manual terlebih dahulu -->
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <!-- <li>Sandhika Galih</li>
        <li>043040023</li>
        <li>Teknik Informatika</li>
        <li>sandhikagalih@unpas.ac.id</li> -->

        <!-- contoh array dengan penggunaan looping -->
        <!-- <?php foreach ($mahasiswa as $mhs ) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?> -->

        <!-- seperti di awal yaitu cara manual tapi bedanya menggunakan php array itu sendiri -->
        <!-- <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li> -->

        <!-- cara mencetak array dari array multi dimensi -->
        

    </ul>
</body>
</html>