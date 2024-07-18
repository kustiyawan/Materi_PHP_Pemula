<!-- selanjutnya adalah Request Method Post 
    sebelumnya adalah penggunaan get yang memang menggunakan URL di POST akan menggunakan konsep FORM 
    di GET yang memakai URL lebih rentan, karena data bisa terlihat di link
    karena itu lah di POST ini penggunaa form akan lebih fleksibel, karena bisa digunakan method POST dan GET
    ketika menggunakan form data yang dikirimkan tidak akan kelihatan
    semisal contoh pembuatan akun pasti ada username password, jika memakai konsep GET dan link URL, user dan password akan terlihat di link
    dan ini yang bahaya, maka dari itu penggunaan form lebih di anjurkan di data data penting -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POST</title>
    </head>
    <body>


        <!-- coba untuk membuat contoh, mengirimkan data nama ke sebuah halaman -->

        <!-- contoh semisal buat codingan seperti ini, mencoba dengan menginput dan mencetak inputan di halaman ini sendiri 
                bagian form action akan dihilangkan, agar saat submit tidak berpindah halaman -->

         <!-- <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1> --> <!-- codingan seperti ini akan menimbulkan error, dari codingan tersebut bermaksud ingin
                                                            langsung mencetak isi dari key nama, padahal key nama belum di isi apapun tapi udah berusaha di cetak -->
        
        <!-- maka dari itu disini akan membuat perkondisian -->
         <?php if(isset($_POST["submit"]) ) : ?>                    <!-- maksud dari kodingan di samping, penggunaan isset untuk mengetahui suatu variabel
                                                                        yang dimana ialah $_POST dengan key "submit" itu di isi atau tidak/NULL
                                                                        di bagian key pada $_POST bisa pilih "submit" atau "nama" sebagai contoh
                                                                        untuk perkondisian ini mengambil contoh memakai submit, jadi kalau diartikan
                                                                        apakah tombol submit sudah di pencet apa belum, jika sudah di pencet 
                                                                        akan menampilkan koding di bawahnya
                                                                        
                                                                        jikalau belum akan tetep di kosongkan -->
            <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php endif; ?>

        <!-- penjelasan sederhana nya, aku membuat form, yang metode request nya post, intinya nama request annya post
            dan yang ada didalam form ini, data data di dalam form ini seluruh datanya akan dikirimkan ke halaman yang namanya latihan4.php -->
            <!-- untuk sementara sebagai contoh datanya ada 2 saja di bawah yakni
                input type text dan tombol submit -->

         <form action="" method="post"> <!-- action biasanya berisi tujuan halam berikutnya dan tempat tujuan data inputan yang dimasukkan ke halaman ini yang akan/ingin dikirimkan -->

                                                <!-- jikalau semisal action="latihan4.php" atau bisa seperti ini action="", ndak ada halaman yang dituju
                                                 data akan dikirimkan ke halaman ini sendiri -->

                                            <!-- semisal juga yg method tidak di isi dan kosong, secara default otomatis akan memilih method get -->

                                        <!-- dalam form ada atribut wajib yang harus ditulis, (seperti action, method)  
                                        semisal atribut ini dihilangkan tidak akan menimbulkan error, melainkan akan memiliki nilai default yang disimpan di dalam 2 atribut tadi -->
            Masukkan nama:  
            <input type="text" name="nama"> <!-- atribut yang di samping seperti (type, name) penggunaan nya adalah wajib agar bisa mengirimkan data -->
            <br>
            <button type="submit" name="submit">Kirim!</button>
         </form>
         
    </body>
    </html>
