# Website Artikel Sederhana

Website artikel sederhana ini dibuat menggunakan **CodeIgniter 4**, **PHP**, **CSS**, **MySQL**, dan **AJAX**. Website ini menyediakan platform untuk menampilkan artikel dari berbagai kategori seperti Teknologi, Fashion, Kuliner, Olahraga, dan lainnya. Pengguna dapat melihat, mencari, dan menelusuri artikel berdasarkan kategori.

## Fitur
- **Manajemen Artikel**: Menampilkan artikel dengan kategori seperti Teknologi, Fashion, Kuliner, Olahraga, dll.
- **Pencarian Artikel**: Fitur pencarian artikel menggunakan AJAX untuk pengalaman pengguna yang lebih responsif.
- **Kategori Dinamis**: Artikel dikelompokkan berdasarkan kategori yang dapat dikelola melalui database.
- **Desain Responsif**: Antarmuka yang ramah pengguna dan responsif untuk perangkat desktop dan mobile.
- **Database MySQL**: Penyimpanan data artikel dan kategori menggunakan MySQL.

## Teknologi yang Digunakan
- **CodeIgniter 4**: Framework PHP untuk struktur aplikasi yang cepat dan terorganisir.
- **PHP**: Bahasa pemrograman utama untuk logika backend.
- **CSS**: Untuk styling antarmuka pengguna.
- **MySQL**: Database untuk menyimpan artikel dan kategori.
- **AJAX**: Untuk interaksi asinkronus seperti pencarian artikel tanpa memuat ulang halaman.

## Prasyarat
Sebelum menjalankan proyek ini, pastikan Anda memiliki:
- PHP >= 7.4
- MySQL atau MariaDB
- Composer (untuk mengelola dependensi CodeIgniter)
- Web server seperti Apache/Nginx
- Git (untuk mengkloning repositori)

## Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek di lokal Anda:

1. **Kloning Repositori**
   ```bash
   git clone https://github.com/MuhammadPrayoga/web-artikel-sederhana.git
   cd web-artikel-sederhana
   ```

2. **Instal Dependensi**
   Jalankan perintah berikut untuk menginstal dependensi CodeIgniter:
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**
   - Salin file `.env.example` menjadi `.env`:
     ```bash
     cp .env.example .env
     ```
   - Buka file `.env` dan sesuaikan konfigurasi database:
     ```env
     database.default.hostname = localhost
     database.default.database = nama_database
     database.default.username = username_anda
     database.default.password = password_anda
     database.default.DBDriver = MySQLi
     ```

4. **Setup Database**
   - Buat database baru di MySQL:
     ```sql
     CREATE DATABASE web_artikel;
     ```
   - Impor struktur database dari file `database.sql` ke database Anda:
     ```bash
     mysql -u username_anda -p nama_database < database.sql
     ```

5. **Jalankan Aplikasi**
   - Jalankan server pengembangan CodeIgniter:
     ```bash
     php spark serve
     ```
   - Buka browser dan akses `http://localhost:8080`.

## Struktur Database
Database terdiri dari beberapa tabel utama:
- **articles**: Menyimpan data artikel (judul, konten, kategori, tanggal publikasi, dll).
  ```sql
  CREATE TABLE artikel (
  id INT(11) auto_increment,
  id_kategori INT(11) NOT NUL,
  judul VARCHAR(200) NOT NULL,
  isi TEXT,
  gambar VARCHAR(200),
  status TINYINT(1) DEFAULT 0,
  slug VARCHAR(200),
  PRIMARY KEY(id)
  );
  ```
- **categories**: Menyimpan data kategori artikel (Teknologi, Fashion, Kuliner, Olahraga, dll).
  ```sql
  CREATE TABLE kategori (
  id_kategori INT(11) auto_increment,
  nama_kategori VARCHAR(200) NOT NULL,
  slug_kategori VARCHAR(200),
  PRIMARY KEY(id_kategori)
  );
  ```
  ```sql
  ALTER TABLE artikel
  ADD CONSTRAINT fk_kategori_artikel
  FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori);
  ```
- **user**: Admin harus login untuk menambah, mengubah dan menghapus artikel.
  ```sql
  CREATE TABLE user ( 
  id INT(11) auto_increment, 
  username VARCHAR(200) NOT NULL, 
  useremail VARCHAR(200), 
  userpassword VARCHAR(200), 
  PRIMARY KEY(id)
  );
  ```
  
## Struktur Folder
- `app/`: Berisi kode utama aplikasi CodeIgniter (Controllers, Models, Views).
- `public/`: Berisi file statis seperti CSS, JavaScript, dan gambar.
- `database.sql`: File SQL untuk struktur dan data awal database.

## Cara Menggunakan
1. Buka website di browser.
2. Jelajahi artikel berdasarkan kategori di menu navigasi.
3. Gunakan fitur pencarian untuk menemukan artikel tertentu (didukung oleh AJAX).
4. Tambahkan artikel baru melalui halaman admin.

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).
