/* 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
*/ 

// Memasukan library yang digunakan, termasuk kelas induk (kelas Human) dari kelas Sivitas Akademik
#include <iostream>
#include <string>
#include "Human.cpp"

// Deklarasi namespace
using namespace std;

/*
    Kelas Sivitas Akademik yang digunakan untuk merepresentasikan data Sivitas Akademik, Sivitas Akademik merupakan masyarakat akademik yang terdiri atas dosen dan mahasiswa. Sehingga kelas Sivitas Akademik merupakan kelas turunan dari kelas Human dan kelas induk dari kelas Mahasiswa.
*/
class SivitasAkademik : public Human
{
private:
    // Atribut yang digunakan pada kelas Sivitas Akademik terdiri dari asal universitas dan email edu
    string asal_universitas;
    string email_edu;
    string jenis_kelamin;
public:
    // Constructor
    SivitasAkademik()
    {

    }

    // Constructor : Overloading
    SivitasAkademik(string asal_universitas, string nik, string nama, string jenis_kelamin) : Human(nik, nama, jenis_kelamin)
    {
        this->asal_universitas = asal_universitas;
        email_edu = "";
    }

    // Constructor : Overloading
    SivitasAkademik(string asal_universitas, string email, string nik, string nama, string jenis_kelamin) : Human(nik, nama, jenis_kelamin)
    {
        this->asal_universitas = asal_universitas;
        email_edu = email;
    }

    // Method set untuk set setiap nilai atribut pada kelas Sivitas Akademik
    void setAsalUniversitas(string asal_universitas)
    {
        this->asal_universitas = asal_universitas;
    }

    void setEmailEdu(string email)
    {
        email_edu = email;
    }

    // Method get untuk mendapatkan nilai setiap atribut pada kelas Sivitas Akademik
    string getAsalUniversitas()
    {
        return asal_universitas;
    }

    string getEmailEdu()
    {
        return email_edu;
    }

    // Destructor
    ~SivitasAkademik()
    {

    }
};