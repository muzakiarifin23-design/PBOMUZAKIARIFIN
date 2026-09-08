<?php

require_once "Produk.php";

// Membuat objek valid
$produk = new Produk(
    "Keyboard Mechanical",
    350000,
    10
);

// Menampilkan objek
$produk->tampilkanInfo();

// Perubahan yang sah
echo PHP_EOL;
echo "Menambahkan stok sebanyak 5..." . PHP_EOL;

$produk->tambahStok(5);

$produk->tampilkanInfo();

// Operasi tidak sah 1
echo PHP_EOL;
echo "Mencoba mengurangi stok sebanyak 20..." . PHP_EOL;

try {
    $produk->kurangiStok(20);
} catch (InvalidArgumentException $e) {
    echo "DITOLAK: " . $e->getMessage() . PHP_EOL;
}

// Operasi tidak sah 2
echo PHP_EOL;
echo "Mencoba menambahkan stok sebanyak 0..." . PHP_EOL;

try {
    $produk->tambahStok(0);
} catch (InvalidArgumentException $e) {
    echo "DITOLAK: " . $e->getMessage() . PHP_EOL;
}

// Kondisi akhir
echo PHP_EOL;
echo "=== KONDISI AKHIR ===" . PHP_EOL;

$produk->tampilkanInfo();