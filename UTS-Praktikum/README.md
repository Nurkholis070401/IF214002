## Perintah SELECT 
Perintah SELECT merupakan perintah dasar SQL yang di gunakan untuk memilih data dari database. Data yang di kembalikan di simpan dalam tabel yang di sebut result-set. SELECT kolom1, kolom2, … FROM nama_tabel;
SELECT * FROM nama_tabel;
## Perintah SELECT DISTINCT
Perintah SELECT DISTINCT merupakan perintah dasar SQL yang di gunakan untuk mengembalikan hanya nilai yang berbeda dari dalam sebuah tabel, dengan kata lain semua record duplikat (record dengan nilai yang sama) yang terdapat pada tabel akan di anggap sebagai satu record/nilai.
SELECT DISTINCT kolom1, kolom2, … FROM nama_tabel;
## Perintah WHERE
Perintah WHERE merupakan perintah dasar SQL yang di gunakan untuk mem-filter hasil SELECT dengan mengekstrak record yang memenuhi persyaratan tertentu.
SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi;
## Perintah (operator) AND, OR dan NOT
Operator AND, OR dan NOT merupakan perintah dasar SQL yang biasanya di kombinasikan dengan perintah WHERE. Ketiganya di gunakan untuk mem-filter record berdasarkan suatu kondisi, operator AND akan menampilkan record apabila semua kondisi bernilai TRUE, operator OR akan menampilkan record apabila salah satu kondisi bernilai TRUE, sedangkan operator NOT akan menampilkan record apabila semua kondisi bernilai FALSE.

SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi1 AND kondisi2 AND kondisi3;
SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi1 OR kondisi2 OR kondisi3 …;
## Perintah ORDER BY
Perintah ORDER BY merupakan perintah dasar SQL yang di gunakan untuk mengurutkan result-set dalam pengurutan ‘ascending’ atau ‘descending’. Secara default perintah ORDER BY menampilkan record dalam pengurutan ‘ascending’ (‘ASC’). Untuk mengurutkan ‘descending’, gunakan kata kunci ‘DESC’.

SELECT kolom1, kolom2, … FROM nama_tabel ORDER BY column DESC;

SELECT nis, nama FROM siswa ORDER BY tahun_lahir DESC;
##  Perintah INSERT INTO
Dalam SQL, perintah INSERT INTO merupakan perintah dasar SQL bagian dari perintah untuk DML (Data Manipulation Language) Saya asumsikan Anda telah faham perbedaan DDL, DCL, dan DML. Perintah INSERT INTO dapat di gunakan untuk menambahkan record baru ke dalam tabel.

INSERT INTO nama_tabel VALUES (nilai1, nilai2, nilai3, …);
INSERT INTO nama_tabel (kolom1, kolom2) VALUES (nilai1, nilai2);
## Perintah UPDATE
Perintah UPDATE merupakan perintah dasar SQL yang di gunakan untuk memperbarui atau mengubah nilai suatu record berdasarkan kriteria tertentu.

UPDATE nama_tabel SET kolom1 = nilai1, kolom2 = nilai2, … WHERE kondisi;
##  Perintah DELETE
Hampir sama dengan perintah UPDATE, perintah DELETE juga merupakan perintah dasar SQL yang di gunakan untuk menghapus nilai suatu record berdasarkan kriteria tertentu.

## 