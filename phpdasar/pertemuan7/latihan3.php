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

        <!-- penjelasan sederhana nya, aku membuat form, yang metode re -->
         <form action="latihan4.php" method="post"> <!-- action biasanya berisi tujuan halam berikutnya -->
                                        <!-- dalam form ada atribut wajib yang harus ditulis, (seperti action, method)  
                                        semisal atribut ini dihilangkan tidak akan menimbulkan error, melainkan akan memiliki nilai default yang disimpan di dalam 2 atribut tadi -->
            Masukkan nama:  
            <input type="text" name="nama"> <!-- atribut yang di samping seperti (type, name) penggunaan nya adalah wajib agar bisa mengirimkan data -->
            <br>
            <button type="submit" name="submit">Kirim!</button>
         </form>
         
    </body>
    </html>
