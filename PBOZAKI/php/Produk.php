<?php

class Produk
{
    private string $namaProduk;
    private float $harga;
    private int $stok;

    public function __construct(
        string $namaProduk,
        float $harga,
        int $stok
    ) {
        if (trim($namaProduk) === '') {
            throw new InvalidArgumentException(
                "Nama produk tidak boleh kosong."
            );
        }

        if ($harga < 0) {
            throw new InvalidArgumentException(
                "Harga tidak boleh negatif."
            );
        }

        if ($stok < 0) {
            throw new InvalidArgumentException(
                "Stok tidak boleh negatif."
            );
        }

        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tambahStok(int $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException(
                "Jumlah stok harus lebih dari 0."
            );
        }

        $this->stok += $jumlah;
    }

    public function kurangiStok(int $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException(
                "Jumlah stok yang dikurangi harus lebih dari 0."
            );
        }

        if ($jumlah > $this->stok) {
            throw new InvalidArgumentException(
                "Stok tidak mencukupi."
            );
        }

        $this->stok -= $jumlah;
    }

    public function tampilkanInfo(): void
    {
        echo "=== DATA PRODUK ===" . PHP_EOL;
        echo "Nama Produk : " . $this->namaProduk . PHP_EOL;
        echo "Harga       : Rp" . $this->harga . PHP_EOL;
        echo "Stok        : " . $this->stok . PHP_EOL;
    }
}