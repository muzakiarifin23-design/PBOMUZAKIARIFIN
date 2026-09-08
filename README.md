# Tugas 1 - OOP Class dan Object

## Nama
Muzaki Arifin

## Domain
Produk Toko

## Deskripsi

Program ini merupakan implementasi Object Oriented Programming (OOP)
dengan menggunakan class utama bernama `Produk`.

Program dibuat menggunakan dua bahasa pemrograman, yaitu Java dan PHP.

Class `Produk` digunakan untuk menyimpan informasi produk berupa nama
produk, harga, dan stok.

## Field

Class `Produk` memiliki tiga field:

- `namaProduk` : String
- `harga` : double
- `stok` : int

Semua field dibuat `private` untuk menerapkan encapsulation.

## Invariant

### 1. Harga tidak boleh negatif

Harga harus selalu memenuhi:

`harga >= 0`

Alasannya karena harga produk tidak boleh memiliki nilai negatif.

### 2. Stok tidak boleh negatif

Stok harus selalu memenuhi:

`stok >= 0`

Alasannya karena jumlah stok produk tidak mungkin bernilai negatif.

## Method

### tambahStok()

Digunakan untuk menambahkan stok produk.

Jumlah yang ditambahkan harus lebih dari 0.

### kurangiStok()

Digunakan untuk mengurangi stok produk.

Jumlah yang dikurangi harus lebih dari 0 dan tidak boleh melebihi stok
yang tersedia.

### tampilkanInfo()

Digunakan untuk menampilkan informasi produk.

## Encapsulation

Field dibuat `private` sehingga tidak dapat diubah secara langsung
dari luar class.

Tidak dibuat setter untuk field `harga` dan `stok` karena field
tersebut memiliki invariant yang harus dijaga.

Perubahan stok hanya dilakukan melalui method `tambahStok()` dan
`kurangiStok()`.

## Operasi Tidak Sah

Program mencoba dua operasi yang tidak sah:

1. Mengurangi stok sebanyak 20 ketika stok hanya 15.
2. Menambahkan stok sebanyak 0.

Kedua operasi tersebut ditolak menggunakan exception.

## Implementasi

Program diimplementasikan menggunakan:

- Java
- PHP

## Cara Menjalankan Java

Masuk ke folder Java:

```bash
cd java
Deklarasi Penggunaan AI
Saya menyusun code ini dengan fundamental dari internet lalu ketika error saya meminta bantuan AI (Claude, Anthropic) untuk memahami apa yang salah dan apa yang perlu di benarkan.
