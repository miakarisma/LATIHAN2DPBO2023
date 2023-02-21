<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<?php
    // Memasukkan file kelas induk (kelas Human) dari kelas Sivitas Akademik
    require('Human.php');

    /*
        Kelas Sivitas Akademik yang digunakan untuk merepresentasikan data Sivitas Akademik, Sivitas Akademik merupakan masyarakat akademik yang terdiri atas dosen dan mahasiswa. Sehingga kelas Sivitas Akademik merupakan kelas turunan dari kelas Human dan kelas induk dari kelas Mahasiswa.
    */
    class SivitasAkademik extends Human
    {
        // Atribut yang digunakan pada kelas Sivitas Akademik terdiri dari asal universitas dan email edu
        private $asal_universitas = '';
        private $email_edu = '';

        // Constructor
        public function __construct($asal_universitas = '', $email_edu = '', $nik = '', $nama='', $jenis_kelamin = '')
        {
            parent::__construct($nik, $nama, $jenis_kelamin);
            $this->asal_universitas = $asal_universitas;
            $this->email_edu = $email_edu;
        }
        
        // Method set untuk set setiap nilai atribut pada kelas Sivitas Akademik
        public function setAsalUniversitas($asal_universitas)
        {
            $this->asal_universitas = $asal_universitas;
        }

        public function setEmailEdu($email_edu)
        {
            $this->email_edu = $email_edu;
        }

        // Method get untuk mendapatkan nilai setiap atribut pada kelas Sivitas Akademik
        public function getAsalUniversitas()
        {
            return $this->asal_universitas;
        }

        public function getEmailEdu()
        {
            return $this->email_edu;
        }

        // Destructor
        function __destruct()
        {
            
        }
    }
?>