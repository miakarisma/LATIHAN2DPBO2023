# Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

# Kelas Human yang digunakan untuk merepresentasikan data Human, Human merupakan kelas induk dari kelas SivitasAkademik dan buyut dari kelas Mahasiswa
class Human:
    # Atribut yang digunakan pada kelas Human terdiri dari nik, nama, dan jenis kelamin. Karena pada dasarnya setiap manusia dibedakan berdasarkan 3 identitas tersebut.
    __nik = ""
    __nama = ""
    __jenis_kelamin = ""

    # Constructor
    def __init__(self, nik="", nama="", jenis_kelamin=""):
        self.__nik = nik
        self.__nama = nama
        self.__jenis_kelamin = jenis_kelamin

    # Method setter untuk set nilai setiap atribut pada kelas Human
    def setNik(self, nik):
        self.__nik = nik

    def setNama(self, nama):
        self.__nama = nama
    
    def setJenisKelamin(self, jenis_kelamin):
        self.__jenis_kelamin = jenis_kelamin

    # Method getter untuk mendapatkan nilai setiap atribut pada kelas Human
    def getNik(self):
        return self.__nik

    def getNama(self):
        return self.__nama

    def getJenisKelamin(self):
        return self.__jenis_kelamin
