# Nyus

Nyus adalah website berita yang menyajikan berita terupdate terkait teknologi, musik, dan pop-kultur. Nyus dibuat menggunakan PHP Native (MVC), mariaDB, dan Bootstrap v5.3. 

Website ini dibuat sebagai tugas akhir mata kuliah Pemrograman Web. 

## Instalasi

### Clone repository

bisa menggunakan git clone atau download zip

```bash
git clone https://github.com/Famozy/nyus.git
```

### Import database

```bash
mysql -u root -p < db/db.sql
```
### Konfigurasi Database

masuk ke folder `app/core/Databases.php` dan sesuaikan username, password, dan nama database.

### Menjalankan server

```bash
php -S localhost:8000
```