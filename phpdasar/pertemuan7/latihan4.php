<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <!-- <h1>Selamat datang, Admin!</h1> --> <!-- Selamat datang admin di samping cuma contoh dan tes saja
                                    untuk mengetes di latihan3.php saat memencet kirim, apakah data akan dikirimkan dan berpindah 
                                    ke halaman latihan4.php ini -->

    <h1> Selamat datang, <?= $_POST["nama"] ?> </h1> 
                                                    <!-- Untuk penjelasan nya, kenapa pake $_POST, karena ngirim data form nya di halaman latihan3.php tadi
                                                    menggunakan request method post, kalau request method nya post, yang bisa nangkep tuh method ialah superglobal $_POST -->

                                                    <!-- kemudian yang didalam tanda petik [" "] adalah key yang ada di form method yang sudah di buat
                                                        di latihan3.php, key nya dimana
                                                        lihat codingan => ||| input type="text" name="nama" ||| ===> key nya berarti yg "nama"
                                                        key untuk mengirimkan data nama dari latihan3.php ke latihan4.php
                                                        pokoknya codingan name="nama key yang di inginkan yang gampang di ingat" 
                                                        bahasannya, menjadi key di arayy associative $_POST nya 
                                                        array associative kan ada key dan value, key nama yang ada di codingan name tadi
                                                        value adalah inputan yg di ketik yang akan masuk di dalam key -->

    <!-- <h1> Selamat datang, <?= $_GET["nama"] ?></h1>  -->
                                                    <!-- ini sekedar contoh untuk membedakan memakai $_GET dengan $_POST
                                                     ketika memakai "get" untuk key nya yg ada di latihan3.php dan $_GET dihalaman ini
                                                     data yang di input akan terlihat pada link URL 
                                                     sedangkan jikalau memakai $_POST, data inputan tidak terlihat di link, di sembunyikan di balik layar -->
</body>
</html>