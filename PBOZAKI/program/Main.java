public class Main {
    public static void main(String[] args) {

        // Membuat objek valid
        Produk produk = new Produk(
            "Keyboard Mechanical",
            350000,
            10
        );

        // Menampilkan objek
        produk.tampilkanInfo();

        // Perubahan yang sah
        System.out.println("Menambahkan stok sebanyak 5...");
        produk.tambahStok(5);

        produk.tampilkanInfo();

        // Operasi tidak sah 1
        System.out.println("Mencoba mengurangi stok sebanyak 20...");

        try {
            produk.kurangiStok(20);
        } catch (IllegalArgumentException e) {
            System.out.println("DITOLAK: " + e.getMessage());
        }

        // Operasi tidak sah 2
        System.out.println("Mencoba menambahkan stok sebanyak 0...");

        try {
            produk.tambahStok(0);
        } catch (IllegalArgumentException e) {
            System.out.println("DITOLAK: " + e.getMessage());
        }

        // Kondisi akhir
        System.out.println("=== KONDISI AKHIR ===");
        produk.tampilkanInfo();
    }
}