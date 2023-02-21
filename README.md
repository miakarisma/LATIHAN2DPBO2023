# LATIHAN2DPBO2023 
## Janji
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

## Deskripsi Program
Program berbasis OOP menggunakan bahasa pemrograman C++, Java, Python, dan PHP yang mengimplementasikan konsep Multi-level Inheritance  pada kelas Mahasiswa, Human, Sivitas Akademik.

## Desain Program
![Latprak2 drawio](https://user-images.githubusercontent.com/100817609/220223322-744fcc0c-1e3c-4d21-9bd9-ee4d8cb25be2.png)

## Penjelasan Desain Program :
Program terdiri dari 4 kelas, yaitu kelas Mahasiswa, Human, Sivitas Akademik, Tabel. Terdapat 3 objek yang sama yaitu Human, Sivitas Akademik dan mahasiswa, yaitu sama-sama manusia. Sehingga ketiga kelas tersebut mengimplementasikan konsep Multi-level Inheritance.

1. Kelas Human merupakan kelas induk (superclass) dari kelas sivitas akademik (subclass) dan buyut dari kelas mahasiswa, karena terdapat kesamaan dari objek mahasiswa dan sivitas akademik, yaitu sama-sama manusia. Sehingga semua atribut pada kelas human akan diwariskan kepada kelas sivitas akademik dan kelas mahasiswa. Atribut pada kelas human terdiri dari atribut nik, nama dan jenis kelamin, karena pada dasarnya setiap manusia dapat dibedakan berdasarkan 3 identitas tersebut. Atribut pada kelas human memiliki hak akses private bertujuan agar atribut tersebut tidak bisa diakses dari luar class. Pada kelas human terdapat method setter dan getter untuk setiap atribut pada kelas tersebut. Hak akses untuk setiap method adalah public, supaya semua method dapat diakses diluar kelas.

2. Kelas Sivitas Akademik merupakan masyarakat akademik yang terdiri atas dosen dan mahasiswa. Sehingga kelas Sivitas Akademik merupakan kelas turunan dari kelas human dan kelas induk dari kelas mahasiswa. Selain itu kelas sivitas akademik mewarisi semua atribut kelas human dan mewariskan semua atributnya kepada kelas mahasiswa. Atribut pada kelas sivitas akademik terdiri dari atribut asal universitas dan email edu dengan hak akses private bertujuan agar atribut tersebut tidak bisa diakses dari luar class. Pada kelas sivitas akademik terdapat method setter dan getter untuk setiap atribut pada kelas tersebut. Hak akses untuk setiap method adalah public, supaya semua method dapat diakses diluar kelas.

3. Kelas Mahasiswa merupakan kelas turunan dari kelas Sivitas Akademik, karena mahasiswa merupakan bagian dari sivitas akademik dan kelas cucu dari kelas human karena mahasiswa merupakan manusia. Kelas mahasiswa mewarisi semua atribut pada kelas sivitas akademik dan kelas human. Atribut pada kelas mahasiswa terdiri dari atribut nim, prodi dan fakultas dengan hak akses private bertujuan agar atribut tersebut tidak bisa diakses dari luar class. Pada kelas mahasiswa terdapat method setter dan getter untuk setiap atribut pada kelas tersebut. Hak akses untuk setiap method adalah public, supaya semua method dapat diakses diluar kelas.

4. Kelas Tabel merupakan kelas yang berdiri sendiri atau tidak melakukan pewarisan/mewarisi kelas manapun, karena berbeda objek dengan objek lainnya serta tidak mewarisi atribut pada kelas lain. Kelas ini digunakan untuk menampilkan tabel dari list objek mahasiswa, pada kelas tabel setiap atribut memiliki hak akses private yaitu atribut baris dan kolom. Adapun method yang digunakan yaitu method setter dan getter serta method untuk pembuatan baris dari tabel itu sendiri.

Untuk fitur yang tersedia pada program yaitu menambah dan menampilkan objek.

## Dokumentasi Program
### Java, CPP, Python
![Screenshot (1)](https://user-images.githubusercontent.com/100817609/220226685-bc9bde84-6f9d-499b-985e-b249898d98fe.png)

### PHP
![Screenshot (1)](https://user-images.githubusercontent.com/100817609/220226751-35ca58ab-288b-47c8-92bc-2149e8e1e36c.png)
