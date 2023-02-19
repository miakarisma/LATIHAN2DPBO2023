# Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

# Mengimpor kelas induk (kelas Human) dari kelas Sivitas Akademik
from Human import Human

# Kelas Sivitas Akademik yang digunakan untuk merepresentasikan data Sivitas Akademik, Sivitas Akademik merupakan masyarakat akademik yang terdiri atas dosen dan mahasiswa. Sehingga kelas Sivitas Akademik merupakan kelas turunan dari kelas Human dan kelas induk dari kelas Mahasiswa.
class SivitasAkademik(Human):
    # Atribut yang digunakan pada kelas Sivitas Akademik terdiri dari asal universitas dan email edu
    __asal_universitas = ""
    __email_edu = ""

    # Constructor
    def __init__(self, asal_universitas="", email_edu="", nik="", nama="", jenis_kelamin=""):
        super().__init__(nik, nama, jenis_kelamin)
        self.__asal_universitas = asal_universitas
        self.__email_edu = email_edu

    # Method set untuk set setiap nilai atribut pada kelas Sivitas Akademik
    def setAsalUniversitas(self, asal_universitas):
        self.__asal_universitas = asal_universitas

    def setEmailEdu(self, email_edu):
        self.__email_edu = email_edu

    # Method get untuk mendapatkan nilai setiap atribut pada kelas Sivitas Akademik
    def getAsalUniversitas(self):
        return self.__asal_universitas

    def getEmailEdu(self):
        return self.__email_edu
        