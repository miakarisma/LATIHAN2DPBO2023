/*
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

// Kelas SivitasAkademik merupakan kelas anak dari mahasiswa dan kelas cucu dari manusia
public class SivitasAkademik extends Mahasiswa
{
    // Atribut pada kelas mahasiswa yang terdiri dari asal universitas serta email edu
    private String asal_universitas;
    private String email_edu;

    // Constructor
    public SivitasAkademik() 
    {
        this.asal_universitas = "";
        this.email_edu = "";
    }

    // Method set setiap atribut pada kelas SivitasAkademik
    public void setAsalUniversitas(String asal_universitas)
    {
        this.asal_universitas = asal_universitas;
    }

    public void setEmailEdu(String email_edu)
    {
        this.email_edu = email_edu;
    }

    // Method get setiap atribut pada kelas SivitasAkademik
    public String getAsalUniversitas()
    {
        return asal_universitas;
    }
    
    public String getEmailEdu()
    {
        return email_edu;
    }
    
}