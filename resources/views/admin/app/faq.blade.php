@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">
  <!-- Page Title -->
  <div class="pagetitle">
    <h1>F.A.Q</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Hello, Admin!</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- F.A.Q Section -->
  <section class="section faq">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Frequently Asked Questions</h5>
            
            <!-- Accordion for FAQ -->
            <div class="accordion" id="faqAccordion">

              <!-- Question 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="questionOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answerOne" aria-expanded="true" aria-controls="answerOne">
                    1. Bagaimana cara menambahkan data kuisioner baru?
                  </button>
                </h2>
                <div id="answerOne" class="accordion-collapse collapse show" aria-labelledby="questionOne" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Untuk menambahkan data kuisioner baru, masuk ke halaman <strong>Data Kuisioner</strong> dan klik tombol <strong>Tambah Kuisioner</strong>. Isi formulir yang tersedia dan klik Simpan.
                  </div>
                </div>
              </div>

              <!-- Question 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="questionTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
                    2. Bagaimana cara mengunggah data responden?
                  </button>
                </h2>
                <div id="answerTwo" class="accordion-collapse collapse" aria-labelledby="questionTwo" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Untuk mengunggah data responden, buka halaman <strong>Unggah Data</strong>, pilih file dengan format <code>.xlsx</code> atau <code>.csv</code>, lalu klik tombol Unggah.
                  </div>
                </div>
              </div>

              <!-- Question 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="questionThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answerThree" aria-expanded="false" aria-controls="answerThree">
                    3. Bagaimana cara melihat status pengisian kuisioner oleh responden?
                  </button>
                </h2>
                <div id="answerThree" class="accordion-collapse collapse" aria-labelledby="questionThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Anda bisa melihat status pengisian kuisioner di halaman <strong>Data Responden</strong> pada kolom <em>Status</em>. Status akan menampilkan informasi "Sudah Mengisi" atau "Belum Mengisi".
                  </div>
                </div>
              </div>

              <!-- Question 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="questionFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answerFour" aria-expanded="false" aria-controls="answerFour">
                    4. Apa yang harus dilakukan jika unggah data gagal?
                  </button>
                </h2>
                <div id="answerFour" class="accordion-collapse collapse" aria-labelledby="questionFour" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Pastikan file yang Anda unggah sesuai dengan format yang diizinkan (<code>.xlsx</code> atau <code>.csv</code>). Jika masih gagal, periksa struktur data dalam file Anda.
                  </div>
                </div>
              </div>

              <!-- Question 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="questionFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answerFive" aria-expanded="false" aria-controls="answerFive">
                    5. Bagaimana cara mengunduh data responden?
                  </button>
                </h2>
                <div id="answerFive" class="accordion-collapse collapse" aria-labelledby="questionFive" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Untuk mengunduh data responden, buka halaman <strong>Unduh Data</strong>, lalu pilih format file yang diinginkan (<code>.xlsx</code> atau <code>.csv</code>).
                  </div>
                </div>
              </div>

            </div><!-- End Accordion -->

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
