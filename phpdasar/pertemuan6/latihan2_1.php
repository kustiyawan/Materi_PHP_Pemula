<?php 
// jadi agar lebih fleksibel ada pengganti dari array numeric, yaitu array associative

// Array Associative
// definisinya sama seperti yang numerik, kecuali
// key-nya (kalau yg numeric kan berupa urutan index/angka) adalah string yang kita buat sendiri

$mahasiswa = [
    "nama" => "Hadi Kustiyawan",        // disamping disebut array associative, perbedaan terdapat pada kata "nama", "nrp" dikiri
    "nrp" => "A11201810898",        // "nama" itu yang jadi index nya, sekarang tidak bergantung pada urutan angka atau yang disebut dengan index angka
    "email" => "ikiemail@gmail.com",
    "jurusan" => "Teknik Informatika"
];                                      

// contoh dengan maksud mencetak yg data jurusan
// contoh cetak dengan array yang masih menggunakan index numerik, yg cuma urutan angka
// echo $mahasiswa[3]; // modelan seperti di samping tidak akan bisa dipakai untuk mencetak array diatas

// mencetak jika pake array associative
// echo $mahasiswa["jurusan"]; // index angka diganti dengan nama key string di array nya
// echo $mahasiswa["nama"]; // contoh mencetak nama

// ////////////////////////////////////////////////////////////

// contoh dengan array multidimensi 
$mahasiswa_multidimensi = [
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

// contoh jika ingin mencetak data "bambang@gmail.com"
echo $mahasiswa_multidimensi[1]["email"]; // penjelasan syntax di samping hampir mirip caranya yang hanya array numeric
                // yang dikurung paling kiri yg ada angka 1, merupakan isi array terluar yang masih berberntuk array numeric yaitu isinya

                // ["nama" => "Hadi Kustiyawan", "nrp" => "A11201810898", "email" => "ikiemail@gmail.com", "jurusan" => "Teknik Informatika"],
                // ["nama" => "Bambang Donya", "nrp" => "B11201910878", "email" => "bambang@gmail.com", "jurusan" => "Manajemen"]

                // ber isi beberapa kumpulan data mahasiswa, yang masih berbentuk urutan angka index, 0, 1, 2, 3
                // karena dipilihnya [1], jadi data yg di ambil ialah => ["nama" => "Bambang Donya", "nrp" => "B11201910878", "email" => "bambang@gmail.com", "jurusan" => "Manajemen"]

                // ketika data yg dari index 1 sudah terpilih yaitu terpilih pada data
                // [
                //     "nama" => "Bambang Donya",        
                //     "nrp" => "B11201910878",        
                //     "email" => "bambang@gmail.com",
                //     "jurusan" => "Manajemen"
                // ]

                // tinggal menambahkan lagi ["email"] untuk array yang ada didalam index [1]
                // yang dimana berisi "bambang@gmail.com"

/// contoh lagi jikalau array sampai 3 lapis, 
// ingin mencetak nilai "tugas", dari data "Walawe Njrot", ingin mencetak angka nilai 90
echo $mahasiswa_multidimensi[2]["tugas"][2];





?>