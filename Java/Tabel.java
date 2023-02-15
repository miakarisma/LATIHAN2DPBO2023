/*
Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-2 dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

// Kelas Tabel merupakan kelas untuk menampilkan tabel data list sivitasAkademik
public class Tabel {
    // Atribut pada kelas tabel terdiri dari baris dan kolom
    private int baris;
    private int kolom;

    // Constructor
    Tabel() 
    {

    }

    // Constructor : Overloading
    Tabel(int baris, int kolom)
    {
        this.baris = baris;
        this.kolom = kolom;
    }

    // Method set setiap atribut pada kelas tabel
    public void setBaris(int baris)
    {
        this.baris = baris;
    }

    public void setKolom(int kolom)
    {
        this.kolom = kolom;
    }

    // Method get setiap atribut pada kelas tabel
    public int getBaris()
    {
        return baris;
    }

    public int getKolom()
    {
        return kolom;
    }

    // Method untuk menampilkan list dalam bentuk tabel
    public void buatBaris(int baris, int kolom, String[][] data)
    {
        int i = 0, j = 0;
        int max[] = new int[kolom];
        for (i = 0; i < kolom; i++) {
            max[i] = 0;
            for (j = 0; j < baris; j++) {
                if (data[j][i].length() > max[i]) {
                    max[i] = data[j][i].length();
                }
            }
        }

        for (i = 0; i < baris; i++) {
            for (j = 0; j < kolom; j++) {
                for (int k = 0; k < max[j]; k++) {
                    System.out.print("-");
                }
                System.out.print("--");
            }
            System.out.println("---------");
            for (j = 0; j < kolom; j++) {
                System.out.print("|" + data[i][j]);
                for (int k = 0; k < max[j] - data[i][j].length(); k++) {
                    System.out.print(" ");
                }
                System.out.print("  ");
            }
            System.out.println("|");
        }
        for (j = 0; j < kolom; j++) {
            for (int k = 0; k < max[j]; k++) {
                System.out.print("-");
            }
            System.out.print("--");
        }
        System.out.println("---------");
    }
}