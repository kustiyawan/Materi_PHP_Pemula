<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<!-- ini contoh pembuatan tabel dengan menggunakan perulangan, kita bisa membuat langsung secara otomatis -->
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i=1; $i <= 3; $i++) {  // kenapa pakai kurang dari sama dengan "<=", karena ingin buat contoh memakai nilai awal i dengan 1
                echo "<tr>"; // maka ketika melakukan perulangan terus yang dimana nilai i yg dari 1 di tambah terus menerus sampai ke nilai 3
                    for ($j=1; $j <= 5; $j++) { // nilai 3 ini masih bisa di anggap terminasi nya(yg tengah), karena <= bukan < dari jadi maksudnya
                        echo "<td>$i, $j</td>"; // kurang dari 3, 3 nya juga termasuk karena ada = nya juga, jadi 3 sama bawahnya 3
                    }
                echo "</tr>";
            } 
         ?>
    </table>
</body>
</html>