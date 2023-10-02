<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<!-- untuk bisa sedikit memudahkan, jikalau pusing dengan kurawal buka tutup nya
        bisa kurung kurawal buka nya di ganti ":", kemudian yang kurung kurawal tutup diganti dengan nama
         fungsi kondisi yang memakai kurung kurawal, seperti contoh di bawah ialah for, jadi bisa ditulis "endfor;", pokoknya ditambah end dibelakangnya -->
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3 ; $i++) : ?>
            <tr> 
                <?php for ($j = 0; $j < 5; $j++) : ?> 
                    <td> <?= "$i, $j"; ?> </td>
                    <!-- ada cara lagi untuk mempersingkat echo di atas, semisal ada teks php yg cuma buat menampilkan isi/nilai dari varibel
                        yang biasanya tulisan php nya -> <?php echo "$k";?>, bisa hanya di ganti dengan = 
                        menjadi <?= "$k"; ?>, pokoknya hanya saat melakukan echo terhadap sebuah variabel bisa diganti dengan sama dengan "=" 
                        asal memang fungsi hanya buat mencetak sesuatu -->
               <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>