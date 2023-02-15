/*
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

// Kelas Manusia merupakan kelas induk dari mahasiswa dan kelas buyut dari sivitas akademik
public class Human
{
    // Atribut pada kelas manusia yang terdiri dari nik, nama serta jenis kelamin
    private String nik;
    private String nama;
    private String jenis_kelamin;

    // Constructor
    public Human()
    {
        this.nik = "";
        this.nama = "";
        this.jenis_kelamin = "";
    }

    // Method set setiap atribut pada kelas manusia
    public void setNik(String nik)
    {
        this.nik = nik;
    }

    public void setNama(String nama)
    {
        this.nama = nama;
    }

    public void setJeniKelamin(String JenisKelamin)
    {
        jenis_kelamin = JenisKelamin;
    }

    // Method get setiap atribut pada kelas manusia
    public String getNik()
    {
        return nik;
    }

    public String getNama()
    {
        return nama;
    }

    public String getJeniKelamin()
    {
        return jenis_kelamin;
    }
}