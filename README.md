# Sistem Manajemen Komik

Repository ini berisi sebuah sistem manajemen komik yang dikembangkan menggunakan framework CodeIgniter.

## Deskripsi
Sistem Manajemen Komik adalah sebuah aplikasi web untuk mengelola daftar komik, termasuk informasi seperti judul, penulis, penerbit, dan sampul.

## Instalasi
1. Clone repository ini: `git clone https://github.com/choerulram/Code-Igniter.git`
2. Masuk ke direktori proyek: `cd Code-Igniter`
3. Buat database baru di MySQL (misalnya `code_igniter`)
4. Salin file `env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda
5. Install dependencies menggunakan Composer: `composer install`
6. Jalankan migrasi database: `php spark migrate`
7. Jalankan seeder untuk data awal (opsional): `php spark db:seed`

## Menjalankan Aplikasi
1. Start development server: `php spark serve`
2. Buka browser dan akses `http://localhost:8080`

## Kontribusi
Anda dapat berkontribusi dengan melakukan pull request untuk perbaikan atau penambahan fitur.

## Lisensi
Repository ini dilisensikan di bawah [MIT License](LICENSE).