@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">
  <!-- Page Title -->
  <div class="pagetitle">
    <h1>Panduan Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Hello, Admin!</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Panduan Form Content -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Panduan Penggunaan Halaman Admin</h5>
            <p>Selamat datang, <strong>Admin!</strong> Berikut adalah panduan untuk menggunakan fitur-fitur yang tersedia pada halaman admin:</p>

            <!-- Dashboard -->
            <h6>1. Dashboard</h6>
            <p>
              Halaman utama yang menampilkan ringkasan umum terkait data responden dan kuisioner. Navigasi awal untuk mengakses fitur lainnya.
            </p>

            <!-- Data Kuisioner -->
            <h6>2. Data Kuisioner</h6>
            <ul>
              <li><strong>Create</strong>: Menambahkan kuisioner baru untuk responden.</li>
              <li><strong>Read</strong>: Melihat daftar kuisioner yang sudah dibuat sebelumnya.</li>
              <li><strong>Update</strong>: Mengedit kuisioner jika ada perubahan.</li>
              <li><strong>Delete</strong>: Menghapus kuisioner yang sudah tidak diperlukan.</li>
            </ul>

            <!-- Data Responden -->
            <h6>3. Data Responden</h6>
            <p>
              Menampilkan daftar responden lengkap dengan informasi seperti nama, program studi, NIM, email, fakultas, dan status pengisian.
              <br>
              Fitur ini bersifat hanya untuk <strong>melihat data</strong> tanpa fungsi CRUD (Create, Read, Update, Delete) tambahan.
            </p>

            <!-- Unggah Data -->
            <h6>4. Unggah Data</h6>
            <p>
              Anda dapat mengunggah file dalam format <strong>Excel (.xlsx)</strong> atau <strong>CSV</strong> untuk memperbarui atau menambahkan data responden secara massal. 
              Pastikan mengikuti format data sesuai template yang tersedia.
            </p>

            <!-- Unduh Data -->
            <h6>5. Unduh Data</h6>
            <p>
              Admin dapat mengunduh semua data responden atau data kuisioner dalam format <strong>Excel (.xlsx)</strong> atau <strong>CSV</strong> untuk keperluan arsip atau analisis lanjutan.
            </p>

            <!-- User Survey -->
            <h6>6. User Survey</h6>
            <p>
              Fitur untuk memantau dan mengelola survei pengguna yang dikirimkan ke responden, seperti melihat progres pengisian kuisioner.
            </p>

            <hr>
            <p>
              Jika mengalami kendala dalam penggunaan halaman admin, silakan hubungi tim teknis melalui email: 
              <strong>support@tracerstudy.com</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
