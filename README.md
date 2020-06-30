<h1 align="center">Petunjuk Penggunaan</h1>

## Software yang Digunakan

- PostgreSQL
- Micosoft Visual Studio Code

## PostgreSQL

Buat database dengan nama dbiot

## Microsoft Visual Studio Code

- Buka project
- Buka terminal
- Copy file .env.example dengan perintah cp .env.example .env
- Tambahkan application key dengan perintah php artisan key:generate
- Sesuaikan file .env denga pengaturan mesin masing-masing
- Migrasikan table ke database dengan perintah php artisan migrate
- Jalankan program dengan perintah php artisan serve
- Buka web di browser
