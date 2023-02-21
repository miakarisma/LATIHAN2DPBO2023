<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<!-- 
    Kelas Human yang digunakan untuk merepresentasikan data Human, Human merupakan kelas induk dari kelas SivitasAkademik dan buyut dari kelas Mahasiswa 
-->
<?php
    class Human
    {
        // Atribut yang digunakan pada kelas Human terdiri dari nik, nama, dan jenis kelamin. Karena pada dasarnya setiap manusia dibedakan berdasarkan 3 identitas tersebut.
        private $nik = '';
        private $nama = '';
        private $jenis_kelamin = '';
        
        // Constructor
        public function __construct($nik = '', $nama = '', $jenis_kelamin = '')
        {
            $this->nik = $nik;
            $this->nama = $nama;
            $this->jenis_kelamin = $jenis_kelamin;
        }

        // Method setter untuk set nilai setiap atribut pada kelas Human
        public function setNik($nik)
        {
            $this->nik = $nik;
        }

        public function setNama($nama)
        {
            $this->nama = $nama;
        }

        public function setJenisKelamin($jenis_kelamin)
        {
            $this->jenis_kelamin = $jenis_kelamin;
        }

        // Method getter untuk mendapatkan nilai setiap atribut pada kelas Human
        public function getNik()
        {
            return $this->nik;
        }

        public function getNama()
        {
            return $this->nama;
        }

        public function getJenisKelamin()
        {
            return $this->jenis_kelamin;
        }

        // Destructor
        function __destruct()
        {
            
        }
    }
?>