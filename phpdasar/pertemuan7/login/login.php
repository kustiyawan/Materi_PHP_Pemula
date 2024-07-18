<!-- untuk logika akan di taruh di sini -->
<?php 
    // cek apakah tombol submit sudah di tekan atau belum
    if ( isset($_POST["submit"])) {

        // cek username & password ---> ini hanya untuk contoh jika password salah dan benar
        if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) { // untuk penjelasan disamping, ini akan buat contoh user dan pass di buat
                                                                    // lebih flat tanpa user dan pass yg hasil dari simpanan database
            
            // jika benar, redirect ke halaman admin
            header("Location: admin.php");
            exit;

        } else {

            // jika salah, tampilkan pesan kesalahan
            $error = true; // ini maksudnya membuat variabel sendiri dengan nama error, yang di beri nilai true atau 1
            //$error = NULL; // ini contoh jika variable $error tidak ada nilai alias kosong, buat mencontohkan jikalau isset ingin tidak berfungsi
        }
        

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <!-- ditambah pesan error saat pengisian user dan pass yang salah -->
     <?php if( isset($error) ) : ?> <!-- untuk penjelasannya isset ini merujuk pada variabel yang ada di atas yaitu $error 
                                isset hanya bereaksi kalau nilai dari variabel yang di pilih gak null atau kosong dan di atas,
                                $error sudah di isi dengan true/1 pakai false/0 pun tidak masalah, mangkanya itu
                                codingan di bawah if isset akan di eksekusi
                                kalau syarat isset tidak di penuhi yaitu $error tidak ada nilai alias kosong atau NULL, 
                                codingan di bawah tidak akan di eksekusi, alhasil ketika user dan pass salah tidak memunculkan apapun -->
        <p style="color:red; font-style:italic;">username/password salah!</p>
    <?php endif; ?>


    <ul>
        <form action="" method="post"> 
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" > <!-- jika tanpa id dan for, html akan tetep mengenal label dan tempat inputan suatu hal yg berbeda
                                                    maka dari itu ada penggunaan for dan id, jadi html akan tau label tersebut punyanya input di samping -->
            </li>

            <li>
                <label for="">Password: </label>
                <input type="password" name="password" id="password"> <!-- untuk yang inputan password, memakai type yang password, agar saat user mengetik password
                                                            nama password tidak akan kelihatan dan akan berubah dengan tanda yang lain tiap kali user mengetik -->
            </li>

            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

</body>
</html>