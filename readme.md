# Aplikasi Manajemen Data Pasien

Aplikasi ini dibangun dengan menggunakan pola desain Model-View-Presenter (MVP) dalam PHP. Aplikasi ini memungkinkan pengguna untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data pasien yang disimpan dalam database MySQL.

## Struktur Aplikasi

Aplikasi ini terdiri dari beberapa komponen utama:

1. **Model**:
   - `DB`: Kelas untuk mengelola koneksi basis data MySQL.
   - `Pasien`: Kelas untuk merepresentasikan objek Pasien.
   - `TabelPasien`: Kelas untuk mengakses data pasien dari database.

2. **Presenter**:
   - `KontrakPresenter`: Interface untuk kontrak presenter.
   - `ProsesPasien`: Presenter untuk memproses data pasien.

3. **View**:
   - `KontrakView`: Interface untuk kontrak view.
   - `TampilPasien`: View untuk menampilkan data pasien.

4. **Templates**:
   - `skin.html`: Template HTML untuk tampilan aplikasi.

5. **File Utama**:
   - `index.php`: File utama untuk menjalankan aplikasi.

## Alur Sistem

1. Ketika pengguna membuka aplikasi melalui `index.php`, `TampilPasien` diinisialisasi.
2. `TampilPasien` kemudian menginstansiasi `ProsesPasien` sebagai presenter untuk memproses data pasien.
3. Presenter `ProsesPasien` melakukan pengambilan data pasien dari database menggunakan model `TabelPasien` dan menyimpannya dalam sebuah array.
4. Data pasien yang telah diproses kemudian ditampilkan oleh `TampilPasien` dalam bentuk tabel menggunakan template `skin.html`.
5. Pengguna dapat melihat daftar pasien dan informasi yang terkait dengan setiap entri pasien.
6. Untuk mengimplementasikan operasi CRUD, Anda dapat menambahkan logika pada presenter `ProsesPasien` dan menghubungkannya dengan tampilan `TampilPasien`.

## Penggunaan

1. Pastikan Anda memiliki server PHP dan MySQL yang terhubung.
2. Impor skema basis data dari file `schema.sql`.
3. Ubah konfigurasi basis data pada file `DB.class.php`.
4. Jalankan aplikasi dengan membuka `index.php` pada browser.

## Catatan

- Pastikan untuk menyesuaikan kode dengan kebutuhan aplikasi Anda, terutama dalam hal keamanan dan penanganan kesalahan.
- Implementasikan logika CRUD pada presenter dan kaitkan dengan tampilan sesuai kebutuhan aplikasi Anda.

