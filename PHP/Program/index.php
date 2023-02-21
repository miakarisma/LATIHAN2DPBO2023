<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<?php
    // Memasukkan file kelas yang digunakan kedalam program utama, kelas yang dimasukkan merupakan kelas cucu (Kelas Mahasiswa) dan kelas yang berdiri sendiri (Kelas Tabel) 
    require ('Mahasiswa.php');
    require ('Tabel.php');

    // Menambah Objek Mahasiswa
    $mhs1 = new Mahasiswa("2102165", "Ilmu Komputer", "FPMIPA", "UPI", "miakarisma87@upi.edu", "120012003", "Mia Karisma Haq", "Perempuan");
    $mhs2 = new Mahasiswa("2000001", "Ilmu Komputer", "FPMIPA", "UPI", "techi@upi.edu", "100000001", "M Satria Ramadhani", "Laki-laki");
    $mhs3 = new Mahasiswa("2000002", "Ilmu Komputer", "FPMIPA", "UPI", "gumiya@upi.edu", "100000002", "Cahya Gumilang", "Laki-laki");
    $mhs4 = new Mahasiswa("2000003", "Ilmu Komputer", "FPMIPA", "UPI", "sekarmk03@upi.edu", "100000003", "Sekar Madu Kusumawardani", "Perempuan");
    $mhs5 = new Mahasiswa("2000004", "Ilmu Komputer", "FPMIPA", "UPI", "nellyjoy@upi.edu", "100000004", "Nelly Joy", "Perempuan");

    // Memasukan setiap objek mahasiswa ke dalam array daftarMahasiswa
    $daftarMahasiswa = array();
    array_push($daftarMahasiswa, $mhs1);
    array_push($daftarMahasiswa, $mhs2);
    array_push($daftarMahasiswa, $mhs3);
    array_push($daftarMahasiswa, $mhs4);
    array_push($daftarMahasiswa, $mhs5);

    // Menginstansiasi objek tabel yang digunakan untuk menampilkan daftar objek mahasiswa
    $tab = new Tabel();
    $arrstr = array();
    $arrstr[0][0] = "NIK";
    $arrstr[0][1] = "NIM";
    $arrstr[0][2] = "Nama Lengkap";
    $arrstr[0][3] = "Jenis Kelamin";
    $arrstr[0][4] = "Program Studi";
    $arrstr[0][5] = "Fakultas";
    $arrstr[0][6] = "Asal Universitas";
    $arrstr[0][7] = "Email Edu";

    for($i = 0; $i < count($daftarMahasiswa); $i++)
    {
        $arrstr[$i+1][0] = $daftarMahasiswa[$i]->getNik();
        $arrstr[$i+1][1] = $daftarMahasiswa[$i]->getNim();
        $arrstr[$i+1][2] = $daftarMahasiswa[$i]->getNama();
        $arrstr[$i+1][3] = $daftarMahasiswa[$i]->getJenisKelamin();
        $arrstr[$i+1][4] = $daftarMahasiswa[$i]->getProdi();
        $arrstr[$i+1][5] = $daftarMahasiswa[$i]->getFakultas();
        $arrstr[$i+1][6] = $daftarMahasiswa[$i]->getAsalUniversitas();
        $arrstr[$i+1][7] = $daftarMahasiswa[$i]->getEmailEdu();
    }

    // Menampilkan daftar objek mahasiswa
    echo "<br>";
    echo str_repeat("&nbsp", 100) . "<b>" . "Daftar Data Mahasiswa" . "</b>" . "<br>";
    $tab->buatBaris(count($daftarMahasiswa)+1, 8, $arrstr);
    echo "<br>";
?>