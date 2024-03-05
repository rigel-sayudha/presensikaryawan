# Absensi PKL

## Instalasi

### Requirements

-   PHP 8.2
-   livewire 3
-   intervention/image
-   spatie/laravel-permission

### Tahapan instalasi

-   Clone dari git
-   copy file `.env` dari `.env.example`
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

## Penamaan

### Variable dan function

-   variable gunakan format camelCase contoh `$dataPesertaAktif`
-   function gunakan format camelCase contoh `konvertTanggal()`

### File livewire

-   gunakan format kebab case. contoh `approve-absensi`
-   contoh pembuatan: `php artisan make:livewire pages.absensi.approve-absensi`

### File Model dan Controller

-   gunakan pascal case contoh `TransaksiBatal`
-   contoh pembuatan model: `php artisan make:model TransaksiBatal`
-   contoh pembuatan controller: `php artisan make:controller TransaksiBatal`

---

## Git repository

### Pembuatan branch baru

buat branch dengan nama disesuaikan dengan kode ticket. jalankan:

-   `git branch kode_ticket main`
-   `git checkout kode_ticket`

### pull request

buat pull request jika pekerjaan ticket sudah selesai dari branch kode ticket

-   df
