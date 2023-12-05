<!-- Pencontohan cara penggunaan User-defined function -->
<?php 
    function salam() {
        return "Selamat datang, admin";
    }

?>

<!-- kalau user defined function gak mungkin bisa dipanggil sebelum dibuat sendiri function nya
        seperti contoh diatas, kita tidak akan bisa menggunakan function salam dibawah tanpa membuat function
        seperti yang diatas -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
    <!-- contoh diatas adalah cara memanggil function yg sudah dibuat di paling atas, memanggil dengan nama function yang dibuat -->
</body>
</html>