## Buatlah solusi digital dari permasalahan-permasalahan yang teman-teman anggap penting untuk diselesaikan dalam bentuk :
- Database
- Web service yang terhubung ke database
- Visualisasi data menggunakan data dari web service (mobile / web / desktop)
- GUI untuk operasional CRUD dari solusi digital tersebut (mobile / web / desktop)
## Dikumpulkan dalam bentuk link Github repository basis data dalam folder /uas-praktikum yang didalamnya terdapat:
- Deskripsi singkat solusi digital yang dibuat
- DDL DML DQL basis data untuk keperluan CRUD dan Visualisasi data
- Source code dari visualisasi data dan app yang dibuat
- Link Youtube demo solusi digital yang dibuat

---

## APLIKASI BUKU ONLINE
#### Deskripsi
aplikasi ini dirancang untuk mempermudah pembaca buku secara online. 
- beberapa fitur-fiutr yang tersedia diantaranya :
  - Semua koleksi bahan bacaan dalam satu aplikasi
  - berbagai cerita menarik lainnya
  - fitur optimasi layar untuk membaca
  - perpustakaan bacaan
  - navigasi untuk memudahkan melakakukan pemcarian
  - bookmark untuk menandai buku
  - table of contens atau daftar isi

## Entitas dan Atribut
### Admin
- Id_admin
- nama_admin
- Pass_admin
- gender_admin
- email_admin

### User
- id_user
- nama_user
- pass_user
- gender_user
- email_user
- register

### buku
- id_buku
- nama_buku
- is_tamat
- is_terbaik
- is_terbaru
- id_author
- id_user

### olahdata
- id_admin
- id_user
- data_buku
### baca
- id_user
- id_buku
- history
### author
- id_author
- nama_author
### terbaik
- is_terbaik
- views_buku

---

---
## Query SQL
### [DDL,DML,DQL](https://github.com/Nurkholis070401/IF214002/tree/main/Pertemuan%2011) - SQL Menggunakan DB pgsql

- [Webservice](https://github.com/Nurkholis070401/IF214002/blob/main/Pertemuan%2014/Webservice.php) - Tes webservice
- [Visualisasi Data](https://github.com/Nurkholis070401/IF214002/blob/main/Pertemuan%2014/visualizationData.php) - Spurce code & Menampilkan data Query buku
- [BooksApp](https://github.com/Nurkholis070401/IF214002/tree/main/Final-Project/books) - Source code App
- [DemoApp](https://youtu.be/kPMW_TgUyvw) - Mempresentasikan BooksApp via YT

---

## ERD Aplikasi Buku
![ERD-project drawio](https://user-images.githubusercontent.com/100669802/176473084-acbd9ea2-eac0-4f59-9ca7-01ac7a233aee.png)
![ERD-project](https://user-images.githubusercontent.com/100669802/176473174-1264e9e2-37cd-465b-bd41-d5525a769c60.png)


---

![image](https://user-images.githubusercontent.com/100669802/175322444-caa960fb-3bbe-4499-b909-f0375ceb695c.png)
![image](https://user-images.githubusercontent.com/100669802/175284940-9bd96d06-9dbe-40a4-9b81-6fc0c4ca3194.png)
