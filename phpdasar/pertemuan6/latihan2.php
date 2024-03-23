<?php 

// di array seperti ini ada sebuah masalah yang dimana salah satu datanya di tukar,
    // bisa menjadi tidak sinkronnya data yang sesuai, semisal di bawah 

/////////////////////////////////////////
    // sebelum di tukar
    // $mahasiswa = ["Hadi Kustiyawan", "A112018189", "ikiemail@gmail.com", "Teknik Informatika"];

    // hasil saat di cetak
    // Nama: Hadi Kustiyawan
    // NIM: A112018189
    // Email: ikiemail@gmail.com
    // Jurusan: Teknik Informatika

    // setelah di tukar
    // $mahasiswa = ["A112018189", "Hadi Kustiyawan", "ikiemail@gmail.com", "Teknik Informatika"];

    // hasil saat di cetak
    // Nama: A112018189
    // NIM: Hadi Kustiyawan
    // Email: ikiemail@gmail.com
    // Jurusan: Teknik Informatika

////////////////////////////////////////
    // jadinya ketidak sesuaian data yang di inginkan, dari yang pengennya data nama dulu jadi yang dihasilkan adalah nim

    // karena memang bentuk array seperti ini hanya dilihat dari index nya, maksudnya adalah urutan
    // seperti contoh NIM itu ada di index 0, untuk nama ada di index 1
    // karena array ini bersifat array numerik, array yang hanya di tentukan urutan index





    $mahasiswa_multidimensi = [
        ["Hadi Kustiyawan", "A112018189", "ikiemail@gmail.com", "Teknik Informatika"],
        ["Merica Ahmad", "B1120191809", "emailloro@gmail.com", "manajemen"],
        ["Ahmad Karim", "C2220181789", "mbohemail@gmail", "Akuntansi"]
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
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <!-- contoh secara manual dalam menampilkan -->
        <!-- <li>Hadi Kustiyawan</li>
        <li>A112018189</li>
        <li>ikiemail@gmail.com</li>
        <li>Teknik Informatika</li> -->
    </ul>

        <!-- contoh menampilkan array yang tidak multi dimensi -->
    <ul>
        <!-- <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li> -->
    </ul>

        <!-- contoh menampilkan array yang multidimensi -->
        <?php foreach( $mahasiswa_multidimensi as $daftar_mahasiswa) : ?>
            <ul>
                <li>Nama: <?= $daftar_mahasiswa[0]; ?></li>
                <li>NIM: <?= $daftar_mahasiswa[1]; ?></li>
                <li>Email: <?= $daftar_mahasiswa[2]; ?></li>
                <li>Jurusan: <?= $daftar_mahasiswa[3]; ?></li>
            </ul>

        <?php endforeach; ?>


    
</body>
</html>