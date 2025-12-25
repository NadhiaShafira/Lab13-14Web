# Lab13-14Web

**Nama              : Nadhia Shafira**

**Kelas             : TI.24.A.5**

**Matkul            : Pemograman Web 1**

**Dosen Pengampu    : Agung Nugroho, S.Kom., M.Kom.**

---

## 📂 Praktikum 13: Pagination & Searching

Pada praktikum ini, saya mengimplementasikan fitur pembagian halaman (pagination) dan pencarian data (searching) menggunakan PHP OOP pada modul artikel.

### 🛠️ Fitur yang Ditambahkan:

1.  **Pagination**: Membatasi tampilan data agar tidak terlalu panjang (Limit 2 data per halaman).

2.  **Searching**: Memungkinkan pengguna mencari judul artikel tertentu menggunakan operator `LIKE`.

3.  **Sticky Query**: Navigasi halaman tetap mengingat kata kunci yang sedang dicari.

---

# 1. 📋 Tampilan Index dengan Pagination

Menunjukkan halaman awal artikel yang sudah dibatasi jumlah datanya.

![foto](https://github.com/NadhiaShafira/Lab13-14Web/blob/67283e81e980e2802d7929079ea60b8fba21c71d/ss_prak13/01-tampilan-index-pagination.png)

# 2. ⏭️ Navigasi Halaman (Next/Halaman 2)

Membuktikan bahwa tombol navigasi berfungsi untuk melihat data di halaman berikutnya.

![foto](https://github.com/NadhiaShafira/Lab13-14Web/blob/38b3a792dc540b65231c2aa49a1b5e4f72508f0f/ss_prak13/02-navigasi-halaman.png)

# 3. 🔍 Fitur Pencarian (Searching)

Proses memfilter data berdasarkan kata kunci yang dimasukkan oleh user.

![foto](https://github.com/NadhiaShafira/Lab13-14Web/blob/47037fb893558fb8e5e330c454c165c8f71e4aea/ss_prak13/03-uji-fitur-pencarian.png)

# 4. 🔗 Pencarian Berkelanjutan (Halaman Selanjutnya dalam Mode Cari)

Menunjukkan bahwa saat berpindah halaman, hasil pencarian tetap tersimpan (Query String tetap ada di URL).

![foto](https://github.com/NadhiaShafira/Lab13-14Web/blob/4116b6d29154fd40a4ff023ff5024a07a8705d40/ss_prak13/04-pencarian-halaman-berikutnya.png)

# 5. 🚫 Kondisi Data Tidak Ditemukan

Handling jika user mencari kata kunci yang tidak ada di dalam database.

![foto](https://github.com/NadhiaShafira/Lab13-14Web/blob/a10f1a0a13243c318c8de3a548b5f1c37a46ecf0/ss_prak13/05-data-kosong.png)

---

## 📂 Praktikum 14: Membuat Pencarian Data

Pada praktikum ini, saya menyempurnakan fitur pencarian dengan mengintegrasikan filter pada query SQL menggunakan klausa `WHERE` dan `LIKE`.

### 🛠️ Perubahan yang Dilakukan:

1.  **Penempatan Elemen**: Menyisipkan form pencarian di antara tombol tambah data dan tabel utama.
   
2.  **Filter Query**: Mengubah query standar menjadi query dinamis yang mendukung pencarian kata kunci judul artikel.
   
3.  **Handling Submit**: Menambahkan pengecekan `isset($_GET['submit'])` untuk memicu proses pencarian.

### 📸 Dokumentasi Praktikum 14

#### 1. 🔍 Form Pencarian Data

Implementasi form input untuk pencarian data sebelum tabel artikel.
