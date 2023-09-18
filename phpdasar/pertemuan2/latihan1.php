<!-- Penulisan sintaks PHP
    1. PHP di dalam HTML
    2. HTML di dalam PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Sandhika"; ?></h1>
    <!-- ini adalah metode jika ingin menulis php didalam html
        memang terkesan menyusahkan jikalau cuma digunakan untuk mencetak string saja
        tapi dengan metode seperti ini kita bisa fleksibel memasukkan apapun disitu
        kita bisa mengambil nilai dari variabel maupun database -->
    
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>