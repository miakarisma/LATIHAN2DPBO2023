<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<?php
    // Memasukkan file kelas induk (kelas Sivitas Akademik) dari kelas Mahasiswa
    require('SivitasAkademik.php');

    /*
        Kelas Mahasiswa yang digunakan untuk merepresentasikan data Mahasiswa, Mahasiswa merupakan bagian dari sivitas akademik. Sehingga kelas Mahasiswa merupakan kelas turunan dari kelas Sivitas Akademik dan kelas cucu dari kelas Human.
    */
    class Mahasiswa extends SivitasAkademik
    {
        // Atribut yang digunakan pada kelas Mahasiswa terdiri dari nim, prodi dan fakultas yang merupakan identitas pembeda antar mahasiswa satu dengan lainnya.
        private $nim = '';
        private $prodi = '';
        private $fakultas = '';

        // Constructor
        public function __construct($nim = '', $prodi = '', $fakultas = '', $asal_univ = '', $email = '', $nik = '', $nama='', $jenis_kelamin = '')
        {
            parent::__construct($asal_univ, $email, $nik, $nama, $jenis_kelamin);
            $this->nim = $nim;
            $this->prodi = $prodi;
            $this->fakultas = $fakultas;
        }

        // Method setter untuk set setiap nilai atribut pada kelas Mahasiswa
        public function setNim($nim)
        {
            $this->nim = $nim;
        }

        public function setProdi($prodi)
        {
            $this->prodi = $prodi;
        }

        public function setFakultas($fakultas)
        {
            $this->fakultas = $fakultas;
        }
        
        // Method getter untuk mendapatkan nilai setiap atribut pada kelas Mahasiswa
        public function getNim()
        {
            return $this->nim;
        }

        public function getProdi()
        {
            return $this->prodi;
        }

        public function getFakultas()
        {
            return $this->fakultas;
        }

        // Destructor
        function __destruct()
        {
            
        }
    }
?>