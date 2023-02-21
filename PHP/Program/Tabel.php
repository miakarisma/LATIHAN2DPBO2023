<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<?php
    // Kelas Tabel merupakan kelas untuk menampilkan tabel data list Mahasiswa
    class Tabel
    {
        // Atribut yang digunakan pada kelas Tabel
        private $baris = 0;
        private $kolom = 0;
        
        // Constructor
        public function __construct($baris = 0, $kolom = 0)
        {
            $this->baris = $baris;
            $this->kolom = $kolom;
        }

        // Method setter untuk set setiap nilai atribut pada kelas Tabel
        public function setBaris($baris)
        {
            $this->baris = $baris;
        }

        public function setKolom($kolom)
        {
            $this->kolom = $kolom;
        }

        // Method getter untuk mendapatkan nilai setiap atribut pada kelas Tabel
        public function getBaris()
        {
            return $this->baris;
        }

        public function getKolom()
        {
            return $this->kolom;
        }

        // Method untuk menampilkan list dalam bentuk tabel
        function buatBaris($baris, $kolom, $data) {
            $i = 0;
            $j = 0;

            echo "<table border='2' style='border-collapse:collapse;'>";
                for ($i=0; $i < $baris; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $kolom; $j++) { 
                        if ($j == 6) {
                            echo "<td>";
                            echo "<center>" . $data[$i][$j] . "</center>";
                            echo "<td>";
                        }
                        else {
                            echo "<td>";
                            echo $data[$i][$j];
                            echo "<td>";
                        }
                    }
                    echo "<br>";
                    echo "</tr>";
                }
            echo "</table>";
        }        

        // Destructor
        function __destruct()
        {
            
        }
    }
?>