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
        <?php for ($i = 1; $i <= 5; $i++) : ?> 
            <?php if ($i % 2 == 1 ) : ?> 
                <tr class="warna-baris">
            <?php else : ?>
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