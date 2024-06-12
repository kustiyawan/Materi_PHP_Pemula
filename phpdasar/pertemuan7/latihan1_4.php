<?php 
// $_GET
// Mencoba untuk membuat metode dimana tampilan pertama akan terlihat hanya nama nama profil seseorang
// tapi nama tersebut bisa di klik, dan setelah di klik nanti akan ke halaman lain dan akan memperlihatkan data profil nama tersebut secara lengkap


$mahasiswa = [
    [
        "nrp" => "089765346",
        "nama" => "Bambang Prayitno",
        "email" => "bapray@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bambang.jpg"
    ],
    [
        "nrp" => "067382654",
        "nama" => "Kusnadi Joger",
        "email" => "kusger@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "joger.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <!-- yang di bawah adalah cara manual yg disaat di klik data nama mahasiswa apapun
                 akan tetep menampilkan 1 data mahasiswa yg sama karena memang link file yg di klik
                 yg dimana adalah latihan2.php cuma ber isi 1 data mahasiswa saja yg dibuat secara manual -->
                <!-- <a href="latihan2.php"><?= $mhs["nama"]; ?></a> -->

                <!-- kemudian yg dibawah adalah cara yg dimana saat di klik data nama mahasiswa sekaligus data lengkap
                 mahasiswa akan di kirimkan ke file latihan2_1.php, dan nantinya file latihan2_1.php akan menangkap data tersebut
                 biasanya nama link saat kursor berada di posisi link, nama url link akan berubah ubah sesuai data mahasiswa yang akan diambil -->
                 <a href="latihan2_1.php?nama=<?= $mhs["nama"]; ?>
                                        &nrp=<?= $mhs["nrp"]; ?>
                                        &email=<?= $mhs["email"]; ?>
                                        &jurusan=<?= $mhs["jurusan"]; ?>
                                        &gambar=<?= $mhs["gambar"]; ?>"> 
                        <?= $mhs["nama"]; ?> </a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>