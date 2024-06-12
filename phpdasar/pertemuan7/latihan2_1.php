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
         setelah kata href="latihan2_1.php?nama <--- key yang dimaksud -->


        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li> 
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan1_4.php">Kembali ke daftar mahasiswa</a>

</body>
</html>
