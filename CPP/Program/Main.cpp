/* 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
*/

// Memasukan library yang digunakan termasuk kelas cucu dari kelas Human (Kelas Mahasiswa) dan kelas yang berdiri sendiri (Kelas Tabel)
#include <bits/stdc++.h>
#include "Mahasiswa.cpp"
#include "Tabel.cpp"

// Deklarasi namespace
using namespace std;

// Fungsi main() yang digunakan sebagai program utama
int main() {
    ios::sync_with_stdio(0);
	cin.tie();
    list<Mahasiswa> daftarMahasiswa; // List daftar Mahasiswa yang digunakan untuk menyimpan sekumpulan objek mahasiswa
    string nik, nama, gender, univ, email, nim, prodi, fakultas; // String untuk menyimpan identitas atau data diri dari mahasiswa
    int i = 0, ketemu = 0; // Variabel untuk kontrol perulangan
    int menu = 0; // Variabel untuk menu yang dipilih user

    // Perulangan untuk memproses setiap fitur yang diinginkan user
    while (menu != 3)
    {
        // Tampilan Dashboard
        cout << "+====================================================+" << endl;
        cout << "+   SELAMAT DATANG DI SISTEM INFORMASI MAHASISWA     +" << endl;
        cout << "+====================================================+" << endl;
        cout << "Berikut fitur-fitur yang tersedia pada layanan kami :" << endl;
        cout << "1. Tambah Data Mahasiswa" << endl;
        cout << "2. Tampilkan Daftar Mahasiswa" << endl;
        cout << "3. Keluar" << endl << endl;
        cout << "Fitur yang dipilih : ";
        cin >> menu;

        // Jika menu yang dipilih tambah data Mahasiswa maka lakukan instansiasi objek mahasiswa lalu masukan ke dalam list daftarMahasiswa
        if (menu == 1)
        {
            // Meminta masukan dari user untuk data mahasiswa
            cout << endl << "NIK : ";
            cin >> nik;
            cout << "Nama : ";
            cin >> nama;
            cout << "Jenis Kelamin : ";
            cin >> gender;
            cout << "Asal Universitas : ";
            cin >> univ;
            cout << "Email Edu : ";
            cin >> email;
            cout << "NIM : ";
            cin >> nim;
            cout << "Prodi : ";
            cin >> prodi;
            cout << "Fakultas : ";
            cin >> fakultas;

            // Pembuatan objek mahasiswa
            Mahasiswa mhs(nim, fakultas, prodi, nik, nama, gender, univ, email);
            // Menambah objek mahasiswa ke dalam list
            daftarMahasiswa.push_back(mhs);
            cout << "Data berhasil ditambahkan!" << endl << endl;
        }
        // Jika menu yang dipilih tampilkan data daftar Mahasiswa maka lakukan instansiasi objek tabel untuk menampilkan daftar mahasiswa
        else if (menu == 2)
        {
            Tabel tab; // Instansiasi objek tabel 
            string arrstr[daftarMahasiswa.size()+1][8]; // Array yang berisi list daftar Mahasiswa

            // Pengisian judul setiap kolom pada tabel
            arrstr[0][0] = "NIK";
            arrstr[0][1] = "NIM";
            arrstr[0][2] = "Nama";
            arrstr[0][3] = "Jenis Kelamin";
            arrstr[0][4] = "Prodi";
            arrstr[0][5] = "Fakultas";
            arrstr[0][6] = "Asal Universitas";
            arrstr[0][7] = "Email Edu";

            // Proses pengisian setiap elemen array
            i = 0;
            for(list<Mahasiswa>::iterator it = daftarMahasiswa.begin(); it != daftarMahasiswa.end(); it++)
            {
                arrstr[i+1][0] = it->getNik();
                arrstr[i+1][1] = it->getNim();
                arrstr[i+1][2] = it->getNama();
                arrstr[i+1][3] = it->getJenisKelamin();
                arrstr[i+1][4] = it->getProdi();
                arrstr[i+1][5] = it->getFakultas();
                arrstr[i+1][6] = it->getAsalUniversitas();
                arrstr[i+1][7] = it->getEmailEdu();
                i++;
            }

            // Menampilkan Daftar Data Mahasiswa
            cout << endl << "                                           Daftar Data Mahasiswa       " << endl;
            tab.buatBaris(daftarMahasiswa.size()+1, 8, arrstr);
            cout << endl;
        }
        // Jika menu yang dipilih keluar maka tampilkan pesan pemberitahuan
        else if (menu == 3)
        {
            cout << endl << "TERIMA KASIH TELAH MENGGUNAKAN SISTEM KAMI <3" << endl;
        }
        // Jika menu yang dipilih tidak tersedia pada fitur sistem maka tampilkan error handling
        else
        {
            cout << endl << "Maaf, fitur yang anda pilih tidak tersedia!" << endl;
        }
    }
    return 0; // Menyatakan keluaran dari fungsi main() adalah true
}