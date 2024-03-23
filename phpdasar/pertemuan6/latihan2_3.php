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
    // sekaligus disini akan membuat contoh ditambahkan data gambar

    [                                           //
        "nama" => "Gibran Pamungkas",            //
        "nrp" => "A11201810898",                // array numeric index 0
        "email" => "ikiemail@gmail.com",        //
        "jurusan" => "Teknik Informatika",      //
        "gambar" => "gibran.jpg"
    ],
    [
        "nama" => "Nigga Kece",              //
        "nrp" => "B11201910878",                // array numeric index 1
        "email" => "bambang@gmail.com",         //
        "jurusan" => "Manajemen",                //
        "gambar" =>  "nigga.jpg"
    ],

    // yang dibawah contoh jikalau array ada sampai 3 lapis, yaitu pada bagian array "tugas"
    [
        "nama" => "Yaoming Chindo",               //
        "nrp" => "C11201810767",                //
        "email" => "njrot@gmail.com",           // array numeric index 2
        "jurusan" => "Akuntansi",               //
        "gambar" => "yaoming.jpg"
        

    ],
    [
        "nama" => "Tom Chris",               //
        "nrp" => "E11201910989",                //
        "email" => "njay@gmail.com",           // array numeric index 3
        "jurusan" => "Akuntansi",               //
        "gambar" => "tom.jpg"
        

    ],
    [
        "nama" => "Masbro Kewan",               //
        "nrp" => "D11202390898",                //
        "email" => "njrot@gmail.com",           // array numeric index 4
        "jurusan" => "Akuntansi",               //
        "gambar" => "masbro.jpg"
        

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
            <li>
                <!-- yang di bawah adalah contoh dengan cara manual, dari hasil yang dicetak nanti semua
                    data memiliki gambar yang sama sesuai gambar yang dipilih dibawah -->
                <!-- <img src="img/gibran.jpg" alt="" srcset="">  -->

                <!-- baru yang dibawah adalah cara array seperti biasanya -->
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" srcset="">
            </li>
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