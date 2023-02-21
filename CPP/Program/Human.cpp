/* 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
*/ 

// Memasukan library yang digunakan
#include <iostream>
#include <string>

// Deklarasi namespace
using namespace std;

/* 
    Kelas Human yang digunakan untuk merepresentasikan data Human, Human merupakan kelas induk dari kelas SivitasAkademik dan buyut dari kelas Mahasiswa
*/
class Human {
private:
    // Atribut yang digunakan pada kelas Human terdiri dari nik, nama, dan jenis kelamin. Karena pada dasarnya setiap manusia dibedakan berdasarkan 3 identitas tersebut.
    string nik;
    string nama;
    string jenis_kelamin;
public:
    // Constructor
    Human()
    {

    }

    // Constructor : Overloading
    Human(string nik)
    {
        this->nik = nik;
        nama = "";
        jenis_kelamin = "";
    }

    // Constructor : Overloading
    Human(string nik, string nama)
    {
        this->nik = nik;
        this->nama = nama;
        jenis_kelamin = "";
    }

    // Constructor : Overloading
    Human(string nik, string nama, string gender)
    {
        this->nik = nik;
        this->nama = nama;
        jenis_kelamin = gender;
    }

    // Method setter untuk set nilai setiap atribut pada kelas Human
    void setNik(string nik)
    {
        this->nik = nik;
    }

    void setNama(string nama)
    {
        this->nama = nama;
    }

    void setJenisKelamin(string jenis_kelamin)
    {
        this->jenis_kelamin = jenis_kelamin;
    }

    // Method getter untuk mendapatkan nilai setiap atribut pada kelas Human
    string getNik()
    {
        return nik;
    }

    string getNama()
    {
        return nama;
    }

    string getJenisKelamin()
    {
        return jenis_kelamin;
    }

    // Destructor
    ~Human()
    {

    }
};