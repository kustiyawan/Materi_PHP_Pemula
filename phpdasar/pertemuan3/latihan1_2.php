<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<!-- ada contoh lagi dengan menggunakan gaya template -->
<!-- intinya kitanya mau memisahkan sesuatu yang mau kita tampilkan menggunakan php dengan teks php juga, begitu kita mau menampilkan teks html
     jangan di simpan/di taruh di teks php, keluarkan sendiri sendiri -->
     <!-- maksudnya yang di tampilkan menggunakan php, biasanya penggunaannya menggunakan variabel, menampilkan suatu nilai menggunakan variabel dari php -->
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3 ; $i++) { ?>
            <tr> <!-- untuk <tr></tr> jadinya bisa di ketik dengan fungsi html pada umumnya tidak dengan html yang di ketik di dalam teks php -->
                <?php for ($j = 0; $j < 5; $j++) { ?> 
                    <td> <?php echo "$i, $j"; ?> </td>
               <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<!-- jadi kita pisah, php biarkan di php, html biarkan di html di keluarkan saja dari teks php -->