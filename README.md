# Tugas 1 — Anggota Perpustakaan

**Nama:** Muzaki Arifin
**NPM:** 4525210051

## Nama Domain
Anggota Perpustakaan 

## Invarian & Alasannya

1. **`jumlahPinjam` tidak boleh negatif**
   Alasan: jumlah buku yang dipinjam adalah kuantitas fisik. Nilai negatif
   tidak punya arti di dunia nyata.

2. **`jumlahPinjam` tidak boleh lebih dari 2**
   Alasan: aturan perpustakaan membatasi setiap anggota maksimal meminjam
   2 buku dalam satu waktu.

Kedua invarian dijaga oleh method `pinjamBuku()` dan `kembalikanBuku()`.
Tidak ada setter untuk `jumlahPinjam`, sehingga field ini hanya bisa
berubah lewat kedua method tersebut, yang selalu memvalidasi sebelum
mengubah nilai.

## Contoh Output (Java & PHP menghasilkan pola yang sama)

```
Nomor Anggota : 4525210042
Nama          : Muzaki Arifin
Jumlah Pinjam : 0

Setelah pinjamBuku() sekali:
Nomor Anggota : 4525210051
Nama          : Muzaki Arifin
Jumlah Pinjam : 1

Ditolak : Jumlah pinjam tidak boleh lebih dari 2
Ditolak : Jumlah pinjam tidak boleh negatif

```

## Cara kerja Sederhana

- Constructor mengisi nomorAnggota, nama, dan jumlahPinjam awal (0).
- pinjamBuku() menolak (melempar exception) kalau setelah ditambah 1
  akan melebihi batas 2 (menjaga Invarian 2).
- kembalikanBuku() menolak kalau jumlahPinjam sudah 0, supaya tidak
  jadi negatif (menjaga Invarian 1).
- Tidak ada setter untuk jumlahPinjam. Field ini hanya bisa berubah
  lewat pinjamBuku() dan kembalikanBuku(), karena keduanya yang
  memvalidasi sebelum mengubah nilai.


## Deklarasi Penggunaan AI
Saya menyusun code ini dengan fundamental dari internet lalu ketika error saya meminta bantuan AI (Claude, Anthropic)
untuk memahami apa yang salah dan apa yang perlu di benarkan. 
