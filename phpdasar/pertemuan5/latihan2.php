<?php 
// Pengulangan pada array
// for / foreach

$angka = [3, 2, 15, 20, 11, 77, 89, 888];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 </title>

    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    
    <!-- di bawah adalah cara gimana cetak array yang batas ditampilkannya dibuat manual
        misal di bawah, dalam kurung for yang tengah, i<7, berarti array akan dicetak 7 kali
        kenapa 7, karena array dalam php itu dimulai dari 0, dari simbolnya adalah "kurang dari"
        bukan "kurang dari sama dengan, <=" jadi berarti 0, 1, 2, 3, 4, 5, 6 -->

    <!-- <?php for( $i = 0; $i < 7; $i++ ) { ?>
        <div>
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?> -->

    <!-- ada cara yang lebih mudah dimana looping "for" nya bisa menghitung sendiri sesuai jumlah elemen pada array
        yaitu menggunakan "count" -->
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div>
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- contoh penggunaan foreach
    maksud dari foreach ialah, untuk setiap elemen/value yang di dalam array, lakukanlah sesuatu
    konsep nya "foreach"akan mengecek 1 1 eleman dari araay, diambil data elemen/value nilai itu kemudian
    ditaruh ke variabel baru, nah variable baru ini akan digunakan untuk mencetakq array tadi -->

    <?php foreach( $angka as $a) { ?>  <!-- jadi fungsi dari variabel $a ini sebagai representasi tiap tiap elemen elemen / value dari
                                        array "$angka", analoginya elemen pertama dari array $angka yaitu 3 akan dikirimkan ke variabel $a
                                        variabel $a kemudian bisa di cetak, nanti akan di ulang lagi sampai semua elemen, fungsi foreach itu 
                                        yang bisa otomatis hitung dari sebuah variabel array -->
        <div class="kotak"> <?php echo $a ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- ada cara yang lain kalau bingung dengan kurung kurawal, bisa memakai teknik templating -->
    <?php foreach ($angka as $a ) : ?>
        <div class="kotak"> <?= $a ?> </div>
    <?php endforeach; ?> <!-- jadi di akhir bisa ditutup dengan end nama fungsi syntax nya, jadi endforeach -->




</body>
</html>
