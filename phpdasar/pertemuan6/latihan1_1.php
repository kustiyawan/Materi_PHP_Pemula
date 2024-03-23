<!-- Mencoba Associative Array -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>

    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.8s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>

</head>
<body>
    <?php 
        $angka = [1,2,3,4,5,6,7,8,9];
        
    ?>

    <!-- Mengulang materi cara mencetak array -->
    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"> <?= $a; ?> </div>
    <?php endforeach; ?>
<br>
<br>
<br>
<br>
    <!-- mencoba mencetak angka 5 tok dari array multi dimensi $angka_coba -->
    <?php 
        $angka_coba = [
            [1,2,3],[4,5,6],[7,8,9]
        //      0       1       2       <--- contoh urutannya
        ];

        echo $angka_coba[1][1]; // penjelasannya, di kurung pertama/kiri adalah array yang paling terluar
                                // [1,2,3],[4,5,6],[7,8,9] -> ialah array yg paling terluar, dan didalam kurungnya berangka 1
                                // dalam array numerik indek dimulai dari angka 0, kalau dalam kurung yg kiri 1, berarti yang 
                                // dipilih ialah yang [4, 5, 6]
                                // dan kurung yg kedua/kanan berarti array yg ada didalam array terluar tadi
                                // [1] => [4, 5, 6] ------ [1] => 5
                                // untuk yang kurung [1] lagi di kanan ambil urutan index di 
                                // [4, 5, 6]
                                //  0  1  2
                                // berarti angka 5
                                // yang ditampilkan ialah angka 5
        
        echo "<br>";
        echo "<br>";
        echo "<br>";

        // contoh lagi gimana caranya untuk menampilkan angka 8
        // [1,2,3], [4,5,6], [7,8,9]
        //    0        1         2
        
        // [7, 8, 9]
        //  0  1  2
        echo $angka_coba[2][1];
    ?>

    <!-- contoh menampilkan array multi dimensi menggunakan foreach -->
    <?php 
        $iki_array = [
            [1, 2, 3], [4, 5, 6], [7, 8, 9], [10, 11, 12]
        ];
    ?>
    
    <?php foreach( $iki_array as $wadah ) : ?> <!-- variabel $wadah ibarat menjadi tempat wadah dari array $iki_array -->
        <!-- <div class="kotak"> <?= $a; ?> </div> --> <!--   <---- jadi contoh yg dikiri tidak bisa digunakan, karena malah tempat wadahnya
                                                            yang di cetak bukan isinya -->

        <?php foreach( $wadah as $isi) : ?>
            <div class="kotak"> <?= $isi; ?> </div>
        <?php endforeach; ?>
            <div class="clear"></div>

    <?php endforeach; ?>



</body>
</html>