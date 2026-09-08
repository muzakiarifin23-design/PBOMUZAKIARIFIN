public class Produk {
    private String namaProduk;
    private double harga;
    private int stok;

    public Produk(String namaProduk, double harga, int stok) {
        if (namaProduk == null || namaProduk.isBlank()) {
            throw new IllegalArgumentException(
                "Nama produk tidak boleh kosong."
            );
        }

        if (harga < 0) {
            throw new IllegalArgumentException(
                "Harga tidak boleh negatif."
            );
        }

        if (stok < 0) {
            throw new IllegalArgumentException(
                "Stok tidak boleh negatif."
            );
        }

        this.namaProduk = namaProduk;
        this.harga = harga;
        this.stok = stok;
    }

    public void tambahStok(int jumlah) {
        if (jumlah <= 0) {
            throw new IllegalArgumentException(
                "Jumlah stok yang ditambahkan harus lebih dari 0."
            );
        }

        stok += jumlah;
    }

    public void kurangiStok(int jumlah) {
        if (jumlah <= 0) {
            throw new IllegalArgumentException(
                "Jumlah stok yang dikurangi harus lebih dari 0."
            );
        }

        if (jumlah > stok) {
            throw new IllegalArgumentException(
                "Stok tidak mencukupi."
            );
        }

        stok -= jumlah;
    }

    public void tampilkanInfo() {
        System.out.println("=== DATA PRODUK ===");
        System.out.println("Nama Produk : " + namaProduk);
        System.out.println("Harga       : Rp" + harga);
        System.out.println("Stok        : " + stok);
    }
}