<h1 align="center">Selamat datang di Ticket! 👋</h1>

## Apa itu Ticket?

Web Ticket yang dibuat oleh <a href="https://github.com/tedihanafee"> Tedi Hanafiah </a>. **Ticket adalah Website untuk pemesanan ticket dengan mudah melalui website.**

## Fitur apa saja yang tersedia di Ticket?

-   Autentikasi Admin
-   User & CRUD
-   Rute & CRUD
-   Transportasi & CRUD
-   Category & CRUD
-   Pemesanan Ticket
-   Dan lain-lain

## Release Date

**Release date : 28 Apr 2024**

> Ticket merupakan project open source yang dibuat oleh Tedi Hanafiah. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Default Account for testing

**Admin Default Account**

-   username: admin
-   Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/tedihanafee/PO-BUS.git
cd PO-BUS
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```


## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2024 Tedi Hanafiah.
-   **Ticket is open-sourced software licensed under the MIT license.**
