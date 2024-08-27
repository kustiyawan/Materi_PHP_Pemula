<!-- untuk skenario nya, 
 halaman index ini akan dijadikan untuk seorang admin
 nanti admin bisa melihat halaman ini dan bisa melihat
 seluruh data mahasiswa -->

 <!-- disini admin juga bisa
  - menambah
  - mengubah
  - menghapus
  - dan mencari -->

<?php 
    // koneksi ke database
    // disini cara menghubungkan halaman ini dengan database yaitu dengan menggunakan function dari php nya sendiri
    // atau bisa disebut driver nya php lah, secara khusus untuk menghubungkan database

    // dalam function di bawah, ada parameter wajib untuk mengisi dalam koma dan urutannya tidak boleh salah

    // PERTAMA yaitu menggunakan string yang biasanya harus memakai tanda petik ""
    // dan yang pertama ini adalah nama host, karena memakai xampp jadi default nya adalah localhost
    // PERTAMA "localhost"

    // KEDUA ialah nama username karena memakai xampp, user default adal root
    // KEDUA "root"

    // KETIGA ialah nama password, karena di xampp secara default password tidak ada alias kosong
    // jadi hanya di ketik tanda petik saja, karena tidak password yang tercantum
    // KETIGA ""
    
    // KEEMPAT ialah nama database yang ingin dihubungkan, dipertemuan sebelumnya sudah membuat database dengan nama phpdasar
    // KEEMPAT "phpdasar"
    mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari tabel mahasiswa / query data mahasiswa 
    // sama juga menggunakan function dari php sendiri 

    // ada 2 parameter dalam function dibawah yaitu
    // PERTAMA koneksi database nya AKA mysqli_connect yang diatas
    // untuk yang parameter pertama kalau dilihat memang kepanjangan, maka ada solusi untuk mempersingkat penamaan parameter koneksi database tersebut
    // yaitu masukkan koneksi database dimasukkan ke variabel
    $conn = mysqli_connect("localhost", "root", "", "phpdasar"); // seperti di samping, jadi di parameter pertama hanya tinggal menulis $conn

    // KEDUA ialah syntax yang bertujuan untuk mengambil seluruh data dari tabel mahasiswa
    // dan syntax querry sql untuk mengambil seluruh data tabel ialah => SELECT * FROM mahasiswa
    // sebenarnya dalam penulisan syntax query bisa saja huruf kecil semua seperti contoh => select * from mahasiswa
    // tapi dalam sql menyarankan untuk perintah syntax nya pakai huruf kapital dan nama tabel huruf kecil
    // SELECT * FROM mahasiswa <= ketika syntax nya ditulis seperti itu, code editor seperti visual studi code akan otomatis mewarnai syntax perintah
    // jadi akan lebih mudah dalam mendefinisikan jika terjadinya error seperti kesalahan pengetikan

 //   mysqli_query($conn, "SELECT * FROM mahasiswa"); // dalam sql dan php jika ada kesalahan pada query syntax sql, 
                                            // tidak akan ada pemberitahuan error dimana betul betul senyap dan tidak akan ketahuan
    // tapi PHP ada cara tersendiri untuk mengecek suatu syntax query pengetikannya sudah benar atau belum
    // bisa menggunakan variabel yang namanya $result

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa"); // setelahnya bisa di cek dengan $result nya akan mencetak apa
                                                // pada $result ini jikalau ada syntax sql yang keliru akan menampilkan boolean false
    // cara menampilkan keterangan hasil cek dari $result
    var_dump($result); // jikalau syntax sudah sesuai akan menamppilkan keterangan pada halaman website, contoh seperti di bawah

    // object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(6) ["lengths"]=> NULL ["num_rows"]=> int(5) ["type"]=> int(0) } 
    // keterangan diatas menampilkan detail struktur pada tabel database, seperti berapa jumlah BARISNYA, berapa jumlah KOLOMnya

    // kalau semisal di ketahui ada error seperti salah syntax pada mysqli_query, pada halaman web akan menampilkan 
    // bool(false)
    // untuk pesan error itu hanya berlaku pada mysql dan php versi lama, 
    // untuk sekarang php dan mysql sudah bisa menampilkan error jikalau ada kesalahan pengkodingan 
    // tanpa harus menggunakan pengkondisian ataupun penggunaan variabel $result

//  ---------------------------------------------------------------------------------------------------------- yang dibawah lanjutan untuk komputer yang lain

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr> <!-- tr bisa disebut dengan baris, baris pada tabel -->
            <th>No.</th> <!-- untuk th berfungsi untuk membuat kolom, bentuk tabel yang mewakili atas bawah -->
            <th>Aksi</th> <!-- rencananya di bagian aksi ini, akan di jadikan tempat tombol yang berupa, 
                            ubah dan hapus, di setiap baris datanya -->
            <th>Gambar</th> <!-- sebenarnya bisa memakai td fungsi nya sama saja untuk membuat kolom, perbedaan simpelnya
                            th secara tampilan font tulisannya langsung di rata tengah dan berhuruf tebal
                            sedangkan yg td hurufnya font tipis biasa, dan biasanya posisinya rata kiri dan harus ada codingan tambahan
                            untuk memposisikan atau mengubah bentuk dan model font sesuai keinginan -->
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


        <!-- untuk contoh dibawah kita coba memulai untuk mengisi datanya secara manual dulu
            datanya ditulis langsung di percodingan untuk melihat gimana tampilan datanya -->
        <tr>
            <td>1</td>                  <!-- disini baru penggunaan dengan td, karena memang fungsinya diperuntukkan untuk data data dalam tabel
                                            dibawah header lah pokoknya -->
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/bambang.jpg" width="50" alt="">
            </td>
            <td>0485654524</td>
            <td>PaijoPaijan</td>
            <td>halahjo@gmail.com</td>
            <td>Teknik Informatika</td>
        </tr>

    </table>
    
  </body>
  </html>