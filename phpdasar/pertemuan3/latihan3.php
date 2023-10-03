<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<!-- disini kita mencoba mewarnai kotak yang bagian baris yang nilai nya ganjil -->
<!-- ku tekankan lagi variabel $i adalah BARIS
                        sedangkan $j adalah KOLOM -->

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?> <!-- terjemahan kodingannya ialah, pada samping, kondisi perulangan untuk pembuatan baris 
                            nilai awal variabel ialah 1, untuk terminasi yaitu di tengah jika i lebih kecil tapi serta dengan nilai 5, 
                            akan terus membuat baris sesuai syarat terminasi yang ditengah tadi -->
        
            <?php if ($i % 2 == 1 ) : ?> <!-- secara terjemahannya maksudnya, variabel i di modulus 2, modulus maksudnya bagi, di bagi 2 
                            dengan harapan bersisa satu, sama dengan "==" 2x maksudnya harus sama, 2 nilai yakni, hasil dari $i % 2 harus sama dengan 1
                            yang di harapkah disini dari bagi 2 yang bersisa 1, tr nya yang mana adalah baris tr di ubah menjadi berwarna
                            yaitu tr class="warna-baris", warna-baris, yang sudah kita buat di dalam style, secara simple nya nilai variabel i yang ganjil akan
                            akan di beri warna -->
                <tr class="warna-baris">
                    
            <?php else : ?> <!-- semisal kondisi if tidak memenuhi, yang dimana, saat perulangan variabel i, dalam nilai nya di bagi 2 hasil nya 0
                            alias habis, pas saat di cek di samakan dengan nilai 1, kan tidak sesuai, maka akan turun "else" akan digunakan
                            kodingan else, yang dimana "tr" saja, akan dipakai, memakai tr tanpa class yang bisa membuat merubah warna dibagian baris -->
                <tr>
            <?php endif; ?>
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td> <?= "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
