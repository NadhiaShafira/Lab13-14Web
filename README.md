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

![foto]()

# 2. ⏭️ Navigasi Halaman (Next/Halaman 2)

Membuktikan bahwa tombol navigasi berfungsi untuk melihat data di halaman berikutnya.

![foto]()

# 3. 🔍 Fitur Pencarian (Searching)

Proses memfilter data berdasarkan kata kunci yang dimasukkan oleh user.

![foto]()

# 4. 🔗 Pencarian Berkelanjutan (Halaman Selanjutnya dalam Mode Cari)

Menunjukkan bahwa saat berpindah halaman, hasil pencarian tetap tersimpan (Query String tetap ada di URL).

![foto]()

# 5. 🚫 Kondisi Data Tidak Ditemukan

Handling jika user mencari kata kunci yang tidak ada di dalam database.

![foto]()
