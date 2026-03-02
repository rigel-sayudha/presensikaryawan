# Absensi PKL

## Instalasi

### Requirements

- PHP 8.2
- livewire 3
- pnpm
- database MySQL

### Tahapan instalasi

- Clone dari git
- buat file `.env` dari `.env.example`
- run : `composer install`
- run : `pnpm install`
- run : `php artisan key:generate`
- run : `php artisan storage:link`
- run : `php artisan migrate --seed`

### Menjalankan aplikasi

- run : `php artisan serve`
- run : `pnpm dev`
- buka `http://127.0.0.1:8000` di browser (sesuaikan port)
- login dengan email `admin@absensimagang.com` dan password `admin123`

## Fitur

- Manajemen lokasi kantor
- Absensi karyawan
- Laporan kehadiran
- Role dan permission management

## Kontribusi

Silakan ajukan pull request untuk kontribusi.