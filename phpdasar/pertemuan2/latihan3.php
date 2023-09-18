<?php 

// Variabel dan Tipe Data
// Variabel
// satu lagi dalam penamaan variabel, itu tidak boleh diawali dengan angka, tapi boleh mengandung angka
// contoh di bawah
// $1nama = "hayoloh"; > kodingan disamping itu adalah contoh diawali dengan angka dan itu tidak boleh, pasti akan keluar error

$awalan1 = "iki sing bener"; // untuk kodingan di samping maksud dari nama variabel boleh mengandung angka, ini masih bener
$nama = "Kustiyawan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama ?></h1>
    <!-- inilah kenapa lebih baik jika mmenggunakan metode php didalam html
        ketika ingin mencetak nilai dalam variabel bisa secara fleksibel -->
    
    <!-- jadi didalam php diatas echo akan menampilkan nilai dari variabel $nama, 
        dan variabel $nama bisa di gonta ganti nilai nya di luar html sekalipun
        yang didalam contoh ini nilai dari variabel $nama adalah Kustiyawan -->
</body>
</html>

<?php 
    echo "Halo, nama saya $nama";
    // tambahan, dengan menggunakan kutip 2 ini dinamakan dengan konsep interpolasi, interpolasi adalah untuk mengecek
        // apakah didalam kutip dua atau didalam string itu terdapat variabel atau tidak, kalau ada variabel dalam kutip dua nya
        // maka yang ditampilkan adalah isi variabel nya 
        // $nama akan keditek sebagai variable

    echo "<br>";

    // dibawah ini adalah contoh memakai tanda petik 2 yang dimana interpolasinya tidak jalan
    echo 'contoh memakai 2 tanda petik, $nama'; // kodingan disamping semua yang ada didalam 2 tanda petik akan tetap dianggap string
                                                // walaupun ada sintaks varibel seperti $nama itu akan tetap dianggap string bukan sebagai variable

?>