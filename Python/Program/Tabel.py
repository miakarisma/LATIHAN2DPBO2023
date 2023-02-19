# Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

# Kelas Tabel merupakan kelas untuk menampilkan tabel data list Mahasiswa
class Tabel:
    # Atribut yang digunakan pada kelas Tabel
    __baris = 0
    __kolom = 0

    # Constructor
    def __init__(self, baris=0, kolom=0):
        self.__baris = baris
        self.__kolom = kolom

    # Method setter untuk set setiap nilai atribut pada kelas Tabel
    def setBaris(self, baris):
        self.__baris = baris

    def setKolom(self, kolom):
        self.__kolom = kolom

    # Method getter untuk mendapatkan nilai setiap atribut pada kelas Tabel
    def getBaris(self):
        return self.___baris

    def getKolom(self):
        return self.__kolom

    # Method untuk menampilkan list dalam bentuk tabel
    def buatBaris(self, baris, kolom, data):
        max = [0] * kolom
        for i in range(kolom):
            for j in range(baris):
                if len(data[j][i]) > max[i]:
                    max[i] = len(data[j][i])
        
        for i in range(baris):
            for j in range(kolom):
                for k in range(max[j]):
                    print("-", end="")
                print("--", end="")
            print("---------")
            for j in range(kolom):
                print("|" + data[i][j], end="")
                for k in range(max[j] - len(data[i][j])):
                    print(" ", end="")
                print("  ", end="")
            print("|")
        for j in range(kolom):
            for k in range(max[j]):
                print("-", end="")
            print("--", end="")
        print("---------")
