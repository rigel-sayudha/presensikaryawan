# Absensi PKL

## Instalasi

### Requirements

-   PHP 8.2
-   livewire 3
-   pnpm
-   database MySQL

### Tahapan instalasi

-   Clone dari git
-   buat file `.env` dari `.env.example`
-   run : `composer install`
-   run : `pnpm install`
-   run : `php artisan key:generate`
-   run : `php artisan storage:link`
-   run : `php artisan migrate --seed`

### Menjalankan aplikasi

-   run : `php artisan serve`
-   run : `pnpm dev`
-   buka https://127.0.0.1:8000 di browser (sesuaikan port)
-   login dengan email `admin@absensimagang.com` dan password `admin123`

---

## Format pemberian nama file dan lainnya

### Variable dan function

-   variable gunakan format camelCase contoh `$dataPesertaAktif`
-   function gunakan format camelCase contoh `konvertTanggal()`

### File livewire

-   gunakan format kebab case. contoh `approve-absensi`
-   contoh pembuatan: `php artisan make:livewire pages.absensi.approve-absensi`

### File gambar

-   gunakan hashName() bawaan laravel. contoh di `app\Livewire\Form\UserForm.php` dan profile.php

### Nama column database

-   nama column database menggunakan bahasa inggris
-   gunakan format snake case. contoh `ini_contoh_format_snake_case`
-   foreignID gunakan format singular_id. contoh `customer_id` bukan `customers_id`

### File Model

-   gunakan nama datalam bahasa inggris
-   gunakan pascal case contoh `TransaksiBatal`
-   contoh pembuatan model : `php artisan make:model TransaksiBatal`

---

## Git repository

### Pembuatan branch baru

-   buat branch dengan nama disesuaikan dengan kode ticket
-   run : `git branch kode_ticket main`
-   run : `git checkout kode_ticket`
-   misalkan nama ticket `FEWEB01 - Pembuatan base code aplikasi` maka gunakan `FEWEB01` sebagai nama branch

### Buat pull request

-   buat pull request jika pekerjaan ticket sudah selesai dari branch kode ticket
-   Judul pull request disesuaikan dengan kode dan nama ticket lengkap. contohnya `FEWEB01 - Pembuatan base code aplikasi`
-   wajib isi description
-   Assigness klik assign your self
-   Reviewers pilih iqbalfarhan
-   Klik create pull request
-   lanjutkan pengerjaan ticket

### Selesai pull request

-   bila ticket sudah selesai, ubah label pull request menjadi `ready to merge`
-   bila belum selesai gunakan label `draft`
-   beritahu reviewer untuk review dan merge pull request
-   **jangan merge pull request ticket sendiri**
-   setelah pull request di approve dan di merge, kembali buat branch untuk ticket selanjutnya

### Merge Perubahan dari main

-   run : `git fetch origin main`
-   run : `git merge origin/main`
