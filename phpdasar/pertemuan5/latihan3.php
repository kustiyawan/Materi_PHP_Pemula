<?php 
// contoh array biasa
// $mahasiswa = ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"];

// pemisalan jika ada data mahasiswa lebih dari 1, kalau membuat variabel baru semisal $mahasiswa2, sama saja seperti di awal terkesannya
// manual dan tidak fleksibel, jadi kita akan menggunakan yang namanya array multi dimensi, seperti contoh di bawah

// contoh array multi dimensi, atau bisa disebut array didalam array
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Baim Wong", "043364190", "Teknik Informatika", "baimwong@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]

    // sedikit informasi, jikalau memakai teknik ini urutan yang diatas tidak boleh salah, harus sesuai tampilan
    // daftar mana sesuai yang kita pengen, seperti contoh di bawah mencoba untuk membuat daftar dengan urutan 
    // nama -> nrp -> jurusan -> email
    // data array harus diurutkan sesuai contoh urutan di atas, maka array yang di pakai untuk teknik ini disebut array numerik
    // array yang dimana index nya angka
    // dipenjelasan sebelumnya array adalah pasangan antara key dan value, key nya adalah index yang dimulai dari 0,
    // jadi ada cara biar fleksibel yaitu mengubah array numerik dengan array associative
    // yang dimana index nya bukan lagi angka tapi index nya adalah string
    // yang kita buat sendiri untuk mengasosiasikan ke nilai yang ada di dalam array nya 
    // index nya berasosiasi dengan nilainya 

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

    </ul>
    <!-- cara mencetak array dari array multi dimensi -->

        <?php foreach( $mahasiswa as $mhs ) : ?> 
            <!-- $mahasiswa merupakan array terluar, sumber array yang akan di pindahkan ke $mhs, 
                tiap melakukan pengulangan 1 data akan dipindahkan ke $mhs, $mhs akan di cetak atau di olah lagi
                seperti di masukkan suatu rumus dalam variabel, dan melakukan proses tersebut secara berulang ulang
                sampai data terakhir -->
            <ul>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>NRP : <?= $mhs[1]; ?></li>
                <li>Jurusan : <?= $mhs[2]; ?></li>
                <li>Email : <?= $mhs[3]; ?></li>
            </ul>
        <?php endforeach; ?>
    
</body>
</html>
