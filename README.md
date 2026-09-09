# Praktikum Framework Pemrograman Web - Laravel

Repository ini berisi dokumentasi dan hasil praktikum mata kuliah **Framework Pemrograman Web** menggunakan framework Laravel.

* Pemahaman Arsitektur & Praktikum Laravel
* Implementasi fitur web secara berurutan
* Latihan penulisan kode (Controller, View, Route)

---

## 🎯 Tujuan

* Memahami arsitektur Model-View-Controller (MVC) pada Laravel.
* Mampu membuat dan mengelola Routing, Route Parameters, dan Controller.
* Membangun sistem antarmuka web (Blade Templating).
* Menerapkan clean code dan best practices dalam pengembangan aplikasi berbasis web.

---

## 📚 Materi yang Dipelajari

### Pertemuan 1 – Instalasi & Struktur Laravel
* Setup environment lokal (PHP 8.3 & Composer 2.10)
* Instalasi project Laravel baru via terminal
* Memahami fungsi struktur folder bawaan Laravel
* Menjalankan development server (`php artisan serve`)

### Pertemuan 2 – Routing & Controller Dasar
* Pemahaman HTTP Verbs (`Route::get`, `Route::post`)
* Implementasi Route parameters, named routes, & route groups
* Pembuatan rute `/` dan `/about` menggunakan fungsi Closure sederhana
* Pembuatan `DashboardController` via Artisan command
* Pengecekan daftar rute menggunakan `php artisan route:list`

### Pertemuan 3 – Environment, Migration & Database POS
* Konfigurasi file `.env` untuk koneksi database MySQL (`pos_toko`)
* Memahami konsep Migration sebagai *version control* untuk struktur database
* Memodifikasi tabel bawaan (`users`) dengan menambahkan kolom `role` menggunakan `Schema::table`
* Pembuatan tabel master dan transaksi (`categories`, `products`, `transactions`, `transaction_details`) menggunakan `Schema::create`
* Implementasi relasi antar tabel (Foreign Key & `cascadeOnDelete`)
* Pengenalan pembuatan Seeder (`CategorySeeder`) untuk *generate* data awal

### Pertemuan 4 – Login Manual dan Otorisasi Bertingkat
* Memahami konsep dan perbedaan antara otentikasi (login) dan otorisasi (hak akses)
* Membangun proses otentikasi manual menggunakan `Auth` facade bawaan Laravel tanpa *starter kit*
* Pembuatan `LoginController` untuk menangani proses login (`Auth::attempt`) dan validasi sesi logout
* Pembuatan *custom middleware* `CheckRole` untuk membatasi akses rute berdasarkan *role* pengguna
* Penerapan otorisasi bertingkat (Admin & Kasir) menggunakan Route Grouping dan mendaftarkan *middleware alias* di `bootstrap/app.php`
* Pembaruan `DatabaseSeeder` untuk men- *generate* akun percobaan Admin dan Kasir menggunakan enkripsi `Hash::make`

*(Materi pertemuan selanjutnya akan ditambahkan di sini)*

---

## 🛠️ Tech Stack

* PHP 8.3.30
* Laravel 13.x
* Composer 2.10.2
* HTML5, CSS3, Tailwind CSS (Strict Monochrome)
* Visual Studio Code & Git/GitHub

---

## 📁 Struktur Folder

Karena project ini dibangun di atas framework Laravel, berikut adalah direktori utama yang paling sering dimodifikasi selama praktikum berlangsung:

```text
📦 project-laravel-fw/
├── 📂 app/
│   └── 📂 Http/
│       └── 📂 Controllers/     # Tempat menyimpan file logic (misal: DashboardController.php)
├── 📂 database/                # Tempat menyimpan file struktur tabel (migrations) & data awal (seeders)
├── 📂 public/                  # Titik akses aplikasi (index.php) & tempat menyimpan aset publik
├── 📂 resources/
│   └── 📂 views/               # Tempat menyimpan file antarmuka web / Blade template (.blade.php)
├── 📂 routes/
│   └── 📜 web.php              # Tempat mendaftarkan seluruh alamat rute aplikasi (URL)
├── 📜 .env                     # File konfigurasi environment (koneksi database, dll)
└── 📜 artisan                  # CLI bawaan Laravel untuk menjalankan perintah otomatis

```
## Catatan

Repository ini dibuat sebagai:

* Arsip belajar pribadi
* Bukti progress tugas mingguan
* Referensi di masa depan

## Author
Muhamad Hafiz