<?php 

// jadi jikalau pakai array associative seperti di bawah, ditempatkan pada urutan manapun tidak akan merubah urutan yg di cetak
// jadi tidak peduli urutannya, asal key yang ingin di cetak itu benar, 
// key yg dimaksud seperti
// "nama"
// "nrp"
// "email"
// "jurusan"

// jadi tidak tergantung dengan urutan numeric, hanya menyesuaikan nama key dengan isi data yang sesuai
$mahasiswa = [
    [                                           //
        "nama" => "Hadi Kustiyawan",            //
        "nrp" => "A11201810898",                // array numeric index 0
        "email" => "ikiemail@gmail.com",        //
        "jurusan" => "Teknik Informatika"       //
    ],
    [
        "nama" => "Bambang Donya",              //
        "nrp" => "B11201910878",                // array numeric index 1
        "email" => "bambang@gmail.com",         //
        "jurusan" => "Manajemen"                //
    ],

    // yang dibawah contoh jikalau array ada sampai 3 lapis, yaitu pada bagian array "tugas"
    [
        "nama" => "Walawe Njrot",               //
        "nrp" => "C11201810767",                //
        "email" => "njrot@gmail.com",           // array numeric index 2
        "jurusan" => "Akuntansi",               //
        "tugas" => [                            //
            70, 80, 90, 100
        //  0   1   2    3    <= array dalam tugas masih bersifat numeric
                            // jadi key nya masih berupa index angka
        ]

    ]
];

?>

<!-- cara mencetak semua data dari array acossiative -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs ) : ?>

        <!-- kalau seperti di bawah  -->
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?> </li>           
            <li>NRP : <?= $mhs["nrp"]; ?> </li>
            <li>Email : <?= $mhs["email"]; ?> </li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
        </ul>

        <!-- <?php foreach ($mhs as $data) : ?>
            <div>
                <?= $data; ?>
            </div>
        
        <?php endforeach; ?> -->
    <?php endforeach; ?>
</body>
</html>