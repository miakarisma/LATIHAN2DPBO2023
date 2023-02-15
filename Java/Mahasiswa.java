/*
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

// Kelas Mahasiswa merupakan kelas anak dari manusia dan kelas induk dari sivitas akademik
public class Mahasiswa extends Human
{
    // Atribut pada kelas mahasiswa yang terdiri dari nim, fakultas serta prodi
    private String nim;
    private String fakultas;
    private String prodi;

    // Constructor
    public Mahasiswa()
    {
        this.nim = "";
        this.fakultas = "";
        this.prodi = "";
    }

    // Method untuk set setiap atribut pada kelas Mahasiswa
    public void setNim(String nim)
    {
        this.nim = nim;
    }

    public void setFakultas(String fakultas)
    {
        this.fakultas = fakultas;
    }

    public void setProdi(String prodi)
    {
        this.prodi = prodi;
    }

    // Method untuk get setiap atribut pada kelas Mahasiswa
    public String getNim()
    {
        return nim;
    }

    public String getFakultas()
    {
        return fakultas;
    }

    public String getProdi()
    {
        return prodi;
    }
}