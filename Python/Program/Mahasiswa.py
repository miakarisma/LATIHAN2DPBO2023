# Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

# Mengimpor kelas induk (kelas Sivitas Akademik) dari kelas Sivitas Akademik
from SivitasAkademik import SivitasAkademik

# Kelas Mahasiswa yang digunakan untuk merepresentasikan data Mahasiswa, Mahasiswa merupakan bagian dari sivitas akademik. Sehingga kelas Mahasiswa merupakan kelas turunan dari kelas Sivitas Akademik dan kelas cucu dari kelas Human.
class Mahasiswa(SivitasAkademik):
    # Atribut yang digunakan pada kelas Mahasiswa terdiri dari nim, prodi dan fakultas yang merupakan identitas pembeda antar mahasiswa satu dengan lainnya.
    __nim = ""
    __prodi = ""
    __fakultas = ""

    # Constructor
    def __init__(self, nim="", prodi="", fakultas="", nik="", nama="", jenis_kelamin="", asal_univ="", email=""):
        super().__init__(asal_univ, email, nik, nama, jenis_kelamin)
        self.__nim = nim
        self.__prodi = prodi
        self.__fakultas = fakultas

    # Method setter untuk set setiap nilai atribut pada kelas Mahasiswa
    def setNim(self, nim):
        self.__nim = nim

    def setProdi(self, prodi):
        self.__prodi = prodi
    
    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    # Method getter untuk mendapatkan nilai setiap atribut pada kelas Mahasiswa
    def getNim(self):
        return self.__nim

    def getProdi(self):
        return self.__prodi

    def getFakultas(self):
        return self.__fakultas
