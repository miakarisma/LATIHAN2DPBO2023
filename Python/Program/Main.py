#  Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Mengimpor kelas yang digunakan kedalam fungsi Main, kelas yang diimpor merupakan kelas cucu (Kelas Mahasiswa) dan kelas yang berdiri sendiri (Kelas Tabel)
from Mahasiswa import Mahasiswa
from Tabel import Tabel

daftarMahasiswa = [] # List daftar Mahasiswa yang digunakan untuk menyimpan sekumpulan objek mahasiswa
menu = 0 # Variabel untuk menu yang dipilih user

# Perulangan untuk memproses setiap fitur yang diinginkan user
while (menu != 5):
    # Tampilan Dashboard
    print("+====================================================+")
    print("+   SELAMAT DATANG DI SISTEM INFORMASI MAHASISWA     +")
    print("+====================================================+")
    print("Berikut fitur-fitur yang tersedia pada layanan kami :")
    print("1. Tambah Data Mahasiswa")
    print("2. Tampilkan Daftar Mahasiswa")
    print("3. Keluar")
    menu = int(input("\nFitur yang dipilih : "))

    # Jika menu yang dipilih tambah data Mahasiswa maka lakukan instansiasi objek mahasiswa lalu masukan ke dalam list daftarMahasiswa
    if (menu == 1):
        # Meminta masukan dari user untuk data mahasiswa
        nik = input("\nNIK : ")
        nama = input("Nama : ")
        gender = input("Jenis Kelamin : ")
        univ = input("Asal Universitas : ")
        email = input("Email Edu : ")
        nim = input("NIM : ")
        prodi = input("Prodi : ")
        fakultas = input("Fakultas : ")

        # Pembuatan objek mahasiswa sekaligus menambahkan objek tersebut ke dalam list
        daftarMahasiswa.append(Mahasiswa(nim, prodi, fakultas, nik, nama, gender, univ, email))
        print("Data berhasil ditambahkan!\n")
    # Jika menu yang dipilih tampilkan data daftar Mahasiswa maka lakukan instansiasi objek tabel untuk menampilkan daftar mahasiswa
    elif (menu == 2):
        tab = Tabel() # Instansiasi objek tabel
        arrstr = [[0 for j in range(8)] for i in range(len(daftarMahasiswa)+1)] # Array yang berisi list daftar Mahasiswa

        # Pengisian judul setiap kolom pada tabel
        arrstr[0][0] = "NIK";
        arrstr[0][1] = "NIM";
        arrstr[0][2] = "Nama";
        arrstr[0][3] = "Jenis Kelamin";
        arrstr[0][4] = "Prodi";
        arrstr[0][5] = "Fakultas";
        arrstr[0][6] = "Asal Universitas";
        arrstr[0][7] = "Email Edu";
        
        # Proses pengisian setiap elemen array
        for i, mhs in enumerate(daftarMahasiswa):
            arrstr[i+1][0] = mhs.getNik()
            arrstr[i+1][1] = mhs.getNim()
            arrstr[i+1][2] = mhs.getNama()
            arrstr[i+1][3] = mhs.getJenisKelamin()
            arrstr[i+1][4] = mhs.getProdi()
            arrstr[i+1][5] = mhs.getFakultas()
            arrstr[i+1][6] = mhs.getAsalUniversitas()
            arrstr[i+1][7] = mhs.getEmailEdu()
        
        # Menampilkan Daftar Data Mahasiswa
        print("\n                                                       Daftar Data Mahasiswa       ")
        tab.buatBaris(len(daftarMahasiswa)+1, 8, arrstr)
        print("\n")
    # Jika menu yang dipilih keluar maka tampilkan pesan pemberitahuan
    elif (menu == 3):
        print("\nTERIMA KASIH TELAH MENGGUNAKAN SISTEM KAMI <3\n")
    # Jika menu yang dipilih user tidak terdapat pada fitur yang disediakan sistem maka tampilkan error handling
    else:
        print("\nMaaf, fitur yang anda pilih tidak tersedia!\n")
