# 📌 Project UAS Pemrograman Web
## Aplikasi Web Sederhana Berbasis PHP & MySQL (MVC)

---

### 📖 Deskripsi Proyek

Proyek ini merupakan aplikasi web sederhana yang dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web.
Aplikasi ini dibangun menggunakan PHP sebagai bahasa pemrograman dan MySQL sebagai basis data, dengan menerapkan konsep Model-View-Controller (MVC) sederhana.

Fungsi utama aplikasi adalah:

* Autentikasi pengguna (login)

* Menampilkan halaman dashboard

* Menampilkan data dari database

Aplikasi dijalankan secara lokal menggunakan XAMPP (Apache & MySQL).


### 🎯 Tujuan Pembuatan Aplikasi

Tujuan dari pembuatan aplikasi ini adalah:

1. Memahami dasar koneksi PHP dengan database MySQL

2. Menerapkan konsep MVC sederhana pada aplikasi web

3. Melatih pembuatan sistem login

4. Menampilkan data dari database ke halaman web

5. Membuat struktur folder dan kode yang terorganisir


### 🛠️ Teknologi yang Digunakan

* PHP (Backend)

* MySQL (Database)

* Apache (Web Server – XAMPP)

* HTML & CSS (Tampilan)

* phpMyAdmin (Manajemen Database)

* Visual Studio Code (Code Editor)


### 🗄️ Database

Nama database yang digunakan adalah db_uas.

Struktur Tabel:

* users
Digunakan untuk menyimpan data pengguna yang digunakan dalam proses login.

* data_items
Digunakan untuk menyimpan data yang ditampilkan pada halaman Data.

Database dibuat dan dikelola melalui phpMyAdmin, kemudian dihubungkan ke aplikasi menggunakan file konfigurasi database.

---

## 📂 Struktur Folder Proyek

PROJECT-UAS-WEB/
│
├── app/
│   ├── core/
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   └── Router.php
│   │
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   └── DataController.php
│   │
│   ├── models/
│   │   ├── User.php
│   │   └── Data.php
│   │
│   └── views/
│       ├── auth/
│       │   └── login.php
│       ├── dashboard/
│       │   └── index.php
│       ├── data/
│       │   └── index.php
│       └── layout/
│           ├── header.php
│           └── footer.php
│
├── config/
│   └── config.php
│
├── public/
│   └── index.php
│
└── database.sql

Struktur folder ini dibuat untuk memisahkan logika program, tampilan, dan koneksi database agar kode lebih rapi dan mudah dipahami.


## 🔄 Alur Kerja Aplikasi

1. Pengguna mengakses aplikasi melalui browser (localhost)

2. Sistem menampilkan halaman login

3. Pengguna melakukan login menggunakan data dari tabel users

4. Jika login berhasil, pengguna diarahkan ke halaman dashboard

5. Dari dashboard, pengguna dapat mengakses halaman Data

6. Data diambil dari tabel data_items dan ditampilkan ke halaman web

---

# 🖼️ Dokumentasi Screenshot (Proses Pengerjaan)

## 1️⃣ Screenshot (10)

Menampilkan proses pembuatan database db_uas menggunakan SQL di phpMyAdmin. Tahap ini merupakan awal dari pengerjaan proyek.

<img width="718" height="470" alt="Screenshot (10)" src="https://github.com/user-attachments/assets/b270b270-4ed0-4d5c-9395-b7d2aab19270" />


## 2️⃣ Screenshot (11)

Menampilkan database db_uas yang telah berhasil dibuat dan muncul pada daftar database di phpMyAdmin.

<img width="1366" height="356" alt="Screenshot (11)" src="https://github.com/user-attachments/assets/c7364f33-f932-4f73-84f8-9c5da5844202" />


## 3️⃣ Screenshot (12)

Menampilkan struktur tabel users, yang digunakan untuk menyimpan data pengguna dan autentikasi login.

<img width="1286" height="511" alt="Screenshot (12)" src="https://github.com/user-attachments/assets/a2cef7d3-8e93-4b3d-adc5-651fb6b009f6" />


## 4️⃣ Screenshot (13)

Menampilkan struktur tabel data_items, yang digunakan untuk menyimpan data utama aplikasi.

<img width="1286" height="342" alt="Screenshot (13)" src="https://github.com/user-attachments/assets/130eada1-f42d-400d-83b0-552c408306c1" />


## 5️⃣ Screenshot (27)

Menampilkan proses insert data awal ke tabel users sebagai data uji coba untuk login.

<img width="683" height="452" alt="Screenshot (27)" src="https://github.com/user-attachments/assets/3e7b2007-f6e8-4599-a25c-30d90761e2c7" />


## 6️⃣ Screenshot (28)

Menampilkan data yang telah berhasil masuk ke tabel database, menandakan proses input data berjalan dengan baik.

<img width="459" height="278" alt="Screenshot (28)" src="https://github.com/user-attachments/assets/e04a1484-665b-4167-9fa5-205365a569f7" />


## 7️⃣ Screenshot (30)

Menampilkan struktur folder proyek di Visual Studio Code yang telah disusun menggunakan konsep MVC sederhana.

<img width="443" height="272" alt="Screenshot (30)" src="https://github.com/user-attachments/assets/e125758e-577d-45e2-a153-4f30cba42cf5" />


## 8️⃣ Screenshot (42)

Menampilkan isi file Database.php yang berfungsi sebagai penghubung antara aplikasi dengan database MySQL.

<img width="586" height="352" alt="Screenshot (42)" src="https://github.com/user-attachments/assets/d70337ce-b0ed-4cc2-bcea-86cadec9a28a" />


## 9️⃣ Screenshot (43)

Menampilkan file Router.php yang mengatur alur routing dari URL ke controller yang sesuai.

<img width="643" height="378" alt="Screenshot (43)" src="https://github.com/user-attachments/assets/fd393b6b-b1fe-40cb-9d17-f8f1a0d97640" />


## 🔟 Screenshot (44)

Menampilkan file controller (Auth, Dashboard, dan Data Controller) yang mengatur logika aplikasi.

<img width="644" height="335" alt="Screenshot (44)" src="https://github.com/user-attachments/assets/af401c14-7b0e-4f76-aa3c-6fa4505feb4e" />


## 1️⃣1️⃣ Screenshot (45)

Menampilkan file model User.php yang digunakan untuk menangani proses autentikasi pengguna.

<img width="222" height="168" alt="Screenshot (45)" src="https://github.com/user-attachments/assets/eef139e4-0c22-48fe-9af4-3d867cd241fb" />


## 1️⃣2️⃣ Screenshot (46)

Menampilkan file model Data.php yang digunakan untuk mengambil data dari tabel data_items.

<img width="311" height="173" alt="Screenshot (46)" src="https://github.com/user-attachments/assets/6743fe9e-d612-4fa1-b46f-61a51a4081ed" />


## 1️⃣3️⃣ Screenshot (47)

Menampilkan tampilan halaman login aplikasi pada browser.

<img width="331" height="190" alt="Screenshot (47)" src="https://github.com/user-attachments/assets/cafc51e1-ad6d-43dd-9d6a-0673604c91e9" />


## 1️⃣4️⃣ Screenshot (48)

Menampilkan halaman dashboard setelah pengguna berhasil melakukan login.

<img width="610" height="346" alt="Screenshot (48)" src="https://github.com/user-attachments/assets/9c7a0f26-e7c3-4b0d-ab7e-aef009ece37c" />


## 1️⃣5️⃣ Screenshot (49)

Menampilkan halaman Data dengan tulisan “Data hidup”, yang menandakan koneksi database, model, dan controller berjalan dengan baik.

<img width="552" height="261" alt="Screenshot (49)" src="https://github.com/user-attachments/assets/b468ddc4-3da8-4750-a696-b4bc2ec557e1" />


## 1️⃣6️⃣ Screenshot (50)

Menampilkan file layout (header dan footer) yang digunakan sebagai template tampilan aplikasi.

<img width="482" height="186" alt="Screenshot (50)" src="https://github.com/user-attachments/assets/3e0c2e21-3830-4af3-bc49-2bbc5db91aaf" />


## 1️⃣7️⃣ Screenshot (51)

Menampilkan aplikasi yang dijalankan melalui browser menggunakan alamat localhost, menandakan aplikasi berhasil dijalankan.

<img width="624" height="349" alt="Screenshot (51)" src="https://github.com/user-attachments/assets/6809e965-f50e-459b-872b-3cb3cfb91f7d" />


## 1️⃣8️⃣ Screenshot (52)

Menampilkan tahap pengujian akhir aplikasi, di mana tidak terdapat error dan seluruh fitur utama berjalan dengan normal.

<img width="559" height="198" alt="Screenshot (52)" src="https://github.com/user-attachments/assets/5d6b657f-0dde-4e62-9f66-e81b2673800a" />


---

# ⚠️ Keterbatasan Aplikasi

Aplikasi ini memiliki beberapa keterbatasan, antara lain:

* Tidak memiliki fitur logout

* Tidak memiliki fitur edit dan hapus data

* Keterbatasan ini disesuaikan dengan ruang lingkup dan kebutuhan dasar tugas UAS.


# 📌 Kesimpulan

Aplikasi web ini telah berhasil dibuat dan dijalankan sesuai dengan tujuan tugas UAS Pemrograman Web. Aplikasi mampu melakukan autentikasi pengguna, menampilkan dashboard, serta menampilkan data dari database menggunakan konsep MVC sederhana.

Melalui proyek ini, mahasiswa dapat memahami dasar pembuatan aplikasi web berbasis PHP dan MySQL serta pentingnya struktur kode yang rapi dan terorganisir.
