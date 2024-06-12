<?php 
// $_GET

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
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"] ?>" alt=""></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>


        </ul>
    <?php endforeach; ?>
</body>
</html>