/*
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

// Kelas Main merupakan kelas utama
import java.util.ArrayList;
public class Main {
    public static void main(String[] args)
    {
        // List untuk data daftarSivitas
        ArrayList<SivitasAkademik> daftarSivitas = new ArrayList<>();

        // Instansiasi sekaligus pembuatan objek sivitas yang pertama
        SivitasAkademik sivitas = new SivitasAkademik();
        sivitas.setNik("00001");
        sivitas.setNim("2102165");
        sivitas.setNama("Mia Karisma Haq");
        sivitas.setJeniKelamin("Perempuan");
        sivitas.setProdi("Ilmu Komputer");
        sivitas.setFakultas("FPMIPA");
        sivitas.setAsalUniversitas("UPI");
        sivitas.setEmailEdu("miakarisma87@upi.edu");
        daftarSivitas.add(sivitas);

        // Instansiasi sekaligus pembuatan objek sivitas yang kedua
        SivitasAkademik sivitas2 = new SivitasAkademik();
        sivitas2.setNik("00002");
        sivitas2.setNim("2000123");
        sivitas2.setNama("Techi");
        sivitas2.setJeniKelamin("Laki-laki");
        sivitas2.setProdi("Ilmu Komputer");
        sivitas2.setFakultas("FPMIPA");
        sivitas2.setAsalUniversitas("UPI");
        sivitas2.setEmailEdu("techi@upi.edu");
        daftarSivitas.add(sivitas2);

        // Instansiasi sekaligus pembuatan objek sivitas yang ketiga
        SivitasAkademik sivitas3 = new SivitasAkademik();
        sivitas3.setNik("00003");
        sivitas3.setNim("2000124");
        sivitas3.setNama("Cahgum");
        sivitas3.setJeniKelamin("Laki-laki");
        sivitas3.setProdi("Ilmu Komputer");
        sivitas3.setFakultas("FPMIPA");
        sivitas3.setAsalUniversitas("UPI");
        sivitas3.setEmailEdu("gumiya@upi.edu");
        daftarSivitas.add(sivitas3);

        // Instansiasi objek tabel
        Tabel tab = new Tabel();
        String[][] arrstr = new String[daftarSivitas.size()+1][8];
        arrstr[0][0] = "NIK";
        arrstr[0][1] = "NIM";
        arrstr[0][2] = "Nama";
        arrstr[0][3] = "Jenis Kelamin";
        arrstr[0][4] = "Prodi";
        arrstr[0][5] = "Fakultas";
        arrstr[0][6] = "Asal Universitas";
        arrstr[0][7] = "Email Edu";
        
        for(int i = 0; i < daftarSivitas.size(); i++)
        {
            arrstr[i+1][0] = daftarSivitas.get(i).getNik();
            arrstr[i+1][1] = daftarSivitas.get(i).getNim();
            arrstr[i+1][2] = daftarSivitas.get(i).getNama();
            arrstr[i+1][3] = daftarSivitas.get(i).getJeniKelamin();
            arrstr[i+1][4] = daftarSivitas.get(i).getProdi();
            arrstr[i+1][5] = daftarSivitas.get(i).getFakultas();
            arrstr[i+1][6] = daftarSivitas.get(i).getAsalUniversitas();
            arrstr[i+1][7] = daftarSivitas.get(i).getEmailEdu();
        }
        System.out.println();
        System.out.println("                        Daftar Data Sivitas Akademik di Universitas Pendidikan Indonesia");
        tab.buatBaris(daftarSivitas.size()+1, 8, arrstr);
        System.out.println();
    }
}
